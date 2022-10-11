<?php

namespace App\Http\Controllers;
use App\Models\User;


class UserController extends Controller {
    function index(){
        $data['list_user'] = User::all();
        return view('user.index', $data);

    }
    function create(){
        return view('user.create');
    }

    function store(){
        $user = new User;
        $user->id_user = request('id_user');
        $user->password = bcrypt(request('password'));
        $user->save();
        return redirect('user')->with('success', 'Data Berhasil Ditambahkan');
    }

    function show(User $user){

        $data['user'] = $user;
        return view('user.show', $data);
    }

    function edit(User $user){
        $data['user'] = $user;
        return view('user.edit', $data);
        
    }
    function update(User $user){
        $user->id_user = request('id_user');
        $user->password = request('password');

        return redirect('user')->with('warning', 'Data Berhasil Diedit');
    }

    function destroy(User $user){
        $user->delete();

        return redirect('user')->with('danger', 'Data Berhasil Dihapus');
    }
}