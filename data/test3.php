<?php
require_once '../prefarence.php';


$html = File_Stream::getContents($ini['test_url']);

//if(!preg_match('#<body>(.*?)</body>#s', $html, $body_text))
if(!preg_match('#<div class="card_detail">(.*)</div>#s', $html, $card_detail))
{
	print 'not<br>';
	exit;
}

print $card_detail[1];

if(preg_match(
		'#<div class="card_detail_title">.*?<p>(.*?)</p>.*?<h3>(.*?)<span class="card_detail_kana">＜(.*?)＞</span></h3>.*?</div>#s',
		 $card_detail[1], $card_names))
{

}





//$card_test = DOMDocument::loadHTML($html_test);

