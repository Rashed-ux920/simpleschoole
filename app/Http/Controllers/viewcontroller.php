<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewcontroller extends Controller
{
    public function aboute(){
        return view('frontend.userpage.aboute');
    }
}
