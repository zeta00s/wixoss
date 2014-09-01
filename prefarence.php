<?php

//require_once '../class/goutte.phar';

$ini = parse_ini_file('config.ini');

function __autoload($className)
{
	$filePath = '/home/zeta00s/zeta00s.php.xdomain.jp/public_html/wixoss/class/'
			 . str_replace('_', '/', $className) . '.php';
	require_once $filePath;
}