<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Database\Factories\UserFactory;
use Illuminate\Support\Facades\Redis;

class RedisController extends Controller
{
    private function sAddRedis()
    {
        Redis::executeRaw(['sadd' , 'car:1', 'BMW X6', '98500$', '2019', 'GA']);

        Redis::executeRaw(['sadd' , 'car:2', 'Benze S500', '99500$', '2020', 'GA']);

        Redis::executeRaw(['sadd' , 'car:3', 'BMW 730i', '103500$', '2021', 'GA']);

        Redis::executeRaw(['sadd' , 'car:4', 'Nisan', '55000$', '2019', 'JA']);

        Redis::executeRaw(['sadd' , 'car:5', 'Mazda', '58000$', '2017', 'JA']);

        //Radis::executeRaw(['']);
    } 
    public function redis()
    {
        
        for ($i = 1 ; $i <= 50 ; $i++) {

            Redis::executRaw(['zadd', 'x:'.$i, 'titel-one']);

            for ($j = 1 ; $j <= 10 ; $j++) {

                Redis::executRaw(['zadd', 'x:'.$i, fake()->name()]);

            }

        }

    }

    public function mysql()
    {

        Car::create(['name' => 'BMW X6', 'price' => '98500$']);

        // UserFactory::new()->count(25)->create();
        
    }
}
