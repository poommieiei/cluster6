<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\importjson;
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

Route::get('/workspace' , [WorkspaceController::class,'indexworkspace']);

Route::get('/import' , [importjson::class,'importpage']);
Route::post('importjson' , [importjson::class, 'importjson']);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
