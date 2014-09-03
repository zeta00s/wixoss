<?php

$ini = parse_ini_file('config.ini');

function __autoload($class_name)
{
    $file_path =  '/home/zeta00s/zeta00s.php.xdomain.jp/public_html/wixoss/class/' . str_replace('_', '/', $class_name) . '.php';
    require_once $file_path;
}
