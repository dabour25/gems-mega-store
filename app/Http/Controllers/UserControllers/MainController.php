<?php

namespace App\Http\Controllers\UserControllers;


use App\Http\Controllers\Controller;
use App\Services\MainService;

class MainController extends Controller
{
    public function index(){
        $data=MainService::indexPage();
        return view('user/index',compact('data'));
    }
}
