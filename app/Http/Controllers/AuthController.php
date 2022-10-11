<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Auth;

class AuthController extends Controller
{

// login

    function showLogin(){
        return view('login');
    }
    
    function Loginprocess(){
        if(Auth()->attempt(['id_user' => request('id_user'), 'password' => request('password')])){
            return redirect('admin/divisi')->with('success', 'Login Berhasil');
        }else{
            return back()->with('danger', 'Login Gagal, Cek Email dan Password Anda');
        }
    }

    function Logout(){
        Auth()->logout();
        return redirect('client/index');
    }

}