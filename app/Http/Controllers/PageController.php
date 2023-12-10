<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku; // Make sure to import the Buku model

class PageController extends Controller
{
    public function home() {
        $title = 'Home';
        return view('home', compact('title'));
    }
}