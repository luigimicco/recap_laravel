<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController as BooksController;

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
})->name('home');

/*

*/
Route::get('/books/trashed', [BooksController::class, 'trashed'])->name('books.trashed');
Route::get('/books/{book}/restore', [BooksController::class, 'restore'])->name('books.restore');
Route::delete('/books/{book}/force-delete', [BooksController::class, 'forceDelete'])->name('books.force-delete');
Route::resource('/books', BooksController::class);
