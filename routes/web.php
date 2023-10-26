<?php

use App\Http\Controllers\ItemController;
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
    return view('Home');
});
Route::get('/about', function () {
    return view('About');
});
Route::get('/product',[ItemController::class,'index']);
Route::get('/ShopCard', function () {
    return view('ShopCard');
});
Route::get('/detailProduct/{item:id_barang}',[ItemController::class,'show']);


