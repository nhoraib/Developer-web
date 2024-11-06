<?php
// import class 
use Illuminate\Support\Facades\Route;
//use App\Models\Information;
use App\Http\Controllers\DevolopController;
use App\Http\Controllers\creatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\aboutusController;
use App\Http\Controllers\creatRegisterController;
use Illuminate\Http\Request; 
use App\Models\DevelopM;


// insted we call Controller to clear the route



// home page show 
Route::get('/', [DevolopController::class , 'home']);


// show create devoloper 
Route::get('/Developers/create', [creatDevController::class , 'create']);

// Store devoloper when u create 
Route::post('/Developers', [creatDevController::class ,'store'])->name('storing');





// show  about us page 
Route:: get('/aboutus',[aboutusController::class , 'about']);


//show Register form page (create new user)

Route:: get('/users/register',[UserController::class , 'register']);

//store new user 
Route:: post('/users',[creatRegisterController::class , 'storeRegister']) ->name('RegisterStore');






//show login page 
Route:: get('/login',[UserController::class , 'login']);

//logout 
Route:: post('/logout',[UserController::class , 'logout']);

//single developer 
Route:: get('/Developers/{Developers}',[DevolopController::class , 'show']);


