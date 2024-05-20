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
    } 
    public function redis()
    {

        // $this->sAddRedis();

        // Redis::executeRaw(['flashall']);

        // UserFactory::new()->count(500)->create();

        // dd(Redis::executeRaw(['lpush', 'numners', '1', '2', '3', '4', '5']));

        // Redis::executeRaw(['lpush', 'numners', '0']);
        
        dd(Redis::executeRaw(['lrange', 'numners', '0', '9']));

    }

    public function mysql()
    {

        Car::create(['name' => 'BMW X6', 'price' => '98500$']);

        // UserFactory::new()->count(25)->create();
        
    }
}
