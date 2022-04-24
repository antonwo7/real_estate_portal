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

Route::get('/', [App\Http\Controllers\Front\HomeController::class, 'index']);
Route::get('/subscribe', [App\Http\Controllers\Front\SubscriptionController::class, 'store']);

Route::group(['namespace' => 'Front', 'prefix' => 'front'], function() {

});
