<?php

// 项目基础路径
define("BASE_PATH", dirname(__DIR__));

/**
 * 如果参数$path等于false
 * 将返回该程序当前的执行目录
 * @param string|false $path 路径
 * @return string
 */
function base_path($path = ""): string
{
    if (false === $path) {
        return run_path();
    }
    return path_combine(BASE_PATH, $path);
}

/**
 * app应用路径
 * @param string $path 拼接路径
 * @return string
 */
function app_path(string $path = ""): string
{
    return path_combine(BASE_PATH .
        DIRECTORY_SEPARATOR .
        "app", $path);
}

/**
 * 程序执行目录
 *
 * @param string $path 拼接路径
 * @return string
 */
function run_path(string $path = ""): string
{
    static $runPath = "";
    if (!$runPath) {
        $runPath = is_phar() ?
            dirname(Phar::running(false)) :
            BASE_PATH;
    }
    return path_combine($runPath, $path);
}

/**
 * 配置目录
 * @param string $path 拼接路径
 * @return string
 */
function config_path(string $path = ""): string
{
    return path_combine(BASE_PATH .
        DIRECTORY_SEPARATOR .
        "config", $path);
}

/**
 * 静态资源目录
 *
 * @param string $path
 * @return string
 */
function static_path(string $path = ""): string
{
    return path_combine(BASE_PATH .
        DIRECTORY_SEPARATOR .
        "static", $path);
}

/**
 * 运行时目录
 * @param string $path
 * @return string
 */
function runtime_path(string $path = ""): string
{
    static $runtimePath = '';
    if (!$runtimePath) {
        $runtimePath = run_path('runtime');
    }
    return path_combine($runtimePath, $path);
}

/**
 * 根据给定的信息生成路径
 * @param string $front 前面
 * @param string $back 后面
 * @return string
 */
function path_combine(string $front, string $back): string
{
    return $front .
        ($back ? (DIRECTORY_SEPARATOR .
            ltrim($back, DIRECTORY_SEPARATOR)) : $back);
}

/**
 * 是否 phar 包
 * @return bool
 */
function is_phar(): bool
{
    return class_exists(Phar::class, false)
        && Phar::running();
}
