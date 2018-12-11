<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class collegeModel extends Model
{
    protected $table = 'colleges';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'college_code', 'college_name', 'created_at', 'updated_at'];

    public function index()
    {
        $danhSach = $this::get();
        return $danhSach;
    }

    public function dem()
    {
        return $this::count();
    }

    public function count_dk($ma)
    {
        return $this::where('college_code', '=', $ma)->count();
    }

    public function search($ma)
    {
        return $this::where('college_code', '=', $ma)->get();
    }

}
