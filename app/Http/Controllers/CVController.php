<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CVController extends Controller
{
    public function identitas(){
        return view('identitas');
    }

    public function pendidikan(){
        return view('pendidikan');
    }

    public function skill(){
        return view('skill');
    }
}
