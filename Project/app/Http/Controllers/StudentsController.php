<?php

namespace App\Http\Controllers;

use App\CitiesModel;
use App\StudentsModel;
use App\MajorsModel;
use App\MinoritiesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class StudentsController extends Controller
{
    protected $model;
    protected $model_tinhthanh;
    protected $model_nganh;
    protected $model_dantoc;
    protected $model_student;


    function __construct()
    {
        $this->model = new StudentsModel();
        $this->model_tinhthanh = new CitiesModel();
        $this->model_nganh = new MajorsModel();
        $this->model_dantoc = new MinoritiesModel();
        $this->model_student = new StudentsModel();


    }

    public function index_them()
    {
        $data_tinhthanh = $this->model_tinhthanh->index();
        $data_nganh = $this->model_nganh->index();
        $data_dantoc = $this->model_dantoc->index();

        return view('Admin/Cuusinhvien/them', compact('data_tinhthanh', 'data_nganh', 'data_dantoc'));
    }


    public function index_csv()
    {
        $data_csv = $this->model_student->index_csv();
//        dd($data_csv);
        return view('Admin.Cuusinhvien.index', compact('data_csv'));
    }

    public function themcsv()
    {
        return view('Admin.Cuusinhvien.them');
    }

    public function them_csv(Request $request)
    {
        return $this->model->them_csv($request);
    }
    public function sua_csv(Request $request)
    {
        $data_cuusinhvien = $this->model_student->get_change_csv($request->student_code);
//        dd($data_sinhvien);
        return view('Admin.Cuusinhvien.sua', compact('data_cuusinhvien'));
    }

    public function xem_csv(Request $request)
    {
        $data_cuusinhvien = $this->model_student->get_csv($request->student_code);
//        dd($data_sinhvien);
        return view('Admin.Cuusinhvien.xem', compact('data_cuusinhvien'));
    }

// SINH VIEN
    public function index_sv()
    {
        $data = $this->model_student->index_sv();
        return view('Admin.Sinhvien.index', compact('data'));
    }

    public function sua_sv(Request $request)
    {
        $data_sinhvien = $this->model_student->get_change($request->student_code);
//        dd($data_sinhvien);
        return view('Admin.Sinhvien.sua', compact('data_sinhvien'));
    }

    public function xem_sv(Request $request)
    {
        $data_sinhvien = $this->model_student->get_sv($request->student_code);
//        dd($data_sinhvien);
        return view('Admin.Sinhvien.xem', compact('data_sinhvien'));
    }
}
