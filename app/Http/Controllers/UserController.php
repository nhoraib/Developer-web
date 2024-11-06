<?php

namespace App\Http\Controllers;

// Import 
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class UserController extends Controller
{
    //code for register show 

    public function register(){
           return view('users.register');
    }


    // Show Login Form
    public function login() {
        return view('users.login');
    }



     // Create New User
     public function storeRegister(Request $request) {
       
        //create user
        $formFields = User::create($request->except(['_token','password2']));

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);
            
       

        // Login
        auth()->login($formFields);
                                                               
        return redirect('/')->with('message', 'User created & your logged in ');
    }

    // Logout 
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');

    }

      

      
}
