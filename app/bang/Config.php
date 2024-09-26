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
    protected static array $config = [];

    /**
     * 配置文件目录 variable
     *
     * @var string
     */
    protected static string $configPath = "";

    /**
     * 加载 function
     *
     * @param string $configPath 配置目录
     * @param string $key 连接符
     * @return void
     */
    public static function load(
        string $configPath
    ): void {
        static::$configPath = $configPath;
        if (!$configPath) {
            return;
        }
        foreach (scandir($configPath) as $file) {

            if (
                $file !== '.'
                && $file !== '..'
                && is_file($configPath . DIRECTORY_SEPARATOR . $file)
            ) {
                self::parse(
                    $configPath . DIRECTORY_SEPARATOR . $file,
                    pathinfo($file, PATHINFO_FILENAME)
                );
            }
        }
    }

    protected static function parse(string $file, string $name)
    {
        $type   = pathinfo($file, PATHINFO_EXTENSION);
        $config = [];
        $config = match ($type) {
            'php'           =>  include $file,
            'yml', 'yaml'    =>  function_exists('yaml_parse_file') ? yaml_parse_file($file) : [],
            'ini'           =>  parse_ini_file($file, true, INI_SCANNER_TYPED) ?: [],
            'json'          =>  json_decode(file_get_contents($file), true),
            default         =>  [],
        };
        self::set($config, strtolower($name));
    }

    /**
     * 设置配置参数
     *
     * @param array $config 配置参数
     * @param string $name 配置名
     * @return array
     */
    public static function set(array $config, string $name): array
    {
        if (empty($name)) {
            self::$config = array_merge(self::$config, array_change_key_case($config));
            return self::$config;
        }
        if (isset(self::$config[$name])) {
            $result = array_merge(self::$config[$name], $config);
        } else {
            $result = $config;
        }
        self::$config[$name] = $result;
        return $result;
    }

    /**
     * 获取配置参数 为空则获取所有配置 function
     *
     * @param string|null $name
     * @param mixed $default
     * @return mixed
     */
    public static function get(string $name = null, mixed $default = null): mixed
    {
        // 无参数时获取所有
        if (empty($name)) {
            return self::$config;
        }

        if (!str_contains($name, '.')) {
            return self::pull($name);
        }

        $name    = explode('.', $name);
        $name[0] = strtolower($name[0]);
        $config  = self::$config;

        // 按.拆分成多维数组进行判断
        foreach ($name as $val) {
            if (isset($config[$val])) {
                $config = $config[$val];
            } else {
                return $default;
            }
        }

        return $config;
    }

    /**
     * 获取一级配置 function
     *
     * @param string $name
     * @return array
     */
    protected static function pull(string $name): array
    {
        $name = strtolower($name);

        return self::$config[$name] ?? [];
    }
}
