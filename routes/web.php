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

// Redirection vers la locale par défaut
Route::get('/', function () {
    return redirect('/fr'); // Remplacez 'en' par votre locale par défaut
});

Route::group(['prefix' => '{locale}', 'middleware' => 'setlocale'], function () {

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

    Route::get('/pixhub', function () {
        return view('pixhub');
    });

    Route::get('/footpassion', function () {
        return view('footpassion');
    });

    Route::get('/sylvainperie', function () {
        return view('sylvainperie');
    });


    Route::get('/animalin', function () {
        return view('animalin');
    });

    Route::get('/frequencies', function () {
        return view('frequencies');
    });

    Route::get('/easyupload', function () {
        return view('easyupload');
    });

    Route::get('/pokecodes', function () {
        return view('pokecodes');
    });

    Route::post('/send-mail', [ContactController::class, 'send']);
    /*
    Route::get('/index', [PostController::class, 'index']);
    Route::get('{post}', [PostController::class, 'show']);
    */
});


