<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StorageController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\EmployeeController;




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
Route::get('/demo-laravel', [DemoController::class,'index']);

//Gộp route thành 1 nhóm. 
Route::group(['prefix'=>'category', 'middleware' => 'checkLogin'],function() {
    Route::get('/detail/{id}', [DemoController::class,'detail']);
    Route::post('/update/{id}', [DemoController::class,'update']);
    Route::get('/destroy/{id}', [DemoController::class,'destroy']);
});

Route::group(['middleware'=>'checkLogin'], function() {
    Route::get('/board',[DashBoardController::class,'board']);

    // Router for categories
    Route::group(['prefix' => 'categories'], function () {
        Route::get('/index', [CategoryController::class,'index']);
    });

    //Route for storages.
    Route::group(['prefix' => 'storages'], function () {
        Route::get('/index', [StorageController::class,'index']);
        Route::get('/create', [StorageController::class,'create']);
        Route::post('/store', [StorageController::class,'store']);
        Route::get('/edit/{id}', [StorageController::class,'edit']);
        Route::post('/update/{id}',[StorageController::class,'update']);
        Route::get('/delete/{id}', [StorageController::class,'delete']);
    });

    //Route for receipt.
    Route::group(['prefix' => 'receipts'], function () {
        Route::post('/update/{id}', [ReceiptController::class, 'update']);
        Route::get('/export', [ReceiptController::class, 'export']);
        Route::get('/index', [ReceiptController::class, 'index']);
        Route::get('/detail/{id}', [ReceiptController::class, 'detail']);
    });

    //Route for employee.
    Route::group(['prefix' => 'employees'], function () {
        Route::get('/index', [EmployeeController::class, 'index']);
        Route::get('/create', [EmployeeController::class, 'create']);
        Route::post('/store', [EmployeeController::class, 'store']);
        Route::get('/detail/{id}', [EmployeeController::class, 'detail']);
        Route::post('/update/{id}', [EmployeeController::class, 'update']);
    });
});

Route::get('/query-builder', [DemoController::class,'queryBuilder']);
Route::get('/eloquent', [DemoController::class,'eloquent']);
Route::get('/login',[AuthController::class, 'login']);
Route::post('/login',[AuthController::class, 'postLogin']);
Route::get('/logout',[AuthController::class, 'logout']);