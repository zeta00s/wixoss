<?php

require_once '../prefarence.php';
require_once '/home/zeta00s/zeta00s.php.xdomain.jp/public_html/wixoss/class/phpunit.phar';

//use PHPUnit_Framework_TestCase;

class Example
{
    private $var;

    public function __construct()
    {
        //$this->goutte_client = new Client();
    }
}

class ExampleTest extends PHPUnit_Framework_TestCase
{

}

$exam = new Example();
var_dump($exam);
print '<br><br>';
$exam_test = new ExampleTest();
var_dump($exam_test);
