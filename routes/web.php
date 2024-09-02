<?php

use App\Http\Controllers\FormController;


use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', function () {
    return view('index'); 
});


Route::post('/submit-form', [FormController::class, 'submitForm'])->name('submit.form');












