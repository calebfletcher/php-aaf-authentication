<?php

function exception_handler($exception) {
    echo get_class($exception) . ": " . $exception->getMessage();
}
set_exception_handler('exception_handler');

require_once __DIR__ . "/config.php";
require_once __DIR__ . "/../vendor/autoload.php";
