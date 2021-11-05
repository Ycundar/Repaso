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
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MarcaController;

Route::get('/', function () {
    return view('welcome');
});
// ROUTES  CATEGORIA--
Route::get('/api/categoria', [CategoriaController::class,'index']);
Route::post('/api/categoria/registrar', [CategoriaController::class,'store']);
Route::put('/api/categoria/actualizar', [CategoriaController::class,'update']);
Route::post('/api/categoria/eliminar', [CategoriaController::class,'destroy']);



// rutas CLIENTE--
Route::get('/api/cliente', [ClienteController::class,'index']);
Route::post('/api/cliente/registrar', [ClienteController::class,'store']);
Route::put('/api/cliente/actualizar', [ClienteController::class,'update']);
Route::post('/api/cliente/eliminar', [ClienteController::class,'destroy']);



// rutas MARCAS--
Route::get('/api/marca', [MarcaController::class,'index']);
Route::post('/api/marca/registrar', [MarcaController::class,'store']);
Route::put('/api/marca/actualizar', [MarcaController::class,'update']);
Route::post('/api/marca/eliminar', [MarcaController::class,'destroy']);


