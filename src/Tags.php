<?php

declare(strict_types=1);

namespace Kingbes\FunView;

use Kingbes\FunView\Tool;

class Tags
{
    /**
     * 单标签 variable
     *
     * @var array
     */
    protected array $single_tags = [
        "br",
        "hr",
        "img",
        "input",
        "link",
        "meta",
        "area",
        "base",
        "col",
        "embed",
        "source",
        "portal",
        "wbr"
    ];

    /**
     * 标签类型 variable
     *
     * @var boolean
     */
    protected bool $tagType = false;

    /**
     * 构造函数 function
     *
     * @param string $name
     * @return void
     */
    public function __construct(protected string $name)
    {
        if (in_array($name, $this->single_tags)) {
            $this->tagType = true;
        }
    }

    /**
     * 创建 function
     *
     * @param mixed ...$args
     * @return string
     */
    public function create(mixed ...$args): string
    {
        $text = '';
        $attr = '';
        $func = '';
        foreach ($args as $key => $value) {
            if (is_callable($value)) {
                $func .= $value();
            } elseif (is_array($value)) {
                $attr .= $this->getAttr($value);
            } else {
                $text .= $value;
            }
        }
        if ($this->tagType) {
            return "<{$this->name}{$attr}/>";
        } else {
            return "<{$this->name}{$attr}>{$text}{$func}</{$this->name}>";
        }
    }

    /**
     * 属性 function
     *
     * @param array $attr
     * @return string
     */
    protected function getAttr(array $attr): string
    {
        $str = '';
        foreach ($attr as $key => $value) {
            $str .= " $key=\"$value\"";
        }
        return $str;
    }

    /**
     * 数组转css字符串 function
     *
     * @param array $arr
     * @return string
     */
    public static function arrayToCss(array $arr): string
    {
        $Tool = new Tool;
        return preg_replace('/}+/', '}', substr($Tool->arrToCss($arr), 1));
    }

    /**
     * 方法重载 function
     *
     * @param string $name
     * @param array $arguments
     * @return string
     */
    public static function __callStatic(string $name, array $arguments): string
    {
        $tag = new Tags($name);
        return $tag->create(...$arguments);
    }
}
