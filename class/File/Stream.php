<?php

class File_Stream
{
	public static function getContents($filename)
	{
		$conn = curl_init();
		curl_setopt($conn, CURLOPT_URL, $filename);
		curl_setopt($conn, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($conn);
		curl_close($conn);
		return $result;
	}
}