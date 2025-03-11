<?php

use App\Models\User;
use Illuminate\Console\View\Components\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
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

Route::get('/profile', [UserController::class, 'showSession']);

// Redirecting by route
Route::redirect('/google', 'https://www.google.com');

// Redirect with controller
Route::get('/', [UserController::class, 'index']);

// Redirect with controller
Route::get('/primo', [UserController::class, 'teste']);

// Redirect with controller
Route::get('/nome/{user}', [UserController::class, 'nome'])->name('nome');

// Redirect with controller action
Route::get('/teste', [UserController::class, 'redirectAction']);

function streamedContent(): Generator {
    yield 'Hello, ';
    yield 'World!';
}
// Streamed Respnses
Route::get('/stream', function () {
    return response()->stream(function (): void {
        foreach (streamedContent() as $chunk) {
            echo $chunk;
            ob_flush();
            flush();
            sleep(2); // Simulate delay between chunks...
        }
    }, 200, ['X-Accel-Buffering' => 'no']);
});
//view
Route::get('/greetings', function(){
    return view('greetings',['name' => 'Jhon Marston']);
});
//nested view
Route::get('/hidden', function(){
    return view('hidden.dontLook');
});

// Passing data through a view
Route::get('/username', [UserController::class, 'username']);

Route::get('/tasks', function(){
    return view('tasks', ['tasks' => ['Task 1', 'Task 2', 'Task 3'], 'title' => 'Task 1']);
});

Route::get('/minha-tela', function(){
    return view('child');
});

Route::get('/dev', function (){
    return view('dev', ['amIScared' => false]);
});

Route::get('/inline', function(){
   return Blade::render('Hello, {{ $name }}',
       ['name' => 'Julian'],
       deleteCachedView: true);
});
