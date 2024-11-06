<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DevelopM;

class creatController extends Controller
{

    //create new developer 
    public function create(){
        return view('Developers.create');
    }

    // store the developer created
    public function store(Request $request){
      //  dd($request->all());
        $formFields = $request->validate([
           'name' => 'required',
           'email' => ['required','email'],
            'Postition' => 'required',
            'about' => 'required'
        ]);

       DevelopM::create($formFields);
        return redirect()->back();
}
}
