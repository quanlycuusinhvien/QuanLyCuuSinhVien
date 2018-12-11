<?php

namespace App;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Model;

class survey_sessionsModel extends Model
{
    protected $table = 'survey_sessions';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    protected $fillable = ['id', 'session_code', 'hk', 'nk', 'session_name', 'started', 'ended', 'created_at', 'updated_at'];

    public function get_ks()
    {
        return $this::get();
    }

    public function them(Request $request)
    {
        $result = $this::insert([
            'session_code' => $request->session_code,
            'hk' => $request->hk,
            'nk' => $request->nk,
            'session_name' => $request->session_name,
            'started' => $request->started,
            'ended' => $request->ended
        ]);
    }
}
