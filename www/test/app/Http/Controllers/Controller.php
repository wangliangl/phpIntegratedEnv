<?php

namespace App\Http\Controllers;

use App\Test;
use Laravel\Lumen\Routing\Controller as BaseController;

use Log;
class Controller extends BaseController
{
    public function testMq() {
        dd(Test::all()->toArray());
    }


    public function addMessage(){
        \Amqp::publish('routing-test', "message.", ['queue' => 'wll-test']);
    }

    public function testConsume(){
       \Amqp::consume('wll-test', function ($message, $resolver) {
           Log::info("test", [$message->body]);
            //ack机制
            //$resolver->acknowledge($message);
        });
    }
}
