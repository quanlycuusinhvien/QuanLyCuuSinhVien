<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class PostsModel extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    protected $fillable = ['id', 'post_title', 'post_description','post_avatar', 'post_body', 'homeroom_id', 'user_id','post_status', 'created_at', 'updated_at'];

    public function index()
    {
        return $this::join('users', 'posts.user_id', '=', 'users.id')->get();
    }

    public function create(Request $request)
    {
        $result = $this::insert([
            'baidang_id' => $request->baidang_id,
            'noidung' => $request->noidung,
            'trangthai' => $request->trangthai,
            'congkhai' => $request->congkhai,
            'lop_id' => $request->lop_id,
            'nguoidung_id' => $request->nguoidung_id,
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at
        ]);
        return isset($result);
    }

    public function change(Request $request)
    {
        $result = $this::where('baidang_id', $request->baidang_id)
            ->update([
                'noidung' => $request->noidung,
                'trangthai' => $request->trangthai,
                'congkhai' => $request->congkhai,
                'lop_id' => $request->lop_id,
                'nguoidung_id' => $request->nguoidung_id,
                'updated_at' => $request->updated_at
            ]);
        return isset($result);
    }

    public function hide(Request $request)
    {
        $result = $this::find($request->baidang_id)->update([
            'trangthai' => 0
        ]);
        return isset($result);
    }

    public function remove(Request $request)
    {
        $result = $this::find($request->baidang_id)->delete();
        return isset($result);
    }

    public function count()
    {
        return $this::where('post_status', '<>', 0)->count();
    }

    public function search(Request $request)
    {
        return $result = $this::find($request->baidang_id)->get();
    }


}
