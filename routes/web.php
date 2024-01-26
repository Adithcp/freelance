<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about-us', 'aboutUs')->name('about-us');
    Route::get('/properties', 'getProperties')->name('properties');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/join-with-us', 'joinWithUs')->name('join-with-us');
    Route::get('/contact-us', 'contactUs')->name('contact-us');
    Route::get('/terms', 'terms')->name('terms');
    Route::get('/faq', 'faq')->name('faq');
});
