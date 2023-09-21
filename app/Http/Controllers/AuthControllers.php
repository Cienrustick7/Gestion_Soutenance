<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Models\Auth;

class AuthControllers extends Controller
{
    public function login()
    {

        return view('Auth.login');
    }

    public function dologin(LoginRequest $request){

        return view('dologin');
    }


}
