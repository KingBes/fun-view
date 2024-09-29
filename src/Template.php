<?php

namespace Kingbes\FunView;

class Template
{
    /**
     * 转义属性 function
     *
     * @param array $attr
     * @return string
     */
    public static function getAttr(array $attr): string
    {
        $str = "";
        foreach ($attr as $k => $v) {
            $str .= " " . htmlspecialchars($k, ENT_QUOTES, 'UTF-8')
                . '="'
                . htmlspecialchars($v, ENT_QUOTES, 'UTF-8') . '"';
        }
        return $str;
    }

    /**
     * 创建标签 function
     *
     * @param string $tagName
     * @param boolean $tagType
     * @param [type] ...$args
     * @return void
     */
    public static function createTag(string $tagName, bool $tagType = true, ...$args): void
    {
        $strText = '';
        $strFunc = '';
        $strAttr = '';

        switch (count($args)) {
            case 1:
                if (is_string($args[0])) {
                    $strText = htmlspecialchars($args[0], ENT_QUOTES, 'UTF-8');
                } elseif (is_array($args[0])) {
                    $strAttr = self::getAttr($args[0]);
                } elseif (is_callable($args[0])) {
                    $strFunc = self::render($args[0]);
                } else {
                    throw new \Exception("参数必须是 字符串、数组、函数");
                }
                break;
            case 2:
                if (is_string($args[0]) && is_array($args[1])) {
                    $strText = htmlspecialchars($args[0], ENT_QUOTES, 'UTF-8');
                    $strAttr = self::getAttr($args[1]);
                } elseif (is_string($args[0]) && is_callable($args[1])) {
                    $strText = htmlspecialchars($args[0], ENT_QUOTES, 'UTF-8');
                    $strFunc = self::render($args[1]);
                } else {
                    throw new \Exception("参数1优先字符串,参数2数组或方法");
                }
                break;
            case 3:
                if (is_string($args[0]) && is_array($args[1]) && is_callable($args[2])) {
                    $strText = htmlspecialchars($args[0], ENT_QUOTES, 'UTF-8');
                    $strAttr = self::getAttr($args[1]);
                    $strFunc = self::render($args[2]);
                } else {
                    throw new \Exception("参数1优先字符串,参数2优先数组,参数3是方法");
                }
                break;
            default:
                throw new \Exception("无效的参数数量");
        }
        if ($tagType) {
            echo "<$tagName$strAttr>$strText$strFunc</$tagName>";
        } else {
            echo "<$tagName$strAttr />";
        }
    }

    /**
     * 渲染 function
     *
     * @param callable $tag
     * @return string|false
     */
    public static function render(callable $tag): string|false
    {
        ob_start();
        echo $tag();
        return ob_get_clean();
    }
}
