<?php

namespace App\Http\Controllers;

use App\ChuyennganhModel;
use Illuminate\Http\Request;

class ChuyennganhController extends Controller
{
    function __construct()
    {
        $this->model = new ChuyennganhModel();
    }
    public function index($id){
        $data = $this->model->index($id);
        if(isset($data)){
            return [
                'status' => true,
                'data' => $data,
                'message' => []
            ];
        }
        return [
            'status' => false,
            'data' => [],
            'message' => ['Không có dữ liệu']
        ];
    }
}
