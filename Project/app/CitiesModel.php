<?php
/**
 * Created by PhpStorm.
 * User: Nguyen Van Loc
 * Date: 11/04/2018
 * Time: 15:26
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class CitiesModel extends Model
{
    protected $table = 'cities';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'city_name', 'created_at', 'updated_at'];

    public function index()
    {
        $danhSach = $this::get();
        return $danhSach;
    }

    public function search($id)
    {
        return $this::find($id);
    }


}
