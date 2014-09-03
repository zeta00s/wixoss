<?php

require_once '/home/zeta00s/zeta00s.php.xdomain.jp/public_html/wixoss/prefarence.php';

class Card_Cost
{
    private $cost;

    public function __construct($original_array = array())
    {
        $this->init();
        if (is_array($original_array) && empty($original_array)) { return; } // 空の配列なら終了
        $this->setAll($original_array);
    }



    // $this->cost の初期化
    private function init()
    {
        $color_list = Card_Color::UNKNOWN()->getValues(); //UNKNOWNでなくてもよい。より良い方法はないのか
        unset($color_list[array_search(Card_Color::UNKNOWN, $color_list)]); // UNKNOWN は含めないので削除
        foreach ($color_list as $key => $const_value) {
            $this->cost[$const_value] = -1;
        }
    }



    // $array が $this->cost と同じキーを持つ配列かどうか
    private function isCollectKey($array)
    {
        if (!is_array($array)) {
            throw new InvalidArgumentException('コンストラクタの引数に配列が指定されていません。');
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

    // Card_Color::UNKNOWN かどうか
    private function isUnknown(Card_Color $color)
    {
        if ($color == Card_Color::UNKNOWN()) {
            throw new OutOfBoundsException('UNKNOWN を操作しようとしました。');
        }
    }



    public function get(Card_Color $color)
    {
        $this->isUnknown($color);
        return $this->cost[$color->valueOf()];
    }

    public function set(Card_Color $color, $value)
    {
        $this->isUnknown($color);
        $this->isCorrectValue($value);
        $this->cost[$color->valueOf()] = $value;
    }

    public function getAll()
    {
        return $this->cost;
    }

    public function setAll($array)
    {
        // $this->cost と同じ形式の配列が引数として指定された時のみ
        $this->isCollectKey($array);
        foreach ($array as $key -> $value) {
            $this->isCorrectValue($value);
            $this->cost[$key] = $value;
        }
    }



// 	public function __get($key) {}
// 	public function __set($key, $value) {}

}