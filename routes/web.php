<?php

use App\Http\Controllers\FrontendController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[FrontendController::class,'index'])->name('home');
Route::get('/about-us',[FrontendController::class,'about'])->name('about');
Route::get('/portfolio',[FrontendController::class,'portfolio'])->name('portfolio');
Route::get('/contact-us',[FrontendController::class,'contact'])->name('contact');
