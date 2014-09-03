<?php

require_once '/home/zeta00s/zeta00s.php.xdomain.jp/public_html/wixoss/prefarence.php';

/** ルリグタイプのリストを表すクラス */
class Card_LrigType
{
    /** ルリグタイプのリストを表す配列 */
    private $_type_array;
    /** ルリグタイプのリストを表すテキスト */
    private $_type_text;

    public function __construct($origin = '')
    {
        if (is_string($origin)) {
            $this->setText($origin);
        } elseif (is_array($origin)) {
            $this->setArray($origin);
        } else {
            throw new InvalidArgumentException('ルリグタイプとして不適切な値が代入されようとしました。');
        }
    }


    public function __set()
    {

    }

    /**
     * ルリグタイプのリストを表す配列を取得する
     * @return array ルリグタイプのリストを表す配列
     */
    public function getArray()
    {
        return $this->_type_array;
    }

    /**
     * ルリグタイプのリストを表す
     * @param array $value
     * @param bool $binding テキストを連動して設定させるかどうか
     * @throws InvalidArgumentException
     */
    public function setArray($value, $binding = true) // , $convert_type = 1)
    {
        if (!is_array($text)) {
            throw new InvalidArgumentException('ルリグタイプを表す配列として不適切な値が代入されようとしました。');
        }
        $this->_type_array = array_values($value);
        if ($binding) { $this->_type_text = static::_convertArrayToText($value); }
    }

    /**
     *
     * @return Ambigous <unknown, string>
     */
    public function getText()
    {
        return $this->_type_text;
    }

    public function setText($value, $binding = true) // , $convert_type = 1)
    {
        if (!is_string($value)) {
            throw new InvalidArgumentException('ルリグタイプを表すテキストとして不適切な値が代入されようとしました。');
        }
        $this->_type_text = $value;
        if ($binding) { $this->_type_array = static::_convertTextToArray($value); }
    }




    private static function _convertArrayToText($array) // , $convert_type = 1) // もし自動変換が複雑になれば実装
    {
        if (!is_array($array)) {
            throw new InvalidArgumentException('配列以外を文字列に変換しようとしました。');
        }
        return implode('/', $array);
    }

    private static function _convertTextToArray($text) // , $convert_type = 1) // もし自動変換が複雑になれば実装
    {
        if (!is_string($text)) {
            throw new InvalidArgumentException('文字列以外を配列に変換しようとしました。');
        } elseif (empty($text)) {
            return array(); // 空文字列は空の配列を返す
        }
        return explode('/', $text);
    }
}





/* メモ
 * __autoload関数を使う場合、そのルールに従っていないクラスやインターフェイスを外部ファイルから読み込むことはできない??
 * ただし直接パスを指定した場合はその限りではない??
 */

//class LrigTypeConverter{}
