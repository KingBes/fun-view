<?php

namespace Kingbes\View;

use Kingbes\View\Template;

function span(...$args): void
{
    Template::createTag("span", true, ...$args);
}

function h1(...$args): void
{
    Template::createTag("h1", true, ...$args);
}

function img(...$args): void
{
    Template::createTag("img", false, ...$args);
}
