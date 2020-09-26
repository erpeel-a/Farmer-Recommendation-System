<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }
    public function proccess_login(Request $req)
    {
        // login proses
    }

    public function logout()
    {
        // logout proses
    }
}
