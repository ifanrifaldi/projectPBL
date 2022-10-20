<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;

class AuthController extends controller
{
    function showLogin()
    {
        return view('template.login');
    }

    function showAdminLogin()
    {
        return view('adminview.login');
    }

    function loginProcess()
    {
        if(Auth::attempt(['id_user' => request('id_user'), 'password' => request('password')])){
            $user=Auth::user();
            if($user->level == 1) return redirect('admin/validasi')->with('success', 'Login Berhasil');
            if($user->level == 0) return redirect('divisi/pembelian')->with('success', 'Login Berhasil');
        }
        else{
            return back()->with('danger', 'Login Gagal, Silahkan Cek Email atau Password Anda');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('login');  
    }



    function registration()
    {
    }

    function forgotPassword()
    {
    }
}