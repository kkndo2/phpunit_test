<?php
require_once './vendor/autoload.php';

try {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    echo "hi343";
    $apple = new Kkndo2\Apple();

    echo "end";
}
catch(Exception $e)
{
    $s = $e->getMessage() . ' (오류코드:' . $e->getCode() . ')';
    echo $s;
}
