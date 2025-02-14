# FunView

💎 函 数 式 模 板 引 擎 。Function View Template.

composer

```shell
composer require kingbes/fun-view
```

### 示例

```php
require "./vendor/autoload.php";

use Kingbes\FunView\Template;

// 内容
$tpl = new Template([
    // 模板目录
    "view_dir" =>  __DIR__ . DIRECTORY_SEPARATOR . "view" . DIRECTORY_SEPARATOR
]);

echo $tpl->fetch("index", ["num" => 3]);
```

index.php 模板：

```php
<?php

use function Kingbes\FunView\{
    p,
    hsc,
    html,
    h1,
    span,
    img,
    head,
    body,
    title,
    meta,
    div,
    style,
    script
};

$view = html(
    head(
        meta(["charset" => "UTF-8"]),
        meta([
            "name" => "viewport",
            "content" => "width=device-width, initial-scale=1.0"
        ]),
        title("这个是个标题"),
        style([
            "p" => [
                "color" => "blue",
            ]
        ])
    ),
    body(
        p("hello world"),
        h1("下面是循环<br/>："),
        div(function () use ($num) {
            $div = "";
            for ($i = 0; $i < $num; $i++) {
                $div .= div("循环：$i");
            }
            return $div;
        }),
        h1(
            "world",
            ["style" => "color:red;", "id" => "1"],
            span(" hello")
        ),
        img(["src" => "https://unpkg.com/outeres/demo/carousel/720x360-1.jpg"]),
        div(hsc("<h1>安全输出</h1>")),
        script("alert('hello world')")
    )
);
// 显示模板
echo $view;
```

结果:

```html
<!DOCTYPE html>
<html>

<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>这个是个标题</title>
        <style>
                p {
                        color: blue;
                }
        </style>
</head>

<body>
        <p>hello world</p>
        <h1>下面是循环<br />：</h1>
        <div>
                <div>循环：0</div>
                <div>循环：1</div>
                <div>循环：2</div>
        </div>
        <h1 style="color:red;" id="1">world<span> hello</span></h1><img
                src="https://unpkg.com/outeres/demo/carousel/720x360-1.jpg" />
        <div>&lt;h1&gt;安全输出&lt;/h1&gt;</div>
        <script>alert('hello world')</script>
</body>

</html>
```

## 助手

```php
use function Kingbes\FunView\hsc;

/**
 * 安全输出,htmlspecialchars用法 function
 *
 * @param integer|string $text
 * @return string
 */
function hsc(int|string $text): string
```

## 自定义标签

```php

use Kingbes\FunView\Tags;

function myview(mixed ...$args): string
{
    return Tags::__callStatic("myview", $args);
}
// <myview></myview> 标签
```

```php

function diyview($str):string
{
    return "<div id='diyview'>".$str."</div>";
}

```