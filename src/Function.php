<?php

declare(strict_types=1);

namespace Kingbes\FunView;

use Kingbes\FunView\Tags;

/**
 * 安全输出 function
 *
 * @param integer|string $text
 * @return string
 */
function hsc(int|string $text): string
{
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

/**
 * html标签 function
 *
 * @param mixed ...$args
 * @return void
 */
function html(mixed ...$args): void
{
    echo "<!DOCTYPE html>";
    echo Tags::__callStatic("html", $args);
}

/**
 * head标签 function
 *
 * @param mixed ...$args
 * @return string
 */
function head(mixed ...$args): string
{
    return Tags::__callStatic("head", $args);
}

/**
 * meta标签 function
 *
 * @param array $attr 属性数组
 * @return string
 */
function meta(array $attr = []): string
{
    return Tags::__callStatic("meta", [$attr]);
}

/**
 * 标题 function
 *
 * @param mixed $args 文本内容
 * @return string
 */
function title(mixed ...$args): string
{
    return Tags::__callStatic("title", $args);
}

/**
 * link function
 *
 * @param array $attr 属性数组
 * @return string
 */
function link(array $attr = []): string
{
    return Tags::__callStatic("link", [$attr]);
}

/**
 * script function
 *
 * @param mixed $args
 * @return string
 */
function script(...$args): string
{
    return Tags::__callStatic("script", $args);
}

/**
 * body function
 *
 * @param [mixed] ...$args
 * @return string
 */
function body(mixed ...$args): string
{
    return Tags::__callStatic("body", $args);
}

/**
 * span function
 *
 * @param [mixed] ...$args
 * @return string
 */
function span(mixed ...$args): string
{
    return Tags::__callStatic("span", $args);
}

/**
 * h1 function
 *
 * @param [mixed] ...$args
 * @return string
 */
function h1(mixed ...$args): string
{
    return Tags::__callStatic("h1", $args);
}

/**
 * h2 function
 *
 * @param [mixed] ...$args
 * @return string
 */
function h2(mixed ...$args): string
{
    return Tags::__callStatic("h2", $args);
}

/**
 * h3 function
 *
 * @param [mixed] ...$args
 * @return string
 */
function h3(mixed ...$args): string
{
    return Tags::__callStatic("h3", $args);
}
/**
 * h4 function
 *
 * @param [mixed] ...$args
 * @return string
 */
function h4(mixed ...$args): string
{
    return Tags::__callStatic("h4", $args);
}

/**
 * h5 function
 *
 * @param [mixed] ...$args
 * @return string
 */
function h5(mixed ...$args): string
{
    return Tags::__callStatic("h5", $args);
}

/**
 * h6 function
 *
 * @param [mixed] ...$args
 * @return string
 */
function h6(mixed ...$args): string
{
    return Tags::__callStatic("h6", $args);
}

/**
 * img function
 *
 * @param array $attr 属性数组
 * @return string
 */
function img(array $attr = []): string
{
    return Tags::__callStatic("img", [$attr]);
}

/**
 * div function
 *
 * @param [mixed] ...$args
 * @return string
 */
function div(mixed ...$args): string
{
    return Tags::__callStatic("div", $args);
}

/**
 * a function
 *
 * @param [mixed] ...$args
 * @return string
 */
function a(mixed ...$args): string
{
    return Tags::__callStatic("a", $args);
}

/**
 * abbr function
 *
 * @param [mixed] ...$args
 * @return string
 */
function abbr(mixed ...$args): string
{
    return Tags::__callStatic("abbr", $args);
}

/**
 * address function
 *
 * @param [mixed] ...$args
 * @return string
 */
function address(mixed ...$args): string
{
    return Tags::__callStatic("address", $args);
}

/**
 * area function
 *
 * @param array $attr 属性
 * @return string
 */
function area(array $attr = []): string
{
    return Tags::__callStatic("area", [$attr]);
}

/**
 * article function
 *
 * @param [mixed] ...$args
 * @return string
 */
function article(mixed ...$args): string
{
    return Tags::__callStatic("article", $args);
}

/**
 * aside function
 *
 * @param [mixed] ...$args
 * @return string
 */
function aside(mixed ...$args): string
{
    return Tags::__callStatic("aside", $args);
}

/**
 * figure function
 *
 * @param [mixed] ...$args
 * @return string
 */
function figure(mixed ...$args): string
{
    return Tags::__callStatic("figure", $args);
}

/**
 * figcaption function
 *
 * @param string $text
 * @return string
 */
function figcaption(string $text = ""): string
{
    return Tags::__callStatic("figcaption", [$text]);
}

/**
 * audio function
 *
 * @param [mixed] ...$args
 * @return string
 */
function audio(mixed ...$args): string
{
    return Tags::__callStatic("audio", $args);
}

/**
 * b function
 *
 * @param [mixed] ...$args
 * @return string
 */
function b(mixed ...$args): string
{
    return Tags::__callStatic("b", $args);
}

/**
 * base function
 *
 * @param array $attr
 * @return string
 */
function base(array $attr = []): string
{
    return Tags::__callStatic("base", [$attr]);
}

/**
 * bdi function
 *
 * @param [mixed] ...$args
 * @return string
 */
function bdi(mixed ...$args): string
{
    return Tags::__callStatic("bdi", $args);
}

/**
 * bdo function
 *
 * @param [mixed] ...$args
 * @return string
 */
function bdo(mixed ...$args): string
{
    return Tags::__callStatic("bdo", $args);
}

/**
 * blockquote function
 *
 * @param [mixed] ...$args
 * @return string
 */
function blockquote(mixed ...$args): string
{
    return Tags::__callStatic("blockquote", $args);
}

/**
 * br function
 *
 * @param array $attr
 * @return string
 */
function br(array $attr = []): string
{
    return Tags::__callStatic("br", [$attr]);
}

/**
 * button function
 *
 * @param [mixed] ...$args
 * @return string
 */
function button(mixed ...$args): string
{
    return Tags::__callStatic("button", $args);
}

/**
 * canvas function
 *
 * @param [mixed] ...$args
 * @return string
 */
function canvas(mixed ...$args): string
{
    return Tags::__callStatic("canvas", $args);
}

/**
 * caption function
 *
 * @param [mixed] ...$args
 * @return string
 */
function caption(mixed ...$args): string
{
    return Tags::__callStatic("caption", $args);
}

/**
 * cite function
 *
 * @param [mixed] ...$args
 * @return string
 */
function cite(mixed ...$args): string
{
    return Tags::__callStatic("cite", $args);
}

/**
 * code function
 *
 * @param [mixed] ...$args
 * @return string
 */
function code(mixed ...$args): string
{
    return Tags::__callStatic("code", $args);
}

/**
 * col function
 *
 * @param array $attr
 * @return string
 */
function col(array $attr = []): string
{
    return Tags::__callStatic("col", [$attr]);
}

/**
 * colgroup function
 *
 * @param [mixed] ...$args
 * @return string
 */
function colgroup(mixed ...$args): string
{
    return Tags::__callStatic("colgroup", $args);
}

/**
 * table function
 *
 * @param [mixed] ...$args
 * @return string
 */
function table(mixed ...$args): string
{
    return Tags::__callStatic("table", $args);
}

/**
 * data function
 *
 * @param [mixed] ...$args
 * @return string
 */
function data(mixed ...$args): string
{
    return Tags::__callStatic("data", $args);
}

/**
 * datalist function
 *
 * @param [mixed] ...$args
 * @return string
 */
function datalist(mixed ...$args): string
{
    return Tags::__callStatic("datalist", $args);
}

/**
 * option function
 *
 * @param [mixed] ...$args
 * @return string
 */
function option(mixed ...$args): string
{
    return Tags::__callStatic("option", $args);
}

/**
 * dd function
 *
 * @param [mixed] ...$args
 * @return string
 */
function dd(mixed ...$args): string
{
    return Tags::__callStatic("dd", $args);
}

/**
 * del function
 *
 * @param [mixed] ...$args
 * @return string
 */
function del(mixed ...$args): string
{
    return Tags::__callStatic("del", $args);
}

/**
 * details function
 *
 * @param [mixed] ...$args
 * @return string
 */
function details(mixed ...$args): string
{
    return Tags::__callStatic("details", $args);
}

/**
 * summary function
 *
 * @param [mixed] ...$args
 * @return string
 */
function summary(mixed ...$args): string
{
    return Tags::__callStatic("summary", $args);
}

/**
 * dfn function
 *
 * @param [mixed] ...$args
 * @return string
 */
function dfn(mixed ...$args): string
{
    return Tags::__callStatic("dfn", $args);
}

/**
 * dialog function
 *
 * @param [mixed] ...$args
 * @return string
 */
function dialog(mixed ...$args): string
{
    return Tags::__callStatic("dialog", $args);
}

/**
 * dl function
 *
 * @param [mixed] ...$args
 * @return string
 */
function dl(mixed ...$args): string
{
    return Tags::__callStatic("dl", $args);
}

/**
 * dt function
 *
 * @param [mixed] ...$args
 * @return string
 */
function dt(mixed ...$args): string
{
    return Tags::__callStatic("dt", $args);
}

/**
 * em function
 *
 * @param [mixed] ...$args
 * @return string
 */
function em(mixed ...$args): string
{
    return Tags::__callStatic("em", $args);
}

/**
 * embed function
 *
 * @param array $attr
 * @return string
 */
function embed(array $attr = []): string
{
    return Tags::__callStatic("embed", [$attr]);
}

/**
 * fencedframe function
 *
 * @param array $attr
 * @return string
 */
function fencedframe(array $attr = []): string
{
    return Tags::__callStatic("fencedframe", [$attr]);
}

/**
 * fieldset function
 *
 * @param [mixed] ...$args
 * @return string
 */
function fieldset(mixed ...$args): string
{
    return Tags::__callStatic("fieldset", $args);
}

/**
 * footer function
 *
 * @param mixed|mixed ...$args
 * @return string
 */
function footer(mixed ...$args): string
{
    return Tags::__callStatic("footer", $args);
}

/**
 * form function
 *
 * @param [mixed] ...$args
 * @return string
 */
function form(mixed ...$args): string
{
    return Tags::__callStatic("form", $args);
}

/**
 * header function
 *
 * @param [mixed] ...$args
 * @return string
 */
function header(mixed ...$args): string
{
    return Tags::__callStatic("header", $args);
}

/**
 * hgroup function
 *
 * @param [mixed] ...$args
 * @return string
 */
function hgroup(mixed ...$args): string
{
    return Tags::__callStatic("hgroup", $args);
}

/**
 * hr function
 *
 * @param array $attr
 * @return string
 */
function hr(array $attr = []): string
{
    return Tags::__callStatic("hr", [$attr]);
}

/**
 * i function
 *
 * @param [mixed] ...$args
 * @return string
 */
function i(mixed ...$args): string
{
    return Tags::__callStatic("i", $args);
}

/**
 * iframe function
 *
 * @param array $attr
 * @return string
 */
function iframe(array $attr = []): string
{
    return Tags::__callStatic("iframe", [$attr]);
}

/**
 * input function
 *
 * @param array $attr
 * @return string
 */
function input(array $attr = []): string
{
    return Tags::__callStatic("input", [$attr]);
}

/**
 * label function
 *
 * @param [mixed] ...$args
 * @return string
 */
function label(mixed ...$args): string
{
    return Tags::__callStatic("label", $args);
}

/**
 * ins function
 *
 * @param [mixed] ...$args
 * @return string
 */
function ins(mixed ...$args): string
{
    return Tags::__callStatic("ins", $args);
}

/**
 * kbd function
 *
 * @param [mixed] ...$args
 * @return string
 */
function kbd(mixed ...$args): string
{
    return Tags::__callStatic("kbd", $args);
}

/**
 * legend function
 *
 * @param [mixed] ...$args
 * @return string
 */
function legend(mixed ...$args): string
{
    return Tags::__callStatic("legend", $args);
}

/**
 * li function
 *
 * @param [mixed] ...$args
 * @return string
 */
function li(mixed ...$args): string
{
    return Tags::__callStatic("li", $args);
}

/**
 * ul function
 *
 * @param [mixed] ...$args
 * @return string
 */
function ul(mixed ...$args): string
{
    return Tags::__callStatic("ul", $args);
}

/**
 * main function
 *
 * @param [mixed] ...$args
 * @return string
 */
function main(mixed ...$args): string
{
    return Tags::__callStatic("main", $args);
}

/**
 * map function
 *
 * @param [mixed] ...$args
 * @return string
 */
function map(mixed ...$args): string
{
    return Tags::__callStatic("map", $args);
}

/**
 * mark function
 *
 * @param [mixed] ...$args
 * @return string
 */
function mark(mixed ...$args): string
{
    return Tags::__callStatic("mark", $args);
}

/**
 * menu function
 *
 * @param [mixed] ...$args
 * @return string
 */
function menu(mixed ...$args): string
{
    return Tags::__callStatic("menu", $args);
}

/**
 * meter function
 *
 * @param [mixed] ...$args
 * @return string
 */
function meter(mixed ...$args): string
{
    return Tags::__callStatic("meter", $args);
}

/**
 * nav function
 *
 * @param [mixed] ...$args
 * @return string
 */
function nav(mixed ...$args): string
{
    return Tags::__callStatic("nav", $args);
}

/**
 * ol function
 *
 * @param [mixed] ...$args
 * @return string
 */
function ol(mixed ...$args): string
{
    return Tags::__callStatic("ol", $args);
}

/**
 * noscript function
 *
 * @param [mixed] ...$args
 * @return string
 */
function noscript(mixed ...$args): string
{
    return Tags::__callStatic("noscript", $args);
}

/**
 * object function
 *
 * @param [mixed] ...$args
 * @return string
 */
function object(mixed ...$args): string
{
    return Tags::__callStatic("object", $args);
}

/**
 * optgroup function
 *
 * @param [mixed] ...$args
 * @return string
 */
function optgroup(mixed ...$args): string
{
    return Tags::__callStatic("optgroup", $args);
}

/**
 * output function
 *
 * @param [mixed] ...$args
 * @return string
 */
function output(mixed ...$args): string
{
    return Tags::__callStatic("output", $args);
}

/**
 * p function
 *
 * @param [mixed] ...$args
 * @return string
 */
function p(mixed ...$args): string
{
    return Tags::__callStatic("p", $args);
}

/**
 * picture function
 *
 * @param [mixed] ...$args
 * @return string
 */
function picture(mixed ...$args): string
{
    return Tags::__callStatic("picture", $args);
}

/**
 * source function
 *
 * @param array $attr
 * @return string
 */
function source(array $attr = []): string
{
    return Tags::__callStatic("source", [$attr]);
}

/**
 * portal function (实验性)
 *
 * @param array $attr
 * @return string
 */
function portal(array $attr = []): string
{
    return Tags::__callStatic("portal", [$attr]);
}

/**
 * pre function
 *
 * @param [mixed] ...$args
 * @return string
 */
function pre(mixed ...$args): string
{
    return Tags::__callStatic("pre", $args);
}

/**
 * progress function
 *
 * @param [mixed] ...$args
 * @return string
 */
function progress(mixed ...$args): string
{
    return Tags::__callStatic("progress", $args);
}

/**
 * q function
 *
 * @param [mixed] ...$args
 * @return string
 */
function q(mixed ...$args): string
{
    return Tags::__callStatic("q", $args);
}

/**
 * rp function
 *
 * @param [mixed] ...$args
 * @return string
 */
function rp(mixed ...$args): string
{
    return Tags::__callStatic("rp", $args);
}

/**
 * rt function
 *
 * @param [mixed] ...$args
 * @return string
 */
function rt(mixed ...$args): string
{
    return Tags::__callStatic("rt", $args);
}

/**
 * ruby function
 *
 * @param [mixed] ...$args
 * @return string
 */
function ruby(mixed ...$args): string
{
    return Tags::__callStatic("ruby", $args);
}

/**
 * s function
 *
 * @param [mixed] ...$args
 * @return string
 */
function s(mixed ...$args): string
{
    return Tags::__callStatic("s", $args);
}

/**
 * samp function
 *
 * @param [mixed] ...$args
 * @return string
 */
function samp(mixed ...$args): string
{
    return Tags::__callStatic("samp", $args);
}

/**
 * search function
 *
 * @param [mixed] ...$args
 * @return string
 */
function search(mixed ...$args): string
{
    return Tags::__callStatic("search", $args);
}

/**
 * section function
 *
 * @param [mixed] ...$args
 * @return string
 */
function section(mixed ...$args): string
{
    return Tags::__callStatic("section", $args);
}

/**
 * select function
 *
 * @param [mixed] ...$args
 * @return string
 */
function select(mixed ...$args): string
{
    return Tags::__callStatic("select", $args);
}

/**
 * slot function
 *
 * @param [mixed] ...$args
 * @return string
 */
function slot(mixed ...$args): string
{
    return Tags::__callStatic("slot", $args);
}

/**
 * small function
 *
 * @param [mixed] ...$args
 * @return string
 */
function small(mixed ...$args): string
{
    return Tags::__callStatic("small", $args);
}

/**
 * strong function
 *
 * @param [mixed] ...$args
 * @return string
 */
function strong(mixed ...$args): string
{
    return Tags::__callStatic("strong", $args);
}

/**
 * style function
 *
 * @param array $css 数组
 * @return string
 */
function style(array $css): string
{
    return "<style>" . Tags::arrayToCss($css) . "</style>";
}

/**
 * sub function
 *
 * @param [mixed] ...$args
 * @return string
 */
function sub(mixed ...$args): string
{
    return Tags::__callStatic("sub", $args);
}

/**
 * sup function
 *
 * @param [mixed] ...$args
 * @return string
 */
function sup(mixed ...$args): string
{
    return Tags::__callStatic("sup", $args);
}

/**
 * tbody function
 *
 * @param [mixed] ...$args
 * @return string
 */
function tbody(mixed ...$args): string
{
    return Tags::__callStatic("tbody", $args);
}

/**
 * td function
 *
 * @param [mixed] ...$args
 * @return string
 */
function td(mixed ...$args): string
{
    return Tags::__callStatic("td", $args);
}

/**
 * template function
 *
 * @param [mixed] ...$args
 * @return string
 */
function template(mixed ...$args): string
{
    return Tags::__callStatic("template", $args);
}

/**
 * textarea function
 *
 * @param [mixed] ...$args
 * @return string
 */
function textarea(mixed ...$args): string
{
    return Tags::__callStatic("textarea", $args);
}

/**
 * tfoot function
 *
 * @param [mixed] ...$args
 * @return string
 */
function tfoot(mixed ...$args): string
{
    return Tags::__callStatic("tfoot", $args);
}

/**
 * th function
 *
 * @param [mixed] ...$args
 * @return string
 */
function th(mixed ...$args): string
{
    return Tags::__callStatic("th", $args);
}

/**
 * thead function
 *
 * @param [mixed] ...$args
 * @return string
 */
function thead(mixed ...$args): string
{
    return Tags::__callStatic("thead", $args);
}

/**
 * time function
 *
 * @param [mixed] ...$args
 * @return string
 */
function time(mixed ...$args): string
{
    return Tags::__callStatic("time", $args);
}

/**
 * tr function
 *
 * @param [mixed] ...$args
 * @return string
 */
function tr(mixed ...$args): string
{
    return Tags::__callStatic("tr", $args);
}

/**
 * track function
 *
 * @param [mixed] ...$args
 * @return string
 */
function track(mixed ...$args): string
{
    return Tags::__callStatic("track", $args);
}

/**
 * u function
 *
 * @param [mixed] ...$args
 * @return string
 */
function u(mixed ...$args): string
{
    return Tags::__callStatic("u", $args);
}

/**
 * video function
 *
 * @param [mixed] ...$args
 * @return string
 */
function video(mixed ...$args): string
{
    return Tags::__callStatic("video", $args);
}

/**
 * wbr function
 *
 * @param array $attr
 * @return string
 */
function wbr($attr = []): string
{
    return Tags::__callStatic("wbr", [$attr]);
}
