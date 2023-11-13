<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\ProduitController;

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

//Route::get('/', 'App\Http\Controllers\ParentController@index');
Route::get('/', [ParentController::class, 'index']);
Route::get('/home', [ParentController::class,'home']);
Route::get('/pricing', [ParentController::class,'service']);
Route::get('/service', [ParentController::class,'pricing']);
Route::get('/contact', [ParentController::class,'contact']);
Route::get('/users', [ParentController::class,'list']);
Route::get('/create_produit', [ProduitController::class,'create']);
Route::post('/create_produit', [ProduitController::class, 'store']);
Route::get('/index', [ProduitController::class, 'show']);
/* Route::get('/users', function(){
    $display =DB::table('user')->get();
    dd($display);
    return view('/pages/users');
}); */
