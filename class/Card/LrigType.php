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



	private static function arrayToText($array) // , $convert_type = 1) // もし自動変換が複雑になれば実装
	{
		if (!is_array($array)) {
			throw new InvalidArgumentException('配列以外を文字列に変換しようとしました。');
		}
		return implode('/', $array);
	}

	private static function textToArray($text) // , $convert_type = 1) // もし自動変換が複雑になれば実装
	{
		if (!is_string($text)) {
			throw new InvalidArgumentException('文字列以外を配列に変換しようとしました。');
		} elseif (empty($text)) {
			return array(); // 空文字列は空の配列を返す
		}
		return explode('/', $text);

	}



	public function getArray()
	{
		return $this->type_array;
	}

	public function setArray($value, $binding = true) // , $convert_type = 1)
	{
		if (!is_array($text)) {
			throw new InvalidArgumentException('ルリグタイプを表す配列として不適切な値が代入されようとしました。');
		}
		$this->type_array = array_values($value);
		if ($binding) { $this->type_text = static::arrayToText($value); }
	}

	public function getText()
	{
		return $this->type_text;
	}

	public function setText($value, $binding = true) // , $convert_type = 1)
	{
		if (!is_string($value)) {
			throw new InvalidArgumentException('ルリグタイプを表すテキストとして不適切な値が代入されようとしました。');
		}
		$this->type_text = $value;
		if ($binding) { $this->type_array = static::textToArray($value); }
	}

}





/* メモ
 * __autoload関数を使う場合、そのルールに従っていないクラスやインターフェイスを外部ファイルから読み込むことはできない??
 * ただし直接パスを指定した場合はその限りではない??
 */

//class LrigTypeConverter{}
