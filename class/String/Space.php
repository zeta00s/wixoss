<?php
class String_Space
{
	public static function trimEmEn($str)
	{
		return preg_replace('/^[\s　]*(.*?)[\s　]*$/u', '\1', $str);
	}

	public static function trimEm($str)
	{
		return preg_replace('/^　*(.*?)　*$/u', '\1', $str);
	}

	public static function trimEn($str)
	{
		return trim($str);
	}
}