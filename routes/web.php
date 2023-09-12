<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Form\FormController;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})-> name ('inicio');

Route::get('/ficha1', function () {
    return view('Fichas.Monitoreo.ficha1-1');
})-> name ('inicio');

Route::get('/ficha1/rst', function () {
    return view('Fichas.Monitoreo.Result.ficha1-rst');
})-> name ('inicio');

Route::resource('form1', FormController::class) -> names ('admin.form1');
Route::post('api/fetchProvincias',[FormController::class, 'fetchProvincias' ]);
Route::post('api/fetchDistritos',[FormController::class, 'fetchDistritos' ]);



