<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutusController extends Controller
{
     //show about us page 
     public function about(){
        
        return view('aboutus');



    }
}
