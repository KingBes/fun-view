<?php

namespace Kingbes\Bang;

use Exception;
use Kingbes\Bang\Template;
use Kingbes\Bang\Tag;

function span(
    ...$args
): void {
    $strText = "";
    $strFunc = "";
    $strAttr = "";
    switch (count($args)) {
        case 1:
            if (is_string($args[0])) {
                $strText = htmlspecialchars($args[0]);
            } elseif (is_array($args[0])) {
                $strAttr = (new Tag)->getAttr($args[0]);
            } elseif (is_callable($args[0])) {
                $strFunc = (new Template)->render($args[0]);
            } else {
                new Exception("参数必须是 字符串、数组、函数");
            }
            break;
        case 2:
            if (is_string($args[0]) && is_array($args[1])) {
                $strText = htmlspecialchars($args[0]);
                $strAttr = (new Tag)->getAttr($args[1]);
            } elseif (is_string($args[0]) && is_callable($args[1])) {
                $strText = htmlspecialchars($args[0]);
                $strFunc = (new Template)->render($args[1]);
            } else {
                new Exception("参数1优先字符串,参数2数组或方法");
            }
            break;
        case 3:
            if (is_string($args[0]) && is_array($args[1]) && is_callable($args[2])) {
                $strText = htmlspecialchars($args[0]);
                $strAttr = (new Tag)->getAttr($args[1]);
                $strFunc = (new Template)->render($args[2]);
            } else {
                new Exception("参数1优先字符串,参数2优先数组,参数3是方法");
            }
            break;
    }
    echo "<span$strAttr>$strText$strFunc</span>";
}

function h1(
    ...$args
): void {
    $strText = "";
    $strFunc = "";
    $strAttr = "";
    switch (count($args)) {
        case 1:
            if (is_string($args[0])) {
                $strText = htmlspecialchars($args[0]);
            } elseif (is_array($args[0])) {
                $strAttr = (new Tag)->getAttr($args[0]);
            } elseif (is_callable($args[0])) {
                $strFunc = (new Template)->render($args[0]);
            } else {
                new Exception("参数必须是 字符串、数组、函数");
            }
            break;
        case 2:
            if (is_string($args[0]) && is_array($args[1])) {
                $strText = htmlspecialchars($args[0]);
                $strAttr = (new Tag)->getAttr($args[1]);
            } elseif (is_string($args[0]) && is_callable($args[1])) {
                $strText = htmlspecialchars($args[0]);
                $strFunc = (new Template)->render($args[1]);
            } else {
                new Exception("参数1优先字符串,参数2数组或方法");
            }
            break;
        case 3:
            if (is_string($args[0]) && is_array($args[1]) && is_callable($args[2])) {
                $strText = htmlspecialchars($args[0]);
                $strAttr = (new Tag)->getAttr($args[1]);
                $strFunc = (new Template)->render($args[2]);
            } else {
                new Exception("参数1优先字符串,参数2优先数组");
            }
            break;
    }
    echo "<h1$strAttr>$strText$strFunc</h1>";
}
