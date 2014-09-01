<?php
require_once '../prefarence.php';

class num extends Enum
{
	const ONE = 1;
	const TWO = 2;
}

class test
{
	private $number;
	public function getNumber() {return $this->number;}
	public function setNumber(num $value) {$this->number = $value;}
}





print 'case 1<br>';
$num = 1;
print '$num = 1;';
print '<br>';
var_dump($num);
print '<br><br>';

print 'case 2<br>';
$num = num::ONE;
print '$num = num::ONE;';
print '<br>';
var_dump($num);
print '<br><br>';

print 'case 2 - 2<br>';
$num = num::ONE();
print '$num = num::ONE();';
print '<br>';
var_dump($num);
print '<br><br>';

print 'case 3<br>';
$num = new num(1);
print '$num = new num(1);';
print '<br>';
var_dump($num);
print '<br><br>';

print 'case 4<br>';
$num = new num(num::ONE);
print '$num = new num(num::ONE);';
print '<br>';
var_dump($num);
print '<br><br>';

print 'case 5<br>';
$test = new test();
print '$test = new test();';
print '<br>';
var_dump($test);
print '<br><br>';

print 'case 6<br>';
// $test->setNumber(1);
 print '$test->setNumber(1);';
// print '<br>';
// var_dump($test);
print '<br><br>';

print 'case 7<br>';
// $test->setNumber(num::ONE);
print '$test->setNumber(num::ONE);';
// print '<br>';
// var_dump($test);
print '<br><br>';

print 'case 7 - 2<br>';
$test->setNumber(num::ONE());
print '$test->setNumber(num::ONE());';
print '<br>';
var_dump($test);
print '<br><br>';

print 'case 8<br>';
$test->setNumber(new num(1));
print '$test->setNumber(new num(1));';
print '<br>';
var_dump($test);
print '<br><br>';

print 'case 9<br>';
$test->setNumber(new num(num::ONE));
print '$test->setNumber(new num(num::ONE));';
print '<br>';
var_dump($test);
print '<br><br>';

print 'case 10<br>';
// $num = new num(3);
print '$num = new num(3)';
// print '<br>';
// var_dump($num);
print '<br><br>';

print 'case 11<br>';
// $test->setNumber(3);
print '$test->setNumber(3);';
// print '<br>';
// var_dump($test);
print '<br><br>';

print 'case 12<br>';
// $test->setNumber(new num(3));
print '$test->setNumber(new num(3));';
// print '<br>';
// var_dump($test);
print '<br><br>';





print '<br>next<br><br>';

if ($test->getNumber() == num::ONE()) {print '$test->getNumber() == num::ONE()';}
print '<br>';
if ($test->getNumber() == 1) {print '$test->getNumber() == 1';}
print '<br>';





print '<br>next<br><br>';

$num = new num(num::ONE);
echo '$num: ' . $num;
print '<br>';

$ref = new ReflectionObject($num);
$consts = $ref->getConstants();
var_dump($consts);
print '<br>';

class propClass {public $prop = 'propValue';}
$prop_class = new propClass();
$property_name = 'prop';
print $prop_class->$property_name;
print '<br>';

$num = num::ONE();
print $num;

print '<br>end';

