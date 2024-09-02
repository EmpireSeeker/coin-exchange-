<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Models\Coin;

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

/*Route::get('/', function () {
    return view('welcome');
}); */

Route::controller(FrontController::class)->group(function () {
     Route::get('/', 'index');
     Route::get('about', 'about');
     Route::get('exchange/{coin}', 'exchange');
     Route::get('support', 'support');
});
