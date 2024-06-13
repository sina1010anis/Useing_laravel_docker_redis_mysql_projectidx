<?php

namespace App\Http\Controllers;

use Closure;
use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Database\Factories\UserFactory;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class RedisController extends Controller
{
    public function sAddRedis()
    {
        Redis::executeRaw(['sadd' , 'car:1', 'BMW X6', '98500$', '2019', 'GA']);

        Redis::executeRaw(['sadd' , 'car:2', 'Benze S500', '99500$', '2020', 'GA']);

        Redis::executeRaw(['sadd' , 'car:3', 'BMW 730i', '103500$', '2021', 'GA']);

        Redis::executeRaw(['sadd' , 'car:4', 'Nisan', '55000$', '2019', 'JA']);

        Redis::executeRaw(['sadd' , 'car:5', 'Mazda', '58000$', '2017', 'JA']);

        //Radis::executeRaw(['']);
    } 

    private function execRedis (array $arr)
    {

        return Redis::executeRaw($arr);

    }

    private function remember (string $key, int $min, Closure $callback)
    {

        if ($this->execRedis(['exists', $key])) {

            return $this->execRedis(['get', $key]);

        } 

        $this->execRedis(['setex', $key, $min, $val = $callback()]);

        return $val;

    }

    public function redis()
    {

        // Cache in redis 
        Cache::remember('users', 60, function () {

            return User::all();

        });


        // return json_decode($this->remember('users', 60, function () {

        //     return User::all();

        // }));

    }

    public function mysql()
    {

        Car::create(['name' => 'BMW X6', 'price' => '98500$']);

        // UserFactory::new()->count(25)->create();
        
    }
}
