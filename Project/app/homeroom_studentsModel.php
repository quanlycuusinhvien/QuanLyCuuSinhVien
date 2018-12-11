<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class homeroom_studentsModel extends Model
{
    protected $table = 'homeroom_students';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'homeroom_id', 'student_id',
        'status', 'reason', 'graduation_semester', 'graduation_scholastic',
        'reg_no', 'reg_date', 'AUN', 'gpa', 'drl', 'tctl', 'ranked', 'degree', 'created_at', 'updated_at'];

    public function dem()
    {
        return $this::count();
    }

    public function search($ma)
    {
        return $this::where('student_id', '=', $ma)->get();
    }
}
