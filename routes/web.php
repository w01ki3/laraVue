<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function (){ return view('welcome'); })->name('master.home');
Route::get('/page2', [TestController::class,'index'])->name('master.test');