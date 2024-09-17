<?php

use App\Http\Controllers\AjaxController;
use Illuminate\Support\Facades\Route;

Route::get('/',[AjaxController::class,'index']);
Route::post('/getdata',[AjaxController::class,'getdata'])->name('get.data');

Route::get('/two',[AjaxController::class,'twoView'])->name('two.view');
