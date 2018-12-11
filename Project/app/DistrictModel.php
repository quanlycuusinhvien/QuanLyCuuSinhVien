<?php
/**
 * Created by PhpStorm.
 * User: Nguyen Van Loc
 * Date: 11/04/2018
 * Time: 16:42
 */

namespace App;


use http\Env\Request;
use Illuminate\Database\Eloquent\Model;

class DistrictModel extends Model
{
    protected $table = 'districts';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'district_name', 'city_id', 'created_at', 'updated_at'];

    public function index($id_tinh)
    {
        $danhSach = $this::where('city_id', '=', $id_tinh)->get();
        return $danhSach;
    }

    public function dem()
    {
        return $this::count();
    }

    public function count_dk($h, $t)
    {
        return $this::where('id', '=', $h)->where('city_id', '=', $t)->count();
    }

    public function search($ma)
    {
        return $this::find($ma);
    }
}
