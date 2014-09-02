<?php

require_once '/home/zeta00s/zeta00s.php.xdomain.jp/public_html/wixoss/prefarence.php';

class Card_LrigType
{
	private $type_array;
	private $type_text;

	private $convert_func;

	public function __construct($origin_text = '')
	{
		$this->init();
	}



	private function init()
	{
		$this->type_array = array();
		$this->type_text = '';
	}



	private function ArrayToText($array, $convert_type = 1)
	{
		if (!is_array($array)) {
			throw new InvalidArgumentException('配列以外を文字列に変換しようとしました。');
		}

	}

	private function TextToArray($text, $convert_type = 1)
	{
		if (!is_string($text)) {
			throw new InvalidArgumentException('文字列以外を配列に変換しようとしました。');
		} elseif (empty($text)) {
			return array(); // 空文字列は空の配列を返す
		}
	}



	public function getArray()
	{
		return $this->type_array;
	}

	public function setArray($value, $convert_type = 1)
	{
		if (!is_array($text)) {
			throw new InvalidArgumentException('ルリグタイプを表す配列として不適切な値が代入されようとしました。');
		}

	}

	public function getText()
	{
		return $this->type_text;
	}

	public function setText($value, $convert_type = 1)
	{
		if (!is_string($value)) {
			throw new InvalidArgumentException('ルリグタイプを表すテキストとして不適切な値が代入されようとしました。');
		}
		$this->type_text = $value;
	}

}





/* メモ
 * __autoload関数を使う場合、そのルールに従っていないクラスやインターフェイスを外部ファイルから読み込むことはできない??
 * ただし直接パスを指定した場合はその限りではない??
 */
class LrigTypeConverter
{
	public function __construct($convert_type)
	{
		
	}
	
	public static function ArrayToText($array, $convert_type)
	{
		
	}
	
	public static function TextToArray($text, $convert_type)
	{
		
	}
}

class Converter
{
	public static function ArrayToText($array)
	{
		static::ArrayToText($array);
	}
	
	public static function TextToArray($text)
	{
		
	}
}

class SlashConverter extends ConvertInterface
{
	public static function ArrayToText($array)
	{
		if (!is_array($array)) {
			throw new InvalidArgumentException('配列以外を文字列に変換しようとしました。');
		}
		return implode('/', $array);
	}

	public static function TextToArray($text)
	{
		if (!is_string($text)) {
			throw new InvalidArgumentException('文字列以外を配列に変換しようとしました。');
		} elseif (empty($text)) {
			return array(); // 空文字列は空の配列を返す
		}
		return explode('/', $text);
	}
}
