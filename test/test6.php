<?php

require_once '../prefarence.php';

$string = '花代/ユズキ';
$array = explode('/', $string);
var_dump($array);
print '<br>';
$string = implode('/', $array);
var_dump($string);
print '<br>';

$string = '';
$array = explode('/', $string);
var_dump($array);
print '<br>';
$string = implode('/', $array);
var_dump($string);
print '<br>';

$string = implode('/', array());
var_dump($string);
print '<br>';

print '<br>next<br><br>';

$string = '  花代/      ユズキ     ';
$array = array_map(function($str){return trim($str);}, explode('/', $string));
var_dump($array);
print '<br>end';
