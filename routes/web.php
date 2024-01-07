<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Form\Form1Controller;
use App\Http\Controllers\Form\Form2Controller;
use App\Http\Controllers\Form\Form3Controller;
use App\Http\Controllers\Alm\Alm1Controller;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Spatie\PermissionController;
use App\Http\Controllers\Spatie\RolesController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Auth\PasswordController;

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




Route::get('/', [LoginController::class, 'show']);

Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login'])
-> name ('login');



Route::get('/logout', [LogoutController::class, 'logout'])
->name ('cerrar_sesion');



Route::get('/dashboard',[HomeController::class, 'index'])-> name ('inicio');
Route::get('/reporte',[HomeController::class, 'reporte'])-> name ('reporte');

Route::get('/power-bi', function () {
    return view('pages.powerbi');
})-> name ('power');

/* Password */
Route::get('/newpassword', [PasswordController::class, 'newpass'])-> name ('password.edit');
Route::post('/change/password', [PasswordController::class, 'changepass']) -> name('password.change');

/* Configuraciones */
Route::resource('users', UserController::class) -> names ('users');
Route::resource('permissions', PermissionController::class) -> names ('permissions');
Route::resource('roles', RolesController::class) -> names ('roles');

/* Formularios */
Route::resource('form1', Form1Controller::class) -> names ('form1');
Route::resource('form2', Form2Controller::class) -> names ('form2');
Route::resource('form3', Form3Controller::class) -> names ('form3');
Route::resource('alm1', Alm1Controller::class) -> names ('alm1');

/* Reporte Formularios */
Route::get('form/reporte1',[Form1Controller::class, 'reporte'])-> name ('form1.reporte');
Route::get('form/reporte2',[Form2Controller::class, 'reporte'])-> name ('form2.reporte');
Route::get('form/reporte3',[Form3Controller::class, 'reporte'])-> name ('form3.reporte');
Route::get('almacen/reporte1',[Alm1Controller::class, 'reporte'])-> name ('almacen1.reporte');





