<?php

require_once __DIR__. '/vender/autoload.php';

use App\Controllers\TestController;

$app = new TestController;
$app -> run();

use Carbon\Carbon;
