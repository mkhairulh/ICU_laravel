<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/{name}', function ($name) {
    return view('home',[ 'name'=>$name]);
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/auth/signin', function () {
    return view('auth.signin');
});

Route::get('/auth/{name}/{age}', function ($name,$age) {
    return 'User '.$name. ' age is:'.$age;
});


Route::get('/user/profile', function () {
    return 'Pengguna Profiles';
})->name('user.profile');

Route::get('/user/{name}', function ($name) {
    return 'User ' .$name;
});

//route group
Route::prefix('food')->group(function () {

    Route::get('/details', function () {
        return 'Food details are following';
    });

    Route::get('/home', function () {
        return 'Food home page';
    });
    
});

//route group
Route::name('job')->prefix('job')->group(function () {

    Route::get('home', function () {
        return 'Job home page';
    })->name('.home');

    Route::get('/details', function () {
        return 'Job details are following';
    })->name('.description');
    
});

Route::get('/about', function () {
    return view('about');
})->name('about');

require __DIR__.'/feed/web.php';