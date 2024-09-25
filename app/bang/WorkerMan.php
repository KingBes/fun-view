<?php

namespace app\bang;

use Workerman\Worker;
use Workerman\Connection\TcpConnection;
use Workerman\Protocols\Http\Request;
use Workerman\Protocols\Http\Response;

/**
 * wokerman class
 */
class WorkerMan
{
    /**
     * 工作路由 variable
     *
     * @var array
     */
    protected array $workerRoutes = [];

    /**
     * 工作 variable
     *
     * @var Worker
     */
    public Worker $worker;

    /**
     * 构造 function
     */
    public function __construct()
    {
        // 开启工作
        $this->worker = new Worker("http://127.0.0.1:8787");
        $this->worker->onMessage = function (
            TcpConnection $connection,
            Request $request
        ) {
            return $this->message($connection, $request);
        };
    }

    /**
     * 消息 function
     *
     * @param TcpConnection $connection
     * @param Request $request
     * @return void
     */
    protected function message(
        TcpConnection $connection,
        Request $request
    ): null {
        $path = $request->path();
        $key = $request->method() . $path;

        var_dump($path, $key);
        $status = 200; // 默认状态



        return null;
    }

    /**
     * 获取404返回.
     * @param string $plugin
     * @return mixed
     */
    protected static function getFallback(string $plugin = ''): mixed
    {
        return new Response(404, [], "404 Not Found");
    }

    /**
     * 不安全 uri.
     * @param TcpConnection $connection
     * @param string $path
     * @param $request
     * @return bool
     */
    protected static function unsafeUri(
        TcpConnection $connection,
        string $path,
        $request
    ): bool {
        if (
            !$path ||
            $path[0] !== '/' ||
            strpos($path, '/../') !== false ||
            substr($path, -3) === '/..' ||
            strpos($path, "\\") !== false ||
            strpos($path, "\0") !== false
        ) {
            $callback = static::getFallback();
            static::send($connection, $callback($request, 400), $request);
            return true;
        }
        return false;
    }

    /**
     * 消息发送 function
     *
     * @param TcpConnection $connection 
     * @param callable $response 函数
     * @param Request $request 请求
     * @return void
     */
    protected static function send(
        TcpConnection $connection,
        callable $response,
        Request $request
    ): void {
        $connection->send($response);
        return;
    }
}
