<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

// Route::get('/', function () {
//     return view('books.create');
// });

Route::get('/', function () {
    return view('index');
});
