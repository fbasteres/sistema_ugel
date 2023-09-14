<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Form\FormController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

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



Route::get('/dashboard', function () {
    return view('dashboard');
})-> name ('inicio');




Route::resource('form1', FormController::class) -> names ('admin.form1');
Route::post('api/fetchProvincias',[FormController::class, 'fetchProvincias' ]);
Route::post('api/fetchDistritos',[FormController::class, 'fetchDistritos' ]);


