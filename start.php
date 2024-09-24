<?php

declare(strict_types=1);

require "vendor/autoload.php";

use app\bang\App;

(new App)->worker::runAll();
