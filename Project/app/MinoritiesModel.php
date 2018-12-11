<?php
/**
 * Created by PhpStorm.
 * User: Nguyen Van Loc
 * Date: 10/16/2018
 * Time: 22:46
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class MinoritiesModel extends Model
{
    protected $table = 'minorities';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    protected $fillable = ['id', 'minority_name', 'created_at', 'updated_at'];

    public function index(){
        $result = $this::get();
        return $result;
    }

    public function create(Request $request)
    {
        $result = $this::insert([
            'id' => $request->dantoc_id,
            'minority_name' => $request->dantoc_ten
        ]);
        return isset($result);
    }

    public function change(Request $request)
    {
        $result = $this::where('id', $request->dantoc_id)
            ->update([
                'minority_name' => $request->dantoc_ten,
                'updated_at' =>$request->updated_at
            ]);
        return $result;
    }

    public function remove(Request $request)
    {
        $query = $this::where('id', $request->dantoc_id);
        $result = $query->get();
        if (empty($result->toArray())) {
            return [
                'status' => 'fail'
            ];
        }
        $query->delete();
        return [
            'status' => 'success'
        ];
    }

    public function search(Request $request)
    {
        return $this::where('id', $request->dantoc_id)
            ->get();
    }
}
