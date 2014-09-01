<?php

class Uri_Operator
{
	//http://logic.moo.jp/data/archives/501.html
	public static function makeUri($base = '', $rel_path = '')
	{
		$base = preg_replace('/\/[^\/]+$/', '/', $base);
		$parse = parse_url($base);
		if (preg_match('/^https\:\/\//',$rel_path)) {
			return $rel_path;
		} elseif (preg_match('/^\/.+/', $rel_path)) {
			$out = $parse['scheme'] . '://' . $parse['host'] . $rel_path;
			return $out;
		}
		$tmp = array();
		$a = array();
		$b = array();
		$tmp = split('/', $parse['path']);
		foreach ($tmp as $v) {
			if ($v) {array_push($a, $v);}
		}
		$b = split('/', $rel_path);
		foreach ($b as $v) {
			if (strcmp($v, '') == 0) {continue;}
			elseif ($v == '.') {}
			elseif ($v == '..') {array_pop($a);}
			else {array_push($a, $v);}
		}
		$path = join('/', $a);
		$out = $parse['scheme'] . '://' . $parse['host'] . '/' . $path;
		return $out;
	}
}


