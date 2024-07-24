<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Models\phone;

class PhoneController extends Controller
{
    //
    public function phone(){
        $user=phone::find(1)->user;
        return "the name of phone number is:$user->name";
    }
}
