<?php

namespace Kingbes\FunView;

use Kingbes\FunView\Template;

/**
 * head标签 function
 *
 * @param callable $callable 函数内容
 * @return void
 */
function head(callable $callable): void
{
    Template::createTag("head", true, true, $callable);
}

/**
 * meta标签 function
 *
 * @param array $attr 属性数组
 * @return void
 */
function meta(array $attr = []): void
{
    Template::createTag("meta", false, true, $attr);
}

/**
 * 标题 function
 *
 * @param string $text 文本内容
 * @return void
 */
function title(string $text = ""): void
{
    Template::createTag("title", true, true, $text);
}

/**
 * link function
 *
 * @param array $attr 属性数组
 * @return void
 */
function link(array $attr = []): void
{
    Template::createTag("link", false, true, $attr);
}

/**
 * script function
 *
 * @param array $args
 * @return void
 */
function script(...$args): void
{
    Template::createTag("script", true, false, ...$args);
}

/**
 * body function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function body(...$args): void
{
    Template::createTag("body", true, true, ...$args);
}

/**
 * span function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function span(...$args): void
{
    Template::createTag("span", true, true, ...$args);
}

/**
 * h1 function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function h1(...$args): void
{
    Template::createTag("h1", true, true, ...$args);
}

/**
 * h2 function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function h2(...$args): void
{
    Template::createTag("h2", true, true, ...$args);
}

/**
 * h3 function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function h3(...$args): void
{
    Template::createTag("h3", true, true, ...$args);
}
/**
 * h4 function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function h4(...$args): void
{
    Template::createTag("h4", true, true, ...$args);
}

/**
 * h5 function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function h5(...$args): void
{
    Template::createTag("h5", true, true, ...$args);
}

/**
 * h6 function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function h6(...$args): void
{
    Template::createTag("h6", true, true, ...$args);
}

/**
 * img function
 *
 * @param array $attr 属性数组
 * @return void
 */
function img(array $attr = []): void
{
    Template::createTag("img", false, true, $attr);
}

/**
 * div function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function div(...$args): void
{
    Template::createTag("div", true, true, ...$args);
}
