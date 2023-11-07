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

Route::get('/', 'App\Http\Controllers\ParentController@index');
//Route::get('/', [ParentController::class, 'index']);
Route::get('/home', 'App\Http\Controllers\ParentController@home');
Route::get('/pricing', 'App\Http\Controllers\ParentController@service');
Route::get('/service', 'App\Http\Controllers\ParentController@pricing');
        return view('pages/contact');
Route::get('/contact', 'App\Http\Controllers\ParentController@contact');
/* Route::get('/contact', function(){
    return view('pages/contact');
}); */
