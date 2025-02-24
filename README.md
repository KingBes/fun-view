# FunView

💎 函 数 式 模 板 引 擎 。Function View Template.

## 介绍

> FunView 是一个函数式模板引擎，它可以让你在 PHP 中使用函数式编程的方式来编写模板。

### 特点

- 支持布局模板；
- 支持函数式编程；
- 系统变量无需赋值直接输出；

### 要求

- PHP >= 8.1

## 安装配置

### 安装

通过`composer`安装即可

```shell
composer require kingbes/fun-view
```

## 配置

```php
$config = [
    // 模板目录
    'view_dir'      =>  './views/',
    // 模板布局
    'layout_name'   =>  'layout', //布局模板入口文件名称
    'layout_item'   =>  '__CONTENT__', //布局模板内容变量标识
];

$tpl = new \Kingbes\FunView\Template($config);
```

## 模板布局

`app/index/view/user/add.php`模板文件，`app/index/view/layout.php`布局模板文件，输出替换变量`__CONTENT__`,如果布局模板文件不存在则直接输出模板内容。布局模板文件可以递归到模板文件统计目录到模板目录`view_dir`同级目录。

```php
<?php

// app/index/view/layout.php
use function Kingbes\FunView\{
    html,
    head,
    body,
    title,
    meta,
    style,
    hsc
};

$view = html(
    head(
        meta(["charset" => "UTF-8"]),
        meta([
            "name" => "viewport",
            "content" => "width=device-width, initial-scale=1.0"
        ]),
        title(hsc($title ?? "")),
        style([
            "p" => [
                "color" => "blue",
            ]
        ])
    ),
    body($__CONTENT__)
);

echo $view;

```

```php
<?php
// app/index/view/user/add.php
use function Kingbes\FunView\{
    p,
    h1,
    div,
};

$view = div(
    p("hello world"),
    h1("hello world"));

echo $view;

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