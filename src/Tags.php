<?php

declare(strict_types=1);

namespace Kingbes\FunView;

use Kingbes\FunView\Tool;

class Tags
{
    // 单标签列表
    protected const SINGLE_TAGS = [
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

    private string $name;
    private bool $isSingleTag;

    /**
     * 构造函数初始化标签名称和类型
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->isSingleTag = in_array($name, self::SINGLE_TAGS);
    }

    /**
     * 创建HTML标签
     */
    public function create(...$args): string
    {
        [$attributes, $innerContent] = $this->parseArgs($args);

        if ($this->isSingleTag) {
            return "<{$this->name}{$attributes}/>";
        }

        return "<{$this->name}{$attributes}>{$innerContent}</{$this->name}>";
    }

    /**
     * 解析传入参数
     */
    private function parseArgs(array $args): array
    {
        $attributes = '';
        $innerContent = '';

        foreach ($args as $arg) {
            if (is_callable($arg)) {
                $innerContent .= $arg();
            } elseif (is_array($arg)) {
                $attributes .= $this->buildAttributes($arg);
            } else {
                $innerContent .= $arg;
            }
        }

        return [$attributes, $innerContent];
    }

    /**
     * 构建属性字符串
     */
    private function buildAttributes(array $attr): string
    {
        $attributeStrings = [];
        foreach ($attr as $key => $value) {
            $attributeStrings[] = "$key=\"$value\"";
        }
        return ' ' . implode(' ', $attributeStrings);
    }

    /**
     * 静态方法调用创建实例并生成标签
     */
    public static function __callStatic(string $name, array $arguments): string
    {
        return (new self($name))->create(...$arguments);
    }

    /**
     * 将数组转换为CSS字符串
     */
    public static function arrayToCss(array $arr): string
    {
        $css = (new Tool)->arrToCss($arr);
        return preg_replace('/}+/', '}', substr($css, 1));
    }
}
