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
Route::get('/Workspace', [WorkspaceController::class , 'indexworkspace']);

Route::get('/import' , [Importjson::class,'importpage']);
Route::post('importjson' , [Importjson::class, 'importjson']);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
