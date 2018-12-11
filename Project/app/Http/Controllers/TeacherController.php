<?php

namespace App\Http\Controllers;

use App\TeacherModel;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    protected $model;
    protected $model_tinhthanh;
    protected $model_nganh;
    protected $model_dantoc;


    function __construct()
    {
        $this->model = new TeacherModel();
        $this->model_tinhthanh = new CitiesModel();
        $this->model_nganh = new MajorsModel();
        $this->model_dantoc = new MinoritiesModel();

    }
}
