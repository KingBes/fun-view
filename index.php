<?php

declare(strict_types=1);

require "vendor/autoload.php";

use Kingbes\FunView\Template;

use function Kingbes\FunView\h1; // h1标签
use function Kingbes\FunView\span; // span标签
use function Kingbes\FunView\img; // img标签

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
echo $Template->render($func);
// file_put_contents("tpl.html", );

