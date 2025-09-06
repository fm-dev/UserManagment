<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    //
    public function index(){
        return view('pages.file');
    }
    public function TambahData(){
        return view('pages.tambah_file');
    }
}
