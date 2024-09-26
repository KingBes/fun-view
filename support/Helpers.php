<?php

use app\bang\WorkerMan;
use app\bang\Config;

// 项目基础路径
define("BASE_PATH", dirname(__DIR__));

/**
 * 如果参数$path等于false
 * 将返回该程序当前的执行目录
 * @param string|false $path 路径
 * @return string
 */
function basePath($path = ""): string
{
    if (false === $path) {
        return runPath();
    }
    return pathCombine(BASE_PATH, $path);
}

/**
 * app应用路径
 * @param string $path 拼接路径
 * @return string
 */
function appPath(string $path = ""): string
{
    return pathCombine(BASE_PATH .
        DIRECTORY_SEPARATOR .
        "app", $path);
}

/**
 * 程序执行目录
 *
 * @param string $path 拼接路径
 * @return string
 */
function runPath(string $path = ""): string
{
    static $runPath = "";
    if (!$runPath) {
        $runPath = isPhar() ?
            dirname(Phar::running(false)) :
            BASE_PATH;
    }
    return pathCombine($runPath, $path);
}

/**
 * 配置目录
 * @param string $path 拼接路径
 * @return string
 */
function configPath(string $path = ""): string
{
    return pathCombine(BASE_PATH .
        DIRECTORY_SEPARATOR .
        "config", $path);
}

/**
 * 静态资源目录
 *
 * @param string $path
 * @return string
 */
function staticPath(string $path = ""): string
{
    return pathCombine(BASE_PATH .
        DIRECTORY_SEPARATOR .
        "static", $path);
}

/**
 * 运行时目录
 * @param string $path
 * @return string
 */
function runtimePath(string $path = ""): string
{
    static $runtimePath = '';
    if (!$runtimePath) {
        $runtimePath = runPath('runtime');
    }
    return pathCombine($runtimePath, $path);
}

/**
 * 根据给定的信息生成路径
 * @param string $front 前面
 * @param string $back 后面
 * @return string
 */
function pathCombine(string $front, string $back): string
{
    return $front .
        ($back ? (DIRECTORY_SEPARATOR .
            ltrim($back, DIRECTORY_SEPARATOR)) : $back);
}

/**
 * 是否 phar 包
 * @return bool
 */
function isPhar(): bool
{
    return class_exists(Phar::class, false)
        && Phar::running();
}

/**
 * 获取配置信息
 * @param string|null $key
 * @param mixed $default
 * @return array|mixed|null
 */
function config(string $key = null,mixed $default = null)
{
    return Config::get($key, $default);
}
