<?php

use App\Http\Controllers\L1110;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RedisController;

Route::view('/', 'welcome');
Route::get('/redis', [RedisController::class, 'redis']);
Route::get('/mysql', [RedisController::class, 'mysql']);
Route::get('/l-11-10', [L1110::class, 'index']);
Route::get('/time', [L1110::class, 'time']);
Route::model('test', User::class);