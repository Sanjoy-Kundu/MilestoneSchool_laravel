<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view("Frontend.index");
    } 



    public function contact(){
        return view("Frontend.contact");
    }

    public function about_us(){
        return view("Frontend.about");
    }


}
