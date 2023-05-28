<?php

use App\Http\Controllers\VehiculoController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vehiculos',[VehiculoController::class,'index']);
Route::get('/vehiculos/create',[VehiculoController::class,'create']);
Route::post('/vehiculos',[VehiculoController::class,'store']);

