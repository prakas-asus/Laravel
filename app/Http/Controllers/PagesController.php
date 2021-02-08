<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home()
    {
        # code...
        return view('index');
    }

    public function about()
    {
        # code...
        return view('about', ['nama' => 'Prakosa Dwi Prasetya']);
    }
    public function mahasiswa()
    {
        # code...
        return view('mahasiswa');
    }
}
