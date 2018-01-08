<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // echo 'mall_asdfasdfdsa';
        return view('sms');
    }

    public function login(){
        return view('home.user.login');
    }
    public function register(){
        return view('home.user.register');
    }
}
