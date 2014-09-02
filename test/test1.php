<?php

print 'これいらない。<br><br>';

$url = 'http://www.takaratomy.co.jp/products/wixoss/card/card_detail.php?id=251';
$conn = curl_init();
curl_setopt($conn, CURLOPT_URL, $url);
curl_setopt($conn, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($conn);
curl_close($conn);

$html_test = $result;

$card_test = DOMDocument::loadHTML($html_test);

print $html_test;

?>
