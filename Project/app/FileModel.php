<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileModel extends Model
{
    protected $table = 'example_file';
    protected $primaryKey = 'file_name';
    protected $keyType = 'varchar';
    protected $fillable = ['file_name','file_url', 'created_at', 'updated_at'];

    public function index()
    {
        return $this::get();
    }

    public function count($request)
    {
        return $this::where('file_name','=',$request)->count();
    }
    public function create($request)
    {
        $result = $this::insert($request);
        return $result;
    }

    public function remove($request)
    {
        $query = $this::where('file_name','=',$request->file_name);
        $result=$query->get();
        if (empty($result->toArray()) ) {
            return [
                'status' => 'fail'
            ];
        }
        $query->delete();
        return [
            'status' => 'success'
        ];
    }
}
