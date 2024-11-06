<?php

namespace App\Http\Controllers;

// Import class
use App\Models\DevelopM;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class DevolopController extends Controller
{
    // show Home page details by 

    public function home(){
        
        return view('Developers.home',
    [
        'DevelopM'=> DevelopM::latest()->filter //search by request then store it 
        (request(['search']))->get()

    ]
    );


    }


    // show part of each Devoloper (info + contact)
    ///single developer
    public function show(DevelopM $DevelopM){

        return view('Developers.aboutDeveloper',[
            'DevelopM' => $DevelopM
        ]);
    }

}
