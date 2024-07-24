<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactusController extends Controller
{
    //contact us controller
    public function show(){
        return view('contactus');
    }

    public function data(){
        return"data received";

    }
}
