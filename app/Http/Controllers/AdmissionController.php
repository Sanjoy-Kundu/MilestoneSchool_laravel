<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function admission_form(){
        return view('Frontend/admission/admission_form');
    }
}
