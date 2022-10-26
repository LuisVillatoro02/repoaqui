<?php

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
    return view('home');
})->name('home');

Route::get('/electrosen', function (){
   return view('electrosen');
})->name('electrosen');

Route::get('/manuales', function (){
    return view('manuales');
})->name('manuales');

Route::post('/home', [\App\Http\Controllers\ComentarioController::class, 'create'])->name('comentarioCreate');
