<?php

namespace App\Http\Controllers;

use App\FileModel;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Response;
use File;

class FileController extends Controller
{
    protected $model;

    function __construct()
    {
        $this->model = new FileModel();
    }

    public function index()
    {
        $data = $this->model->index();
        $stt=0;
        return view('Admin/file/index', compact('data','stt'));
    }

    public function doUpload(Request $request)
    {
        if ($request->hasFile('fileTest')) {
            //thêm file lên server
            $file = $request->fileTest;
            $file_name = $file->getClientOriginalName();
            $data=$this->model->count($file_name);
            if ($data != 1) {
                $file->move(public_path('File_Upload'), $file_name);
                $url = url('File_Upload') . '/' . $file_name;
                $insertParam = [
                    'file_name' => $file_name,
                    'file_url' => $url,
                ];
                // thêm thông tin file vào cơ sở dữ liệu
                $this->model->create($insertParam);
                return redirect()->back()->with('success', 'Import thành công !');
            }else{
                return redirect()->back()->with('trung', 'File đã tồn tại !');
            }
        } else {
            return redirect()->back()->with('fail', 'Import thất bại !');
        }
    }

    public function Delete_file(Request $request){
        $data=$this->model->remove($request)['status'];
        File::delete(public_path('File_Upload/'.$request->file_name));
        if($data == "success"){
            return redirect()->back()->with('xoa_success', 'Xóa thành công !');
        }else{
            return redirect()->back()->with('xoa_fail', 'Xóa thất bại !');
        }

    }


    public function getDownload(Request $request)
    {
        $file= public_path(). "/File_Upload/".$request->file_name;

        $headers = array(
            'Content-Type: application/xlsx',
            'Content-Type: application/xls',
        );

        return Response::download($file, $request->file_name, $headers);
    }

    public function loadfile(Request $request)
    {
        $file= public_path(). "/File_Upload/".$request->file_name;
        Excel::load($file, function($reader) {
            $results = $reader->get();
            dd($results);
        });
    }

}
