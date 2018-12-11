<?php

namespace App\Http\Controllers;

use App\CitiesModel;
use App\collegeModel;
use App\DistrictModel;
use App\homeroom_studentsModel;
use App\homeroomModel;
use App\Http\Middleware\TrimStrings;
use App\MajorsModel;
use App\specialitiesModel;
use App\StudentsModel;
use App\UsersModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Excel;
use Carbon\Carbon;

class ExcelController extends Controller
{
    private $excel;
    private $cities;
    private $district;
    private $specialities;
    private $homeroom;
    private $homeroom_student;
    private $majors;
    private $student;
    private $college;

    public function __construct(Excel $excel)
    {
        $this->excel = $excel;
        $this->cities = new CitiesModel();
        $this->specialities = new specialitiesModel();
        $this->homeroom = new homeroomModel();
        $this->majors = new MajorsModel();
        $this->district = new DistrictModel();
        $this->homeroom_student = new homeroom_studentsModel();
        $this->student = new StudentsModel();
        $this->college = new collegeModel();
    }

    public function getimport()
    {
        return view('Admin/Cuusinhvien/importexcel');
    }

    public function postimport(Request $request)
    {
        $file = Input::file('file');
        $filename = $file->getClientOriginalName();
        $file->move('file', $filename);
        $result = Excel::Load('file/' . $filename, function ($reader) {
            $reader->setHeaderRow(3);
            $reader->all();
        })->get();
//        dd($result);
        if (!empty($result) && $result->count() > 0) {
            foreach ($result as $key => $value) {
//                dd(empty($this->student->count_dk($value['ma_sv'])));
                if (empty($this->student->count_dk($value['ma_sv']))) {

//Thêm sinh viên
                    $student = [
                        'id' => intval($value['stt']),
                        'student_code' => $value['ma_sv'],
                        'student_email' => $value['email'],
                    ];
//                    dd($student);
                    StudentsModel::insert($student);
//Thêm tỉnh thành phố
                    $city = [
                        'id' => (int)str_slug($value['ma_tinh']),
                        'city_name' => $value['ten_tinh']
                    ];

                    if (empty($this->cities->search($city['id'])) && !empty($city['id']) && !empty($city['city_name'])) {
                        CitiesModel::insert($city);
                    }
//Thêm quận huyện
                    $district = [
                        'id' => (int)str_slug($value['ma_huyen']),
                        'district_name' => $value['ten_huyen'],
                        'city_id' => (int)str_slug($value['ma_tinh']),
                    ];
                    if (empty($this->district->count_dk((int)str_slug($value['ma_huyen']), (int)str_slug($value['ma_tinh']))) && !empty($district['id']) && !empty($district['district_name'])) {
                        DistrictModel::insert($district);
                    }

//Thêm users
                    //Gán dữ liệu cho gander
                    if (!empty($value['nu'])) {
                        $gender = 'Nữ';
                    } else {
                        $gender = 'Nam';
                    }
                    $date = (str_slug($value['ngay_sinh']));
                    $dt = Carbon::now();
                    $dt->year(substr($date, 4, 4))->month(substr($date, 2, 2))->day(substr($date, 0, 2))->toDateTimeString();
                    if (!empty($value['ma_huyen'])) {
                        $dis = str_slug($value['ma_huyen']);
                    } else {
                        $dis = null;
                    }
                    $users = [
                        'id' => intval($value['stt']),
                        'username' => $value['ma_sv'],
                        'password' => null,
                        'fullname' => $value['ho_va_ten'],
                        'gender' => $gender,
                        'date_of_birth' => $dt->toDateString(),
                        'family_phone' => $value['dt_gd'],
                        'personal_phone' => $value['dt_dd'],
                        'email' => $value['email'],
                        'current_address' => $value['dia_chi'],
                        'family_address' => $value['dia_chi_gd'],
                        'district_id' => $dis,
                        'minority_id' => (int)str_slug($value['ma_dan_toc']),
                        'user_status' => 0,
                        'student_id' => intval($value['stt']),
                    ];
                    UsersModel::insert($users);
// Thêm Khoa
                    $id_colege = $this->college->dem();
                    $colleges = [
                        'id' => $id_colege + 1,
                        'college_code' => str_slug($value['ma_khoa']),
                        'college_name' => $value['ten_khoa'],
                    ];
                    if (empty($this->college->count_dk(str_slug($value['ma_khoa']))) && !empty($colleges['college_code']) && !empty($colleges['college_code'])) {
                        collegeModel::insert($colleges);
                    }

//Thêm ngành
                    if (empty($this->college->count_dk(str_slug($value['ma_khoa'])))) {
                        $college = null;
                    } else {
                        $temp_college = $this->college->search(str_slug($value['ma_khoa']));
                        $college = $temp_college[0]->id;
                    }
                    $majors = [
                        'id' => $this->majors->dem() + 1,
                        'major_code' => str_slug($value['ma_nganh']),
                        'major_name' => $value['ten_nganh'],
                        'college_id' => $college,
                    ];
                    if (empty($this->majors->count_dk(str_slug($value['ma_nganh']))) && !empty($majors['major_code']) && !empty($majors['major_name'])) {
                        MajorsModel::insert($majors);
                    }
//Thêm chuyên ngành

                    if (empty($this->majors->count_dk(str_slug($value['ma_nganh'])))) {
                        $temp_major_id = null;
                    } else {
                        $temp_speci = $this->majors->search(str_slug($value['ma_nganh']));
                        $temp_major_id = $temp_speci[0]->id;
                    }
                    $specialities = [
                        'id' => $this->specialities->dem() + 1,
                        'speciality_code' => str_slug($value['ma_chuyen_nganh']),
                        'speciality_name' => $value['ten_chuyen_nganh'],
                        'major_id' => $temp_major_id
                    ];
                    if (empty($this->specialities->count_dk(str_slug($value['ma_chuyen_nganh']))) && !empty($specialities['speciality_code']) && !empty($specialities['speciality_name'])) {
                        specialitiesModel::insert($specialities);
                    }

//Thêm lớp
                    if (empty($this->specialities->count_dk(str_slug($value['ma_chuyen_nganh'])))) {
                        $temp_speciality_id = null;
                    } else {
                        $temp_spe = $this->specialities->search(str_slug($value['ma_chuyen_nganh']));
                        $temp_speciality_id =$temp_spe[0]->id;
                    }
                    $dk = substr($value['ma_sv'], 1, 2);
                    if ($dk == '14') {
                        $khoa = 40;
                    } else {
                        if (-14 < ($dk - 14) && ($dk - 14) < 0) {
                            $khoa = 40 + ($dk - 14);
                        } else {
                            $khoa = 40 + ($dk - 14);
                        }
                    }
                    $homeroom = [
                        'id' => $this->homeroom->dem() + 1,
                        'homeroom_code' => $value['lop'],
                        'homeroom_name' => $value['ten_chuyen_nganh'] . ' ' . substr($value['lop'], -2),
                        'course' => 'K' . $khoa,
                        'speciality_id' => $temp_speciality_id
                    ];
                    if (empty($this->homeroom->count_dk($value['lop'])) && !empty($homeroom['homeroom_code']) && !empty($homeroom['homeroom_name'])) {
                        homeroomModel::insert($homeroom);
                    }

//Thêm sinh viên-lop
                    if (empty($value['lop'])){
                        $temp_homeroom_id = null;
                    }else{
                        $temp_home = $this->homeroom->search($value['lop']);
                        $temp_homeroom_id =$temp_home[0]->id;
                    }
                    $homeroom_students = [
                        'id' => $this->homeroom_student->dem() + 1,
                        'homeroom_id' => $temp_homeroom_id,
                        'student_id' => intval($value['stt']),
                        'status' => $value['tinh_trang'],
                        'reason' => $value['ly_do'],
                        'graduation_semester' => null,
                        'graduation_scholastic' => null,
                        'reg_no' => null,
                        'reg_date' => null,
                        'AUN' => null,
                        'gpa' => null,
                        'drl' => null,
                        'tctl' => null,
                        'ranked' => null,
                        'degree' => null,
                    ];
                    homeroom_studentsModel::insert($homeroom_students);
                }
            }
        }
        alert('Thông báo', 'Thêm thành công');
        File::delete(public_path('file/' . $filename));
        return redirect()->back();
    }
}
