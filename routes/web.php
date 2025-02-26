<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


//Route::get('/users/{user}', function(User $user){
//
//    return $user;
//});

Route::get('/teste', function(){
    return response()->json([
        'isso é' => 'um teste'
    ]);
});

//Route::get('/delete/{user}', [UserController::class, 'destroy']);
//
//Route::get('/user/{id}', [UserController::class, 'show']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/', function () {
//    return view('home');
//});
// Normal Redirect
//Route::get('/dashboard', function(){
//    return redirect('/home');
//});
// Redirecting to a named route
Route::get('/dashboard', function(){
    return redirect()->route('home');
});

// Redirecting by route
Route::redirect('/google', 'https://www.google.com');

// Redirect with controller
Route::get('/', [UserController::class, 'index']);

// Redirect with controller
Route::get('/primo', [UserController::class, 'teste']);

// Redirect with controller
Route::get('/nome/{user}', [UserController::class, 'nome'])->name('nome');
