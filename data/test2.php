<?php

require_once '../prefarence.php';

$html = File_Stream::getContents($ini['test_url']);

//var_dump($ini['interval_access_time']);
//print '<br>';
print $html;
//print '<br><br><br><br><br><br><br><br><br><br><br>';


//$card_test = DOMDocument::loadHTML($html_test);

/* $domDocument = new DOMDocument();
$domDocument->loadHTML($html);
$xmlString = $domDocument->saveXML();
var_dump($xmlString);
$xmlObject = simplexml_load_string($xmlString);
var_dump($xmlObject);
 */