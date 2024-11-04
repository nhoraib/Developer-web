<?php
// import class 
use Illuminate\Support\Facades\Route;
use App\Models\Information;
use App\Http\Controllers\DevolopController;
use App\Http\Controllers\UserController;



// insted we call Controller to clear the route



// home page show 
Route::get('/', [DevolopController::class , 'home']);





// show create devoloper 
Route::get('/create', [DevolopController::class , 'create'])->name('create.confirm');




// Store devoloper when u create 
Route::get('/port', [DevolopController::class , 'store']);




// show  devoloper ther aboutpage 
Route:: get('/show',[DevolopController::class , 'part']);



// show  about page 
Route:: get('/aboutDev',[DevolopController::class , 'about']);




//show Register page 
Route:: get('/register',[UserController::class , 'register']);



//show login page 
Route:: get('/login',[UserController::class , 'login']);