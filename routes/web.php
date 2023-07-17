<?php

use Illuminate\Support\Facades\Route;

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

// video number 2
//Route::get('/hello/{name}/{age}',[\App\Http\Controllers\demoController::class, 'demoAction']);


// video number 3
//Route::get('/hello',[\App\Http\Controllers\demoController::class, 'bodyAction']);



// video number 4
//Route::get('/hello',[\App\Http\Controllers\demoController::class, 'headerAction']);


// video number 5
//Route::get('/hello/{name}/{age}',[\App\Http\Controllers\demoController::class, 'allRequest']);


// video number 6
//Route::post('/hello',[\App\Http\Controllers\demoController::class, 'formData']);


// video number 7
//Route::post('/hello',[\App\Http\Controllers\demoController::class, 'fileUpload']);


// video number 8
//Route::post('/hello',[\App\Http\Controllers\demoController::class, 'ipAddress']);


// video number 9
//Route::post('/hello',[\App\Http\Controllers\demoController::class, 'cookieRequest']);


// video number 9
//Route::post('/hello',[\App\Http\Controllers\demoController::class, 'responseFormat']);



// video number 10
//Route::post('/hello',[\App\Http\Controllers\demoController::class, 'jsonFormat']);



// video number 11
//Route::get('/hello1',[\App\Http\Controllers\demoController::class, 'redirect1']);
//Route::get('/hello2',[\App\Http\Controllers\demoController::class, 'redirect2']);




// video number 12
//Route::get('/hello1',[\App\Http\Controllers\demoController::class, 'fileBinary']);
//Route::get('/hello2',[\App\Http\Controllers\demoController::class, 'fileDownload']);




// video number 13
//Route::get('/hello',[\App\Http\Controllers\demoController::class, 'demoCookie']);



// video number 14
//Route::get('/hello',[\App\Http\Controllers\demoController::class, 'demoHeader']);





// video number 15
//Route::get('/hello/{num1}/{num2}',[\App\Http\Controllers\demoController::class, 'laravelLog']);




// video number 16
Route::get('/sessionPut/{email}',[\App\Http\Controllers\demoController::class, 'sessionPut']);
Route::get('/sessionPull',[\App\Http\Controllers\demoController::class, 'sessionPull']);
Route::get('/sessionGet',[\App\Http\Controllers\demoController::class, 'sessionGet']);
Route::get('/sessionForget',[\App\Http\Controllers\demoController::class, 'sessionForget']);
Route::get('/sessionFlash',[\App\Http\Controllers\demoController::class, 'sessionFlash']);


