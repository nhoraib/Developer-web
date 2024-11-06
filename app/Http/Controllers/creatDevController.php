<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DevelopM;

class creatDevController extends Controller
{

    //create new developer 
    public function create(){
        return view('Developers.create');
    }

    // store the developer created
    public function store(Request $request){

        $formFields = DevelopM::create($request->except(['_token']));
       
        return redirect('/')->with('message', 'Developer created successfully!');
}
}
