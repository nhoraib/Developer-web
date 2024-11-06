<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class creatRegisterController extends Controller
{
    public function storeRegister(Request $request) {
       
        //create user
        $formFields = User::create($request->except(['_token','password2']));

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);
            
       

        // Login
        //auth()->login($user);
                                                               
        return redirect('/')->with('message', 'User created & your logged in ');
    }
}
