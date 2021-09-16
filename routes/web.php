<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\TeammembersController;
use App\Http\Controllers\ExportExcelController;
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

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
    Route::post('register', [RegisterController::class, 'store'])->middleware('guest');


    Route::get('showtask', [TasksController::class, 'show']);
    Route::get('createtask', [TasksController::class, 'create']);
    Route::post('task_submit', [TasksController::class, 'store']);
    Route::get('export', [TasksController::class, 'export']);
    //    Route::get('delete/{id}',[TasksController::class, 'destroy']);

////
//    Route::get('addmember', [TeammembersController::class, 'create']);
//    Route::post('addmember', [TeammembersController::class, 'store']);
//


    Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
    Route::post('login_submit', [SessionsController::class, 'store'])->middleware('guest');

//    Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');


    Route::get('/export_excel', [ExportExcelController::class, 'index']);
    Route::get('/export_excel/excel', [ExportExcelController::class, 'excel'])->name('export_excel.excel');


