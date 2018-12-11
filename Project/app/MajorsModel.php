<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MajorsModel extends Model
{
    protected $table = 'majors';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'major_code', 'major_name', 'department_id', 'created_at', 'updated_at'];

    public function index()
    {
        $danhSach = $this::get();
        return $danhSach;
    }

    public function search($ma)
    {
        return $this::where('major_code', '=', $ma)->get();
    }

    public function count_dk($ma){
        return $this::where('major_code', '=', $ma)->count();
    }
    public function dem()
    {
        return $this::count();
    }
}
