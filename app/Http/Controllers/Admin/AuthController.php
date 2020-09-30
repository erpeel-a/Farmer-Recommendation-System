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
        $req->validate([
            'email' => 'required|min:4|max:255',
            'password' => 'required|min:5|max:255',
        ]);

        if(Auth::attempt(['email' => $req->email,'password' => $req->password])){
             return redirect('/admin');
        }else{
            return redirect()->back()->with('status', 'Email atau Password Yang Anda Masukan Salah');
        }
    }

    public function logout()
    {
        if(Auth::user()){
            Auth::logout();
        }else{
            return redirect()->back();
        }
    }
}
