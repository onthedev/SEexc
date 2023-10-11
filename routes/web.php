<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportExportController;
use App\Http\Controllers\CheckAttController;

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
//for import export
Route::get('/importexport',[App\Http\Controllers\ImportExportController::class, 'index']);
Route::post('/importxls',[App\Http\Controllers\ImportExportController::class, 'import_xls']);
Route::get('/exportxls',[App\Http\Controllers\ImportExportController::class, 'export_xls']);
Route::get('/checkatt',[App\Http\Controllers\CheckAttController::class, 'checkatt']);
Route::post('/addcheckatt',[App\Http\Controllers\CheckAttController::class, 'addcheckatt'])->name('addcheckatt');
Route::get('/check_detail',[App\Http\Controllers\CheckAttController::class, 'check_detail'])->name('check_detail');
Route::get('/checkatt',[App\Http\Controllers\CheckAttController::class, 'showCheck']);
