<?php

namespace App\Http\Controllers;



class HomeController extends Controller
{
//    private

    public function __construct()
    {

    }

    public function getindex()
    {


        return view('home');
    }

}
