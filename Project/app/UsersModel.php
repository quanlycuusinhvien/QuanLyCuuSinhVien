<?php
/**
 * Created by PhpStorm.
 * User: Nguyen Van Loc
 * Date: 10/16/2018
 * Time: 01:08
 */

namespace App;


use http\Env\Request;
use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'username', 'password', 'fullname', 'gender', 'user_avatar',
        'date_of_birth', 'family_phone', 'personal_phone', 'email', 'current_address', 'family_address', 'district_id',
        'minority_id', 'user_status','teacher_id','student_id','remember_token','created_at','updated_at'];



    public function remove(Request $request)
    {
        $query = $this::where('cuusinhvien_id', '=', $request->cuusinhvien_id)->orwhere('canbo_id', '=', $request->canbo_id);
        $result = $query->get();
        if (empty($result->toArray())) {
            return [
                'status' => 'fail'
            ];
        }
        $query->delete();
        return [
            'status' => 'success'
        ];
    }
}
