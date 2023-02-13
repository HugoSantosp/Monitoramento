<?php

use App\Http\Controllers\PingController;
use App\Http\Controllers\ServerController;
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

/* Route::get('/', [PingController::class, 'ServerPings']); */
/* 
Route::get('/', function() {
    return view('welcome');
}); */

Route::get('/monitor', [ServerController::class, 'index']);

Route::post('/addServer', [ServerController::class, 'create']);
