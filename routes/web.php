<?php

use App\Http\Controllers\Home;
use Illuminate\Support\Facades\Route;

Route::post('/',[Home::class,"insert"]);
Route::get('/',[Home::class,"homepage"]);
