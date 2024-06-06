<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class L1110 extends Controller
{
    public function index()
    {
        // Laravel 11.10 New Fetrue
        $data = ['name' => 'sina', 'email' => 'sina@sina.com', 'foobar' => 'one'];
        User::updateOrInsert([ 'id' => 525 ], 
            function ($exists) use ($data) {
                if ($exists) {
                    return [
                      'name' => $data['name'].'-Copy',
                      'email' => $data['email'].'-Copy',
                    ];
                  }
               
                  return [
                    'name' => $data['name'],
                    'email' => $data['email'],
                  ];
        });

        dd(User::find(525));
    }
}
