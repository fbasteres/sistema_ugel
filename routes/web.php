<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Form\Form1Controller;
use App\Http\Controllers\Form\Form3Controller;
use App\Http\Controllers\Alm\Alm1Controller;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Home\HomeController;

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


Route::get('/register', [RegisterController::class, 'show']);
Route::post('/register', [RegisterController::class, 'register'])
-> name ('registro');

Route::get('/', [LoginController::class, 'show']);

Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login'])
-> name ('login');

Route::get('/logout', [LogoutController::class, 'logout'])
->name ('cerrar_sesion');



Route::get('/estadistica',[HomeController::class, 'index'])-> name ('inicio');

Route::get('/power-bi', function () {
    return view('pages.powerbi');
})-> name ('power');

/* CRUD Formularios */
Route::resource('form1', Form1Controller::class) -> names ('form1');
//Route::resource('form2', Form2Controller::class) -> names ('form2');
Route::resource('form3', Form3Controller::class) -> names ('form3');
Route::resource('alm1', Alm1Controller::class) -> names ('alm1');

/* Reporte Formularios */






