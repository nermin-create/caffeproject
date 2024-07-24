<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function send_mail(){
        $msg=Contact::find(1);
        Mail::to('admin@gmail.com')->send(new ContactMail($msg));
        return "Email has been sent";
    }
}


