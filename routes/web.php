<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaControler;

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
});

Route::get('/pizzas', [PizzaControler::class,'index']);

Route::get('/pizzas/create', [PizzaControler::class, 'create']);

Route::get('/pizzas/{id}', [PizzaControler::class,'show']);

Route::delete('/pizzas/{id}', [PizzaControler::class,'destroy']);


Route::post('/pizzas', [PizzaControler::class,'store']);








Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
