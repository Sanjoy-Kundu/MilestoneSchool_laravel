<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function events(){
        return view('Frontend/events/events');
    }

    
    public function event_registration(){
        return view('Frontend/events/event_registration');
    }

    public function event_details(){
        return view('Frontend/events/event_details');
    }
}
