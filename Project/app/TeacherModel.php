<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Response;

class TeacherModel extends Model
{
    protected $table = 'teachers';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    protected $fillable = ['id', 'teachers_code', 'created_at', 'updated_at'];

    public function index()
    {
        return $this::join('nguoidung', 'nguoidung.canbo_id', '=', 'canbo.canbo_id')
            ->get();
    }

    public function create(Request $request)
    {
        $result_CB = $this::insert([
            'canbo_id' => $request->canbo_id,
            'canbo_code' => $request->canbo_code
        ]);
        $result_ND = UsersModel::insert([
            'nguoidung_id' => $request->nguoidung_id,
            'nguoidung_ten' => $request->nguoidung_ten,
            'gioitinh' => $request->gioitinh,
            'ngaysinh' => $request->ngaysinh,
            'dienthoaididong' => $request->dienthoaididong,
            'diachithuongtru' => $request->diachithuongtru,
            'diachilienhe' => $request->diachilienhe,
            'emailcanhan' => $request->emailcanhan,
            'linkfacebook' => $request->linkfacebook,
            'canbo_id' => $request->canbo_id,
            'cuusinhvien_id' => $request->cuusinhvien_id,
            'dantoc_id' => $request->dantoc_id,
            'quanhuyen_id' => $request->quanhuyen_id
        ]);
        return $result_ND  && $result_CB ;
    }

    public function change(Request $request)
    {
        $query_cb = $this::where('canbo_id','=',$request->canbo_id)->orwhere('canbo_code','=',$request->canbo_code);
        $result_cb=$query_cb->get();
        $query_nd =  UsersModel::where('canbo_id','=',$request->canbo_id)->orwhere('canbo_code','=',$request->canbo_code);
        $result_nd=$query_nd->get();
        if (empty($result_cb->toArray()) || empty($result_nd->toArray())) {
            return [
                'status' => 'fail'
            ];
        }
        $query_cb->update([
            'canbo_id' => $request->canbo_id,
            'canbo_code' => $request->canbo_code,
            'updated_at' => $request->updated_at
        ]);
        $query_nd->update([
            'nguoidung_ten' => $request->nguoidung_ten,
            'gioitinh' => $request->gioitinh,
            'ngaysinh' => $request->ngaysinh,
            'dienthoaididong' => $request->dienthoaididong,
            'diachithuongtru' => $request->diachithuongtru,
            'diachilienhe' => $request->diachilienhe,
            'emailcanhan' => $request->emailcanhan,
            'linkfacebook' => $request->linkfacebook,
            'canbo_id' => $request->canbo_id,
            'cuusinhvien_id' => $request->cuusinhvien_id,
            'dantoc_id' => $request->dantoc_id,
            'quanhuyen_id' => $request->quanhuyen_id,
            'updated_at' => $request->updated_at
        ]);
        return [
            'status' => 'success'
        ];
    }
    public function remove(Request $request)
    {
        $query_cb = $this::where('canbo_id','=',$request->canbo_id)->orwhere('canbo_code','=',$request->canbo_code);
        $result_cb=$query_cb->get();
        $query_nd =  UsersModel::where('canbo_id','=',$request->canbo_id)->orwhere('canbo_code','=',$request->canbo_code);
        $result_nd=$query_nd->get();
        if (empty($result_cb->toArray()) || empty($result_nd->toArray())) {
            return [
                'status' => 'fail'
            ];
        }
        $query_cb->delete();
        $query_nd->delete();
        return [
            'status' => 'success'
        ];
    }

    public function count()
    {
        return $this::count();
    }

    public function search(Request $request)
    {
        return $this::join('nguoidung', 'nguoidung.canbo_id', '=', 'canbo.canbo_id')
            ->where(canbo_id, $request->canbo_id)
            ->get();
    }
}
