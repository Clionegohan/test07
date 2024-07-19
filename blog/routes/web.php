<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;//外部にあるPostControllrクラスをインポート
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
Route::get('/posts', [PostController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
