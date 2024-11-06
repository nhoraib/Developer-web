<?php
// import class 
use Illuminate\Support\Facades\Route;
//use App\Models\Information;
use App\Http\Controllers\DevolopController;
use App\Http\Controllers\creatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\aboutusController;
use Illuminate\Http\Request; 
use App\Models\DevelopM;


// insted we call Controller to clear the route



// home page show 
Route::get('/', [DevolopController::class , 'home']);


// show create devoloper 
Route::get('/Developers/create', [creatController::class , 'create']);

// Store devoloper when u create 
Route::post('/Developers/create', [creatController::class ,'store'])->name('Developers.store');


// show  devoloper ther aboutpage 
Route:: get('/gg',[DevolopController::class , 'part']);



// show  about us page 
Route:: get('/aboutus',[aboutusController::class , 'about']);




//show Register page 
Route:: get('/register',[UserController::class , 'register']);



//show login page 
Route:: get('/login',[UserController::class , 'login']);

//single developer 
Route:: get('/Developers/{Developers}',[DevolopController::class , 'show']);


