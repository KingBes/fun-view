# BangPHP
区 别 于 传 统 的 MVC PHP 框 架 ，因 为 你 用 起 来 会 bang bang bang。

Different from the traditional MVC PHP frame, because you use it will bang bang bang.

## 基础

### 开发规范

> 请理解并尽量遵循以下命名规范，可以减少在开发过程中出现不必要的错误。

`BangPHP`遵循 `PSR-2` 命名规范和 `PSR-4` 自动加载规范，并且注意如下规范：

...

### 目录结构

```
www                 web部署目录
├─app               应用目录
│  ├─model          模型目录
│  ├─routes         路由目录
│  │  ├─Server.php  服务文件
│  │  ├─...         更多文件
│  │  └─page.html   视图文件
│  │  │
│  ├─static         静态文件目录
│  ├─ ...           更多类库目录
│  │
│  └─function.php   公共函数文件
│
├─config            配置目录
│  ├─app.php        应用配置
│  └─ ...           开发中...
│  
├─runtime           应用的运行时目录（可写，可定制）
├─vendor            Composer类库目录
├─composer.json     composer 定义文件
├─LICENSE.txt       授权说明文件
├─README.md         README 文件
├─index.php         入口执行文件
```

## 架构

### 请求流程


