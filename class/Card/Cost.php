<?php

require_once '/home/zeta00s/zeta00s.php.xdomain.jp/public_html/wixoss/prefarence.php';

class Card_Cost
{
	private $cost;
	private $color_lists;

	public function __construct($origin_array = NULL)
	{
		$this->init();
		if (is_null($origin_array)) {return;}
		$this->setAll($prigin_array);
	}



	// $this->cost の初期化
	private function init()
	{
		$color = new Card_Color();
		$this->color_lists = $color->getValues();
		foreach ($this->color_lists as $key -> $constValue) {
			$this->cost[$constValue] = -1;
		}
	}



	// $array が $this->cost と同じキーを持つ配列かどうか
	private function isCollectKey($array)
	{
		if (!is_array($array)) {
			throw new InvalidArgumentException('コンストラクタの引数に配列(またはNULL)が指定されていません。');
		} elseif (array_keys($array) != array_keys($this->cost)) {
			throw new OutOfBoundsException('配列のキーが一致しません。');
		}
	}

	// 正しい値かどうか
	private function isCorrectValue($value)
	{
		if (!is_int($value)) {
			throw new InvalidArgumentException('コストとして不適切な値が代入されようとしました。');
		} elseif ($value < -1) {
			throw new RangeException('あり得ない数値です。');
		}
	}



	public function get(Card_Color $color)
	{
		return $this->cost[$color->valueOf()];
	}

	public function set(Card_Color $color, $value)
	{
		$this->isCorrectValue($value);
		$this->cost[$color->valueOf()] = $value;
	}

	public function getAll()
	{
		return $this->cost;
	}

	// $this->cost と同じ形式の配列が引数として指定された時のみ
	public function setAll($value_array)
	{
		$this->isCollectKey($value_array);
		foreach ($value_array as $key -> $value) {
			$this->isCorrectValue($value);
			$this->cost[$key] = $value;
		}
	}



// 	public function __get($key) {}
// 	public function __set($key, $value) {}

}