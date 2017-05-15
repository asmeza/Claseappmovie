<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{

    public function inicio()
    {
        return view('welcome');
    }



}

