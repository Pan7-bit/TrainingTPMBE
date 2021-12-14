<?php

use App\Http\Controllers\BookController;
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

Route::get('/hello', function (){
    echo('Hello World');
});

Route::get('/create', [BookController::class, 'getCreatePage'])->name('getCreatePage');
Route::get('/get-Books', [BookController::class, 'getBooks'])->name('getBooks');

Route::post('/create-Book', [BookController::class, 'createBook'])->name('createBook');