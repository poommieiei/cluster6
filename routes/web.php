<?php

use App\Http\Controllers\CollectionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Importjson;
use App\Http\Controllers\TableController;
use App\Http\Controllers\WorkspaceController;
use PHPUnit\TestRunner\TestResult\Collector;

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
Route::get('/workspace', [WorkspaceController::class , 'indexworkspace']);
Route::post('/insertWorkspace/{id}', [WorkspaceController::class, 'insertworkspace']);
Route::get('/deleteworkspace/{id}', [WorkspaceController::class, 'deleteworkspace'])->name('deleteworkspace');
Route::get('/account',function(){ //show user info
    return view('auth.account');
});
Route::post('rename/{id}', function ($id) { //rename workspace route
});


