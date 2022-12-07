<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use Illuminate\Support\Facades\Auth;

class AuthController extends controller
{
    function showLogin()
    {
        return view('template.login');
    }


    function loginProcess()
    {

        if (Auth::guard('divisi')->attempt(['nik' => request('nik'), 'password' => request('password')])) {

            return redirect('divisi/dashboard')->with('succes', 'Login Berhasil');
        }
        if (Auth::guard('admin')->attempt(['nik' => request('nik'), 'password' => request('password')])) {

            return redirect('admin/dashboardadmin')->with('succes', 'Login Berhasil');
        }
        return back()->with('danger', 'Login Gagal');
    }

    function logout()
    {
        Auth()->logout();
        return redirect('login');
    }


}
