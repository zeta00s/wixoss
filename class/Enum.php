<?php

// http://qiita.com/Hiraku/items/71e385b56dcaa37629fe
/**
 * 列挙型を表現するための抽象クラス。
 *
 * このクラスを継承することで、継承したクラスに含まれる全ての定数をメンバとした列挙型のようにクラスを扱うことができる。
 * 例) class Suit extends Enum { const SPADE = 'spade'; const HEART = 'heart'; const CLUB = 'club'; const DIAMOND = 'diamond'; }
 *
 * インスタンスを作成するときは、引数に定数の値を指定する。
 * 例) $suit = new Suit(Suit::SPADE); $suit = new Suit('spade');
 *
 * また、PHP5.3以降は、new キーワードを使わずに書くこともできる。
 * 例) $suit = Suit::SPADE();
 *
 * ※定数はもちろんそのまま扱うこともできる。
 * 例) $str = Suit::SPADE;
 *
 * @link https://gist.github.com/hirak/5109317
 *
 */
abstract class Enum
{
    /**
     * @var mixed もとの値
     */
    private $_scalar;

    /**
     * Enumクラスの新しいオブジェクトを生成する。
     *
     * (継承先のクラスは __construct 関数の最初に parent::__construct($value) を呼び出すべきである。)
     * @param mixed $value 初期値 (継承先のクラスに含まれる定数のいずれかを指定)
     * @throws InvalidArgumentException 初期値が正常でない場合
     */
    public function __construct($value)
    {
        $ref = new ReflectionObject($this);
        $consts = $ref->getConstants();
        if (!in_array($value, $consts, true)) {
            throw new InvalidArgumentException;
        }

        $this->_scalar = $value;
    }

    final public static function __callStatic($label, $args)
    {
        $class = get_called_class();
        $const = constant("$class::$label");
        return new $class($const);
    }

    /**
     * もとの型で値を返す
     * @return mixed もとの値
     */
    final public function valueOf()
    {
        return $this->_scalar;
    }

    final public function __toString()
    {
        return (string)$this->_scalar;
    }

    /**
     * クラスに含まれる定数のリストを連想配列(キー:定数名, 値:定数の値)で取り出す
     * @return array 定数のリストを表す連想配列
     */
    public function getValues()
    {
        $ref = new ReflectionObject($this);
        return $ref->getConstants();
    }
}