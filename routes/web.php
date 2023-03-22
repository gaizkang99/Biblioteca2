<?php

use App\Http\Controllers\BookController;
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

Route::redirect('/', 'books/list' );

Route::prefix("/books")->group(function(){
    Route::get('list', [BookController::class, 'index'])->name('books');
    Route::get('create',[BookController::class,'create'])->name('books.create');
    Route::post('store',[BookController::class,'store'])->name('store');
    Route::get('{id}/edit',[BookController::class,'edit'])->name('edit');
    Route::put('{id}',[BookController::class,'update'])->name('update');
    Route::get('show/{id}',[BookController::class,'show'])->name('show');
    Route::delete('{id}',[BookController::class,'destroy'])->name('destroy');
});
// Route::controller(BookController::class)->group(function(){
//     Route::get('books','index')->name('books');
//     Route::get('booksCreate','create')->name('books.create');
//     Route::post('books/store','store')->name('store');
//     Route::get('books/{id}/edit','edit');
//     Route::put('books/{id}','update');
//     Route::get('books/show/{id}','show')->name('show');
//     Route::delete('/books/{id}','destroy');
// });

