<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('accueil');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/membres', function () {
    return view('pages.membres');
})->name('membres');

Route::post('/store', [ContactController::class, 'store'])->name('store');


Route::get('/dashboard', [ContactController::class, 'Messages'])->name('Messages');


// Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
