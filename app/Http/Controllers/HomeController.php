<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function datadiri(){
        return "Nama : Muhammad Rizky Ramadhan <br> NIM : 1941720018 <br> Kelas : TI-2A"
    }
}
