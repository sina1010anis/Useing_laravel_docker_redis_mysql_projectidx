<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class RedisController extends Controller
{
    public function redis()
    {
        dd(Redis::get('user:1:name'));
    }

    public function mysql()
    {

        Car::create(['name' => 'BMW X6', 'price' => '98500$']);

        dd((Car::find(1))->name);
        
    }
}
