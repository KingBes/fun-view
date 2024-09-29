<?php

namespace Kingbes\Bang;

class Tag
{
    /**
     * 转义属性 function
     *
     * @param array $attr
     * @return string
     */
    public function getAttr(array $attr): string
    {
        $str = "";
        foreach ($attr as $k => $v) {
            $str .= " " . $k . '="' . $v . '" ';
        }
        return $str;
    }
}
