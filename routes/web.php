<?php

use app\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
 return view('home');
});

Route::get('/home', function () {
    return view('home.index');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Admin
Route::get('/admin', [App\Http\Controllers\admin\HomeController::class, 'index'])->name('adminhome');



