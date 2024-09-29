<?php

declare(strict_types=1);

require "vendor/autoload.php";

use Kingbes\View\Template;

use function Kingbes\View\h1;
use function Kingbes\View\span;
use function Kingbes\View\img;

/**
 * 视图
 */
$func = function () {

    h1("hello", function () {
        span("world");
        span("->php");
    });

    h1("world", ["style" => "color:red;", "id" => "1"]);
    img(["src" => "https://unpkg.com/outeres/demo/carousel/720x360-1.jpg"]);
};

$Template = new Template;

// 输出模板
file_put_contents("tpl.html", $Template->render($func));
