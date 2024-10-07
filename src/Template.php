<?php

namespace Kingbes\FunView;

use Kingbes\FunView\Tool;

class Template
{

    /**
     * 数组转css字符串 function
     *
     * @param array $arr
     * @return string
     */
    public static function arrayToCss(array $arr): string
    {
        $Tool = new Tool;
        return substr($Tool->arrToCss($arr), 1);
    }

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
            $str .= " " . self::hsc($k)
                . '="'
                . self::hsc($v) . '"';
        }
        return $str;
    }

    /**
     * htmlspecialchars function
     *
     * @param string $str
     * @return string
     */
    public static function hsc(string $str): string
    {
        return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
    }

    /**
     * 创建标签 function
     *
     * @param string $tagName 标签名
     * @param boolean $tagType 单双标签
     * @param boolean $is_hsc 是否安全输出
     * @param [string|arrat|callable] ...$args
     * @return void
     */
    public static function createTag(string $tagName, bool $tagType = true, bool $is_hsc = true, ...$args): void
    {
        $strText = '';
        $strFunc = '';
        $strAttr = '';

        switch (count($args)) {
            case 1:
                if (is_string($args[0])) {
                    $strText = $args[0];
                    if ($is_hsc) {
                        $strText = self::hsc($args[0]);
                    }
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
                    $strText = self::hsc($args[0]);
                    $strAttr = self::getAttr($args[1]);
                } elseif (is_string($args[0]) && is_callable($args[1])) {
                    $strText = self::hsc($args[0]);
                    $strFunc = self::render($args[1]);
                } else {
                    throw new \Exception("参数1优先字符串,参数2数组或方法");
                }
                break;
            case 3:
                if (is_string($args[0]) && is_array($args[1]) && is_callable($args[2])) {
                    $strText = self::hsc($args[0]);
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
     * 渲染标签 function
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

    /**
     * 渲染视图 function
     *
     * @param callable $view
     * @return string|false
     */
    public static function fetch(callable $view): string|false
    {
        ob_start();
?>
        <!DOCTYPE html>
        <html>

        <?php echo $view(); ?>

        </html>
<?php
        return ob_get_clean();
    }
}
