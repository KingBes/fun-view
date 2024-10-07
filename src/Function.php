<?php

declare(strict_types=1);

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

/**
 * a function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function a(...$args): void
{
    Template::createTag("a", true, true, ...$args);
}

/**
 * abbr function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function abbr(...$args): void
{
    Template::createTag("abbr", true, true, ...$args);
}

/**
 * address function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function address(...$args): void
{
    Template::createTag("address", true, true, ...$args);
}

/**
 * area function
 *
 * @param array $attr 属性
 * @return void
 */
function area(array $attr = []): void
{
    Template::createTag("area", false, true, $attr);
}

/**
 * article function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function article(...$args): void
{
    Template::createTag("article", true, true, ...$args);
}

/**
 * aside function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function aside(...$args): void
{
    Template::createTag("aside", true, true, ...$args);
}

/**
 * figure function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function figure(...$args): void
{
    Template::createTag("figure", true, true, ...$args);
}

/**
 * figcaption function
 *
 * @param string $text
 * @return void
 */
function figcaption(string $text = ""): void
{
    Template::createTag("figcaption", true, true, $text);
}

/**
 * audio function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function audio(...$args): void
{
    Template::createTag("audio", true, true, ...$args);
}

/**
 * b function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function b(...$args): void
{
    Template::createTag("b", true, true, ...$args);
}

/**
 * base function
 *
 * @param array $attr
 * @return void
 */
function base(array $attr = []): void
{
    Template::createTag("base", false, true, $attr);
}

/**
 * bdi function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function bdi(...$args): void
{
    Template::createTag("bdi", true, true, ...$args);
}

/**
 * bdo function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function bdo(...$args): void
{
    Template::createTag("bdo", true, true, ...$args);
}

/**
 * blockquote function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function blockquote(...$args): void
{
    Template::createTag("blockquote", true, true, ...$args);
}

/**
 * br function
 *
 * @param array $attr
 * @return void
 */
function br(array $attr = []): void
{
    Template::createTag("br", false, true, $attr);
}

/**
 * button function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function button(...$args): void
{
    Template::createTag("button", true, true, ...$args);
}

/**
 * canvas function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function canvas(...$args): void
{
    Template::createTag("canvas", true, true, ...$args);
}

/**
 * caption function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function caption(...$args): void
{
    Template::createTag("caption", true, true, ...$args);
}

/**
 * cite function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function cite(...$args): void
{
    Template::createTag("cite", true, true, ...$args);
}

/**
 * code function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function code(...$args): void
{
    Template::createTag("code", true, true, ...$args);
}

/**
 * col function
 *
 * @param array $attr
 * @return void
 */
function col(array $attr = []): void
{
    Template::createTag("col", false, true, $attr);
}

/**
 * colgroup function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function colgroup(...$args): void
{
    Template::createTag("colgroup", true, true, ...$args);
}

/**
 * table function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function table(...$args): void
{
    Template::createTag("table", true, true, ...$args);
}

/**
 * data function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function data(...$args): void
{
    Template::createTag("data", true, true, ...$args);
}

/**
 * datalist function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function datalist(...$args): void
{
    Template::createTag("datalist", true, true, ...$args);
}

/**
 * option function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function option(...$args): void
{
    Template::createTag("option", true, true, ...$args);
}

/**
 * dd function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function dd(...$args): void
{
    Template::createTag("dd", true, true, ...$args);
}

/**
 * del function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function del(...$args): void
{
    Template::createTag("del", true, true, ...$args);
}

/**
 * details function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function details(...$args): void
{
    Template::createTag("details", true, true, ...$args);
}

/**
 * summary function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function summary(...$args): void
{
    Template::createTag("summary", true, true, ...$args);
}

/**
 * dfn function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function dfn(...$args): void
{
    Template::createTag("dfn", true, true, ...$args);
}

/**
 * dialog function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function dialog(...$args): void
{
    Template::createTag("dialog", true, true, ...$args);
}

/**
 * dl function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function dl(...$args): void
{
    Template::createTag("dl", true, true, ...$args);
}

/**
 * dt function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function dt(...$args): void
{
    Template::createTag("dt", true, true, ...$args);
}

/**
 * em function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function em(...$args): void
{
    Template::createTag("em", true, true, ...$args);
}

/**
 * embed function
 *
 * @param array $attr
 * @return void
 */
function embed(array $attr = []): void
{
    Template::createTag("embed", false, true, $attr);
}

/**
 * fencedframe function
 *
 * @param array $attr
 * @return void
 */
function fencedframe(array $attr = []): void
{
    Template::createTag("fencedframe", true, true, $attr);
}

/**
 * fieldset function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function fieldset(...$args): void
{
    Template::createTag("fieldset", true, true, ...$args);
}

/**
 * footer function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function footer(...$args): void
{
    Template::createTag("footer", true, true, ...$args);
}

/**
 * form function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function form(...$args): void
{
    Template::createTag("form", true, true, ...$args);
}

/**
 * header function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function header(...$args): void
{
    Template::createTag("header", true, true, ...$args);
}

/**
 * hgroup function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function hgroup(...$args): void
{
    Template::createTag("hgroup", true, true, ...$args);
}

/**
 * hr function
 *
 * @param array $attr
 * @return void
 */
function hr(array $attr = []): void
{
    Template::createTag("hr", false, true, $attr);
}

/**
 * i function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function i(...$args): void
{
    Template::createTag("i", true, true, ...$args);
}

/**
 * iframe function
 *
 * @param array $attr
 * @return void
 */
function iframe(array $attr = []): void
{
    Template::createTag("iframe", true, true, $attr);
}

/**
 * input function
 *
 * @param array $attr
 * @return void
 */
function input(array $attr = []): void
{
    Template::createTag("input", false, true, $attr);
}

/**
 * label function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function label(...$args): void
{
    Template::createTag("label", true, true, ...$args);
}

/**
 * ins function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function ins(...$args): void
{
    Template::createTag("ins", true, true, ...$args);
}

/**
 * kbd function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function kbd(...$args): void
{
    Template::createTag("kbd", true, true, ...$args);
}

/**
 * legend function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function legend(...$args): void
{
    Template::createTag("legend", true, true, ...$args);
}

/**
 * li function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function li(...$args): void
{
    Template::createTag("li", true, true, ...$args);
}

/**
 * ul function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function ul(...$args): void
{
    Template::createTag("ul", true, true, ...$args);
}

/**
 * main function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function main(...$args): void
{
    Template::createTag("main", true, true, ...$args);
}

/**
 * map function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function map(...$args): void
{
    Template::createTag("map", true, true, ...$args);
}

/**
 * mark function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function mark(...$args): void
{
    Template::createTag("mark", true, true, ...$args);
}

/**
 * menu function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function menu(...$args): void
{
    Template::createTag("menu", true, true, ...$args);
}

/**
 * meter function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function meter(...$args): void
{
    Template::createTag("meter", true, true, ...$args);
}

/**
 * nav function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function nav(...$args): void
{
    Template::createTag("nav", true, true, ...$args);
}

/**
 * ol function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function ol(...$args): void
{
    Template::createTag("ol", true, true, ...$args);
}

/**
 * noscript function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function noscript(...$args): void
{
    Template::createTag("noscript", true, true, ...$args);
}

/**
 * object function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function object(...$args): void
{
    Template::createTag("object", true, true, ...$args);
}

/**
 * optgroup function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function optgroup(...$args): void
{
    Template::createTag("optgroup", true, true, ...$args);
}

/**
 * output function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function output(...$args): void
{
    Template::createTag("output", true, true, ...$args);
}

/**
 * p function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function p(...$args): void
{
    Template::createTag("p", true, true, ...$args);
}

/**
 * picture function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function picture(...$args): void
{
    Template::createTag("picture", true, true, ...$args);
}

/**
 * source function
 *
 * @param array $attr
 * @return void
 */
function source(array $attr = []): void
{
    Template::createTag("source", false, true, $attr);
}

/**
 * portal function (实验性)
 *
 * @param array $attr
 * @return void
 */
function portal(array $attr = []): void
{
    Template::createTag("portal", false, true, $attr);
}

/**
 * pre function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function pre(...$args): void
{
    Template::createTag("pre", true, true, ...$args);
}

/**
 * progress function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function progress(...$args): void
{
    Template::createTag("progress", true, true, ...$args);
}

/**
 * q function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function q(...$args): void
{
    Template::createTag("q", true, true, ...$args);
}

/**
 * rp function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function rp(...$args): void
{
    Template::createTag("rp", true, true, ...$args);
}

/**
 * rt function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function rt(...$args): void
{
    Template::createTag("rt", true, true, ...$args);
}

/**
 * ruby function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function ruby(...$args): void
{
    Template::createTag("ruby", true, true, ...$args);
}

/**
 * s function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function s(...$args): void
{
    Template::createTag("s", true, true, ...$args);
}

/**
 * samp function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function samp(...$args): void
{
    Template::createTag("samp", true, true, ...$args);
}

/**
 * search function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function search(...$args): void
{
    Template::createTag("search", true, true, ...$args);
}

/**
 * section function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function section(...$args): void
{
    Template::createTag("section", true, true, ...$args);
}

/**
 * select function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function select(...$args): void
{
    Template::createTag("select", true, true, ...$args);
}

/**
 * slot function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function slot(...$args): void
{
    Template::createTag("slot", true, true, ...$args);
}

/**
 * small function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function small(...$args): void
{
    Template::createTag("small", true, true, ...$args);
}

/**
 * strong function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function strong(...$args): void
{
    Template::createTag("strong", true, true, ...$args);
}

/**
 * style function
 *
 * @param array $css 数组
 * @return void
 */
function style(array $css): void
{
    Template::render("<style>" . Template::arrayToCss($css) . "<style>");
}

/**
 * sub function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function sub(...$args): void
{
    Template::createTag("sub", true, true, ...$args);
}

/**
 * sup function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function sup(...$args): void
{
    Template::createTag("sup", true, true, ...$args);
}

/**
 * tbody function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function tbody(...$args): void
{
    Template::createTag("tbody", true, true, ...$args);
}

/**
 * td function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function td(...$args): void
{
    Template::createTag("td", true, true, ...$args);
}

/**
 * template function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function template(...$args): void
{
    Template::createTag("template", true, true, ...$args);
}

/**
 * textarea function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function textarea(...$args): void
{
    Template::createTag("textarea", true, true, ...$args);
}

/**
 * tfoot function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function tfoot(...$args): void
{
    Template::createTag("tfoot", true, true, ...$args);
}

/**
 * th function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function th(...$args): void
{
    Template::createTag("th", true, true, ...$args);
}

/**
 * thead function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function thead(...$args): void
{
    Template::createTag("thead", true, true, ...$args);
}

/**
 * time function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function time(...$args): void
{
    Template::createTag("time", true, true, ...$args);
}

/**
 * tr function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function tr(...$args): void
{
    Template::createTag("tr", true, true, ...$args);
}

/**
 * track function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function track(...$args): void
{
    Template::createTag("track", true, true, ...$args);
}

/**
 * u function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function u(...$args): void
{
    Template::createTag("u", true, true, ...$args);
}

/**
 * video function
 *
 * @param [string|array|callable] ...$args
 * @return void
 */
function video(...$args): void
{
    Template::createTag("video", true, true, ...$args);
}

/**
 * wbr function
 *
 * @param array $attr
 * @return void
 */
function wbr($attr = []): void
{
    Template::createTag("wbr", false, true, $attr);
}
