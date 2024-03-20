<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Importjson;
use App\Http\Controllers\WorkspaceController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/home', function () {
//     return view('home');
// });
Route::get('/', [WorkspaceController::class, 'indexworkspace']);

Route::get('/viewinsert', [WorkspaceController::class , 'viewinsert']);
Route::get('/workspace', [WorkspaceController::class , 'indexworkspace']);
Route::post('/insertWrokspace', [WorkspaceController::class, 'insertworkspace']);
Route::get('/deleteworkspace/{id}', [WorkspaceController::class, 'deleteworkspace'])->name('deleteworkspace');

Route::get('/import' , [Importjson::class,'importpage']);
Route::post('importjson' , [Importjson::class, 'importjson']);

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
