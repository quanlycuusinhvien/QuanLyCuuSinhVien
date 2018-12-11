<?php

namespace App\Http\Controllers;

use App\specialitiesModel;
use App\survey_sessionsModel;
use Illuminate\Http\Request;

class survey_sessionsController extends Controller
{
    protected $model_survey_sessions;


    function __construct()
    {
        $this->model_survey_sessions = new survey_sessionsModel();
    }

    public function them(Request $request){
        dd($request);
        $this->model_survey_sessions->them($request);
    }
}
