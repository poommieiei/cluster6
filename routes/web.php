<?php

use App\Http\Controllers\CollectionController;
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
Route::get('/workspace', [WorkspaceController::class , 'indexworkspace']);
Route::post('/insertWorkspace/{id}', [WorkspaceController::class, 'insertworkspace']);
Route::post('/insertWrokspace', [WorkspaceController::class, 'insertworkspace']);
Route::get('/deleteworkspace/{id}', [WorkspaceController::class, 'deleteworkspace'])->name('deleteworkspace');
Route::get('/account',function(){ //show user info
    return view('auth.account');
});
Route::post('rename/{id}', [WorkspaceController::class, 'renameworkspace']);

// Route ของ Collection (ทำได้เลย)
Route::get('workspace/{id}/collection' , [CollectionController::class , 'indexcollection']);
Route::get('/emptyCollection' , [CollectionController::class , 'indexEmptyCollection']);
Route::post('/renamecollection/{id}' , [CollectionController::class , 'renamecollection']);
Route::get('/deletecollection/{id}' , [CollectionController::class , 'deletecollection']);
Route::post('/importcollection/{id}' , [CollectionController::class , 'importcollection']);

// Route ของ Collection (ยังไม่ได้ทำ)

// Route ของ Table (ยังไม่ได้ทำ)
Route::get('/collection/{id}/table' , [TableController::class , 'indexTable']);
Route::post('/ExportTable' , [TableController::class , 'ExportTable']);
Route::get('/collection/{id}/table/{method}' , [TableController::class , 'indexTable2']);

// Route::get('table' , [TableController::class , 'indexTable']);
// Route::get('' , [TableController::class , 'SaveTable']);
// Route::get('' , [TableController::class , 'ExportTable']);
