<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function awards(){
        return view('Frontend/about/awards');
    }

    public function research(){
        return view('Frontend/about/research');
    }
}
