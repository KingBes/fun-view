<?php

namespace Kingbes\Bang;

class Template
{
    /**
     * 渲染 function
     *
     * @param callable $tag
     * @return string|false
     */
    public function render(callable $tag): string|false
    {
        ob_start();

        echo $tag();

        $output = ob_get_clean();
        return $output;
    }
}
