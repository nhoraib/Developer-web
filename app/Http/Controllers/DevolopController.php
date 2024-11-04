<?php

namespace App\Http\Controllers;

// Import class
use App\Models\Devolp;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class DevolopController extends Controller
{
    // show Home page details by 

    public function home(){
        
        return view('home',
[
    
    'heading' => 'Devoloper Team ',
    
    'information' => array([

        'id' => 1,
        'name' => 'Nouf Ali ',
        'about' => 'Im programmer interesting of learn deeply laravel
        ',
        'position'=> 'Junior Devoloper'

    ],
    [
     'id' => 2,
        'name' => 'Nuha Abdullah ',
        'about' => 'Im programmer interesting of learn deeply laravel
        '   ,
        'position'=> 'Senior Devoloper'
    ],
    [

        'id' => 3,
        'name' => 'Suha Ahmed ',
        'about' => 'Im programmer interesting of learn deeply laravel
        ',
        'position'=> 'Senior Devoloper'

    ],
    [
        'id' => 4,
           'name' => 'Sara Abdullah ',
           'about' => 'Im programmer interesting of learn deeply laravel
           '   ,
           'position'=> 'Manager Devoloper'
       ]


),
         
        
    //(request(['search']))-> get()
    
    
]
);
    }


    // show part of each Devoloper (info + contact)
    public function part(){

        return view('devoloper
        ');
    }


    // show create page (Form)
    public function create(){

        return view('create');
    }

    public function about(){

        return view('aboutDev');
    }

    //Store devoloper (new create)

    public function store(Request $request){
            $formFields = $request->validate([
                'title' => 'required',
                'name' => 'required',
                'about' => 'required'
            ]);

            Devolp::create($formFields);
            return redirect('/')-> with;
    }
}
