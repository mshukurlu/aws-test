<?php

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

Route::get('/aws-ci',function (){
    return 'aws ci test';
});

Route::get('/new-page',function (){
    return 'added new page test 7';
});


Route::get('/log',[\App\Http\Controllers\LogController::class,'store']);

