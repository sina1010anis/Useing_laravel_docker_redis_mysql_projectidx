<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RedisController;

Route::view('/', 'welcome');
Route::get('/redis', [RedisController::class, 'redis']);
Route::get('/mysql', [RedisController::class, 'mysql']);