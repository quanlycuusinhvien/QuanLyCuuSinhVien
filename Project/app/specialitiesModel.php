<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class specialitiesModel extends Model
{
    protected $table = 'specialities';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    protected $fillable = ['id', 'major_id', 'speciality_code', 'speciality_name', 'created_at', 'updated_at'];

    public function dem()
    {
        return $this::count();
    }

    public function search($ma)
    {
        return $this::where('speciality_code', '=', $ma)->get();
    }

    public function count_dk($ma)
    {
        return $this::where('speciality_code', '=', $ma)->count();
    }
}
