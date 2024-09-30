# FunView

💎 函 数 式 模 板 引 擎 。Function View Template.

### 示例

```php
require "../vendor/autoload.php";

use Kingbes\FunView\Template;

use function Kingbes\FunView\h1; // h1标签
use function Kingbes\FunView\span; // span标签
use function Kingbes\FunView\img; // img标签
use function Kingbes\FunView\head;
use function Kingbes\FunView\body;
use function Kingbes\FunView\title;
use function Kingbes\FunView\meta;
use function Kingbes\FunView\div;
use function Kingbes\FunView\script;

/**
 * 视图
 */
echo Template::fetch(function () {

    head(function () {
        meta(["charset" => "UTF-8"]);
        meta([
            "name" => "viewport",
            "content" => "width=device-width, initial-scale=1.0"
        ]);
        title("fun-viee");
    });

    body(function () {

        h1("下面是循环：");

        for ($i = 0; $i < 5; $i++) {
            div("循环：$i");
        }

        h1("hello", function () {
            span("world");
            span("->php");
        });

        h1("world", ["style" => "color:red;", "id" => "1"]);
        img(["src" => "https://unpkg.com/outeres/demo/carousel/720x360-1.jpg"]);
        script('alert("hello");');
    });
});
```

结果:

```html
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fun-viee</title>
</head>

<body>
    <h1>下面是循环：</h1>
    <div>循环：0</div>
    <div>循环：1</div>
    <div>循环：2</div>
    <div>循环：3</div>
    <div>循环：4</div>
    <h1>hello<span>world</span><span>-&gt;php</span></h1>
    <h1 style="color:red;" id="1">world</h1><img src="https://unpkg.com/outeres/demo/carousel/720x360-1.jpg">
    <script>alert("hello");</script>
</body>

</html>
```

