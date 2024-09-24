<?php

namespace app\bang;

use Workerman\Worker;
use Workerman\Connection\TcpConnection;
use Workerman\Protocols\Http\Request;

class App
{
    public Worker $worker;

    public function __construct()
    {
        $this->worker = new Worker("http://127.0.0.1:8787");
        $this->worker->onMessage = function (TcpConnection $connection, Request $request) {
            return $this->message($connection, $request);
        };
    }

    protected function message(TcpConnection $connection, Request $request)
    {

        $connection->send("hello bang");
    }
}
