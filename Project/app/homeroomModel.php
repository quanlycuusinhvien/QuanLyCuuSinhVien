<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class homeroomModel extends Model
{
    protected $table = 'homeroom';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    protected $fillable = ['id', 'homeroom_code', 'homeroom_name', 'course', 'speciality_id', 'created_at', 'updated_at'];

    public function dem()
    {
        return $this::count();
    }

    public function search($ma)
    {
        return $this::where('homeroom_code', '=', $ma)->get();
    }

    public function count_dk($ma)
    {
        return $this::where('homeroom_code', '=', $ma)->count();
    }
}
