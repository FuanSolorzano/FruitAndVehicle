<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrutaController;
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

Route::get('/frutas',[FrutaController::class,'index']);
Route::get('/frutas/create',[FrutaController::class,'create']);
Route::post('/frutas',[FrutaController::class,'store']);
