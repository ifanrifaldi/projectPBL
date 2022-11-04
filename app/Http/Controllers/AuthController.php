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
      if (auth()->attempt(['username' => request('username'), 'password' => request('password')])) {
        return redirect ('admin');
      }

      if (auth()->guard('pegawai')->attempt(['username' => request('username'), 'password' => request('password')])) {
        return redirect ('pegawai');
      }
    }

    function logout()
    {
        Auth::logout();
        return redirect('login');  
    }


    function test()
    {
      $user = New User;
      $user->username = 'admin';
      $user->nama = 'Admin';
      $user->password = 'admin';
      $user->email = 'admin@gmail.com';
      $user->save();

      return "Berhasil";
    }
}