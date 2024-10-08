<?php

declare(strict_types=1);

namespace Kingbes\FunView;

class Tool
{
    public function arrToCss(array $cssArr, string $parentSelector = ''): string
    {
        $cssStr = '';
        foreach ($cssArr as $selector => $value) {
            // 如果有父选择器，则连接当前选择器
            $currentSelector = $parentSelector ? "$parentSelector $selector" : $selector;
            if (is_array($value)) {
                $cssStr .= "}";
                $cssStr .= "\n$currentSelector {\n";
                $cssStr .= $this->arrToCss($value, $currentSelector);
            } else {
                $cssStr .= "$selector:$value;\n";
            }
        }
        return $cssStr . "}";
    }
}
