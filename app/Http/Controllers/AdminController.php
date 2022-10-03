<?php

namespace App\Http\Controllers;

class AdminController extends Controller{

    function ShowAdmin(){
        return view ('admin.base');
    }
    function ShowBeranda(){
        return view ('admin.section.beranda');
    }
}