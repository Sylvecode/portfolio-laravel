<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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
    return view('home');
});

Route::get('/projects', function () {
    return view('projects');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/skills', function () {
    return view('skills');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::post('/send-mail', [ContactController::class, 'send']);






/*
Route::get('/index', [PostController::class, 'index']);
Route::get('{post}', [PostController::class, 'show']);
*/