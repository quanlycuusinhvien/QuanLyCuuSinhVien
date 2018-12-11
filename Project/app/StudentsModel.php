<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Response;

class StudentsModel extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    protected $fillable = ['id', 'student_code', 'student_email', 'created_at', 'updated_at'];

    public function index_sv()
    {
        $sinhvien = $this::leftjoin('homeroom_students', 'homeroom_students.student_id', '=', 'students.id')
            ->leftjoin('users', 'users.student_id', '=', 'students.id')
            ->leftjoin('homeroom', 'homeroom.id', '=', 'homeroom_students.homeroom_id')
            ->leftjoin('specialities', 'specialities.id', '=', 'homeroom.speciality_id')
            ->leftjoin('majors', 'specialities.major_id', '=', 'majors.id')
            ->leftjoin('colleges', 'majors.college_id', '=', 'colleges.id')
            ->leftjoin('minorities', 'users.minority_id', '=', 'minorities.id')
            ->where('homeroom_students.status', '=', null)->get();
        return $sinhvien;
    }

    public function index_csv()
    {
        $sinhvien = $this::leftjoin('homeroom_students', 'homeroom_students.student_id', '=', 'students.id')
            ->leftjoin('users', 'users.student_id', '=', 'students.id')
            ->leftjoin('homeroom', 'homeroom.id', '=', 'homeroom_students.homeroom_id')
            ->leftjoin('specialities', 'specialities.id', '=', 'homeroom.speciality_id')
            ->leftjoin('majors', 'specialities.major_id', '=', 'majors.id')
            ->leftjoin('colleges', 'majors.college_id', '=', 'colleges.id')
            ->leftjoin('minorities', 'users.minority_id', '=', 'minorities.id')
            ->where('homeroom_students.status', '<>', null)->get();
        return $sinhvien;
    }

    public function them_csv(Request $request)
    {

    }

    public function get_sv($id)
    {
        $sinhvien = $this::leftjoin('homeroom_students', 'homeroom_students.student_id', '=', 'students.id')
            ->leftjoin('users', 'users.student_id', '=', 'students.id')
            ->leftjoin('homeroom', 'homeroom.id', '=', 'homeroom_students.homeroom_id')
            ->leftjoin('specialities', 'specialities.id', '=', 'homeroom.speciality_id')
            ->leftjoin('majors', 'specialities.major_id', '=', 'majors.id')
            ->leftjoin('colleges', 'majors.college_id', '=', 'colleges.id')
            ->leftjoin('minorities', 'users.minority_id', '=', 'minorities.id')
            ->where('students.student_code', '=', $id)
            ->get();
        return $sinhvien;
    }

    public function get_csv($id)
    {
        $sinhvien = $this::leftjoin('homeroom_students', 'homeroom_students.student_id', '=', 'students.id')
            ->leftjoin('users', 'users.student_id', '=', 'students.id')
            ->leftjoin('homeroom', 'homeroom.id', '=', 'homeroom_students.homeroom_id')
            ->leftjoin('specialities', 'specialities.id', '=', 'homeroom.speciality_id')
            ->leftjoin('majors', 'specialities.major_id', '=', 'majors.id')
            ->leftjoin('colleges', 'majors.college_id', '=', 'colleges.id')
            ->leftjoin('minorities', 'users.minority_id', '=', 'minorities.id')
            ->where('students.student_code', '=', $id)->get();
        return $sinhvien;
    }

    public function get_change($id)
    {
        $sinhvien = $this::leftjoin('homeroom_students', 'homeroom_students.student_id', '=', 'students.id')
            ->leftjoin('users', 'users.student_id', '=', 'students.id')
            ->leftjoin('homeroom', 'homeroom.id', '=', 'homeroom_students.homeroom_id')
            ->leftjoin('specialities', 'specialities.id', '=', 'homeroom.speciality_id')
            ->leftjoin('majors', 'specialities.major_id', '=', 'majors.id')
            ->leftjoin('colleges', 'majors.college_id', '=', 'colleges.id')
            ->leftjoin('minorities', 'users.minority_id', '=', 'minorities.id')
            ->where('students.student_code', '=', $id)->get();
        return $sinhvien;
    }

    public function get_change_csv($id)
    {
        $sinhvien = $this::join('homeroom_students', 'homeroom_students.student_id', '=', 'students.id')
            ->join('users', 'users.student_id', '=', 'students.id')
            ->join('homeroom', 'homeroom.id', '=', 'homeroom_students.homeroom_id')
            ->join('specialities', 'specialities.id', '=', 'homeroom.speciality_id')
            ->join('majors', 'specialities.major_id', '=', 'majors.id')
            ->join('colleges', 'majors.college_id', '=', 'colleges.id')
            ->join('minorities', 'users.minority_id', '=', 'minorities.id')
            ->where('students.student_code', '=', $id)->get();
        return $sinhvien;
    }

    public function post_change(Request $request)
    {

    }

    public function hide($id)
    {

    }

    public function xoa(Request $request)
    {
        $query_csv = $this::where('cuusinhvien_id', '=', $request->cuusinhvien_id)->orwhere('cuusinhvien_code', '=', $request->cuusinhvien_code);
        $result_csv = $query_csv->get();
        $query_nd = UsersModel::where('cuusinhvien_id', '=', $request->cuusinhvien_id)->orwhere('cuusinhvien_code', '=', $request->cuusinhvien_code);
        $result_nd = $query_nd->get();
        if (empty($result_csv->toArray()) || empty($result_nd->toArray())) {
            return [
                'status' => 'fail'
            ];
        }
        $query_csv->delete();
        $query_nd->delete();
        return [
            'status' => 'success'
        ];
    }

    public function count()
    {
        return $this::where('trangthai', '<>', 0)->count();
    }

    public function count_dk($ma)
    {
        return $this::where('student_code', '=', $ma)->count();
    }

    public function search(Request $request)
    {
        return $this::join('nguoidung', 'nguoidung.cuusinhvien_id', '=', 'cuusinhvien.cuusinhvien_id')
            ->join('quanhuyen', 'quanhuyen.quanhuyen_id', '=', 'nguoidung.quanhuyen_id')
            ->join('tinhthanh', 'tinhthanh.tinhthanh_id', '=', 'quanhuyen.tinhthanh_id')
            ->where('cuusinhvien_id', $request->cuusinhvien_id)
            ->get();
    }


}
