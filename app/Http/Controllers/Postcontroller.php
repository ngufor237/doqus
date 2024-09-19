<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    //
    function index(){

        return view('post.postindex');
    }
}
