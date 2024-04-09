<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Importjson;
use App\Http\Controllers\TableController;
use App\Http\Controllers\WorkspaceController;
use PHPUnit\TestRunner\TestResult\Collector;
use Illuminate\Support\Facades\Auth;
/*ห้ามลบ
    Route::get('/import' , [Importjson::class,'importpage']);
    Route::post('importjson' , [Importjson::class, 'importjson']);

    Route::get('/template' , function(){
        return  view('layouts.layout');
    });
*/

Route::get('/import' , [Importjson::class,'importpage']);
Route::post('importjson' , [Importjson::class, 'importjson']);

Route::get('/template' , function(){
    return  view('layouts.layout');
});

//ห้ามลบ
Auth::routes();
// Route ของ Workspace (ทำได้เลยเพราะทำ Controller ให้แล้ว ชื่อ WorkspaceController)
Route::get('/', [WorkspaceController::class, 'indexworkspace']);
Route::get('/viewinsert', [WorkspaceController::class , 'viewinsert']);
Route::get('/workspace', [WorkspaceController::class , 'indexworkspace'])->name('workspace');
Route::post('/insertWorkspace/{id}', [WorkspaceController::class, 'insertworkspace']);
Route::post('/insertWrokspace', [WorkspaceController::class, 'insertworkspace']);
Route::get('/deleteworkspace/{id}', [WorkspaceController::class, 'deleteworkspace'])->name('deleteworkspace');
Route::post('rename/{id}', [WorkspaceController::class, 'renameworkspace']);
Route::get('/account', [HomeController::class, 'showuserinfo'])->name('account');{
}
// Route ของ Collection (ทำได้เลย)
