<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventModel extends Model
{
    protected $table = 'events';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    protected $fillable = ['id', 'event_name', 'event_avatar','started_date', 'ended_date', 'event_location', 'event_content','event_describe','user_id', 'created_at', 'updated_at'];



    public function count(){
        return $this::count();
    }
}
