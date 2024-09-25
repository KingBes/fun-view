<?php

namespace app\bang;

/**
 * 配置管理 class
 */
class Config
{
    /**
     * 配置参数 variable
     *
     * @var array
     */
    protected array $config = [];

    /**
     * 配置文件目录 variable
     *
     * @var string
     */
    protected static $configPath = "";

    /**
     * 加载 function
     *
     * @param string $configPath 配置目录
     * @param string $key 连接符
     * @return void
     */
    public static function load(
        string $configPath,
        string $key = "."
    ): void {
        static::$configPath = $configPath;
        if (!$configPath) {
            return;
        }
        $files = [];
        foreach (scandir($configPath) as $file) {
            if ($file !== '.' && $file !== '..') {
                $files[] = $file;
            }
        }
    }
}
