<?php

declare(strict_types=1);

require "vendor/autoload.php";

use Kingbes\Bang\Template;

use function Kingbes\Bang\h1;
use function Kingbes\Bang\span;

/**
 * 视图
 */
$func = function () {

    h1("hello", function () {
        span("world");
        span("->php");
    });

    h1("world", ["style" => "color:red;", "id" => "1"]);
    h1();
};

$Template = new Template;

// 输出模板
file_put_contents("tpl.html", $Template->render($func));
