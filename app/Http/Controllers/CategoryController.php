<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function categ(){
        $name='phone';
        return "The name of category is $name";
    }
}
