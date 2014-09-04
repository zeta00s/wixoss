<?php

require_once '/home/zeta00s/zeta00s.php.xdomain.jp/public_html/wixoss/prefarence.php';

/** カードのコストを色ごとに表すクラス */
class Card_Cost
{
    /** コストを色ごとに表す配列
     * (添字は Card_Color クラスの UNKNOWN 以外の 全ての定数と対応, 値はコストを表す数値)
     * @var array */
    private $_cost_array;

    /**
     * Constructs a new card cost class
     * @param array $origin 初期値を表す配列 (既定は空の配列)
     * @throws InvalidArgumentException 初期値が正常でない場合
     */
    public function __construct($origin = array())
    {
        if (!is_array($origin)) {
            throw new InvalidArgumentException('コンストラクタの引数に配列が指定されていません。');
        }

        // $this->_cost_array の初期化
        $c = new Card_Color();
        $color_list = $c->getValues();
        unset($color_list[array_search(Card_Color::UNKNOWN, $color_list)]); // UNKNOWN は含めないので削除
        foreach ($color_list as $key => $const_value) {
            $this->_cost_array[$const_value] = -1;
        }

        if (empty($origin)) { return; } // 空の配列なら終了
        $this->setAll($origin);
    }



    /**
     * 指定した色のコストを取得する
     * @param Card_Color $color 取得したいコスト色
     * @return int 指定した色のコストを表す数値
     */
    public function get(Card_Color $color)
    {
        $this->isUnknown($color);
        return $this->_cost_array[$color->valueOf()];
    }

    /**
     * 色を指定してコストを代入する
     * @param Card_Color $color 代入したいコストの色
     * @param int $value 指定する色のコストを表す数値
     */
    public function set(Card_Color $color, $value)
    {
        $this->isUnknown($color);
        $this->isCorrectValue($value);
        $this->_cost_array[$color->valueOf()] = $value;
    }

    /**
     * 全ての色のコストを配列で取得する
     * @return array コストを色ごとに表す配列
     * (添字は Card_Color クラスの UNKNOWN 以外の 全ての定数と対応, 値はコストを表す数値)
     */
    public function getAll()
    {
        return $this->_cost_array;
    }

    /**
     * 全ての色のコストを配列から代入する
     * @param array $array コストを色ごとに表す配列
     * (添字は Card_Color クラスの UNKNOWN 以外の 全ての定数と対応, 値はコストを表す数値)
     */
    public function setAll($array)
    {
        $this->isCollectKey($array);
        foreach ($array as $key -> $value) {
            $this->isCorrectValue($value);
            $this->_cost_array[$key] = $value;
        }
    }



    /**
     * $this->_cost_array と同じキーを持つ配列ででなければ例外を返す
     * @param mixed $array 同じキーを持つかチェックしたい配列
     * @throws InvalidArgumentException 配列以外をチェックさせようとした場合
     * @throws OutOfBoundsException キーが一致しない場合
     */
    private function isCollectKey($array)
    {
        if (!is_array($array)) {
            throw new InvalidArgumentException('引数に配列が指定されていません。');
        } elseif (array_keys($array) != array_keys($this->_cost_array)) {
            throw new OutOfBoundsException('配列のキーが一致しません。');
        }
    }

    /**
     * 配列に格納する値として正しくなければ例外を返す
     * @param mixed $value チェックしたい値
     * @throws InvalidArgumentException 整数以外をチェックさせようとした場合
     * @throws RangeException 範囲外の数値の場合
     */
    private function isCorrectValue($value)
    {
        if (!is_int($value)) {
            throw new InvalidArgumentException('コストとして不適切な値が代入されようとしました。');
        } elseif ($value < -1) {
            throw new RangeException('あり得ない数値です。');
        }
    }

    /**
     * Card_Color クラスの変数のもとの値が UNKNOWN であれば例外を返す
     * @param Card_Color $color チェックしたい変数
     * @throws OutOfBoundsException UNKNOWN である場合
     */
    private function isUnknown(Card_Color $color)
    {
        if ($color->valueOf() == Card_Color::UNKNOWN) {
            throw new OutOfBoundsException('UNKNOWN を操作しようとしました。');
        }
    }
}