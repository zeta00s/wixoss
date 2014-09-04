<?php

require_once '/home/zeta00s/zeta00s.php.xdomain.jp/public_html/wixoss/prefarence.php';

/** ルリグタイプのリストを表すクラス */
class Card_LrigType
{
    /** ルリグタイプのリストを表す配列
     * @var array */
    private $_type_array;
    /** ルリグタイプのリストを表すテキスト
     * @var string */
    private $_type_text;

    /**
     * Constructs a new card lrigtype class
     * @param string $origin 初期値を配列かテキストで指定できる (既定は空文字列)
     * @throws InvalidArgumentException 初期値が正常でない場合
     */
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



    /**
     * 配列として取得する
     * @return array ルリグタイプのリストを表す配列
     */
    public function getArray()
    {
        return $this->_type_array;
    }

    /**
     * 配列から代入する
     * @param array $value ルリグタイプのリストを表す配列
     * @param bool $binding テキストを連動して設定させるかどうか
     * @throws InvalidArgumentException 配列以外を代入しようとした場合
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
     * テキストとして取得する
     * @return string ルリグタイプのリストを表すテキスト
     */
    public function getText()
    {
        return $this->_type_text;
    }

    /**
     * テキストから代入する
     * @param string $value ルリグタイプのリストを表すテキスト
     * @param bool $binding 配列を連動して設定させるかどうか
     * @throws InvalidArgumentException 文字列以外を代入しようとした場合
     */
    public function setText($value, $binding = true) // , $convert_type = 1)
    {
        if (!is_string($value)) {
            throw new InvalidArgumentException('ルリグタイプを表すテキストとして不適切な値が代入されようとしました。');
        }
        $this->_type_text = $value;
        if ($binding) { $this->_type_array = static::_convertTextToArray($value); }
    }



    /**
     * 配列をテキストに変換する
     * @param array $array ルリグタイプのリストを表す配列
     * @throws InvalidArgumentException 配列以外を変換しようとした場合
     * @return string ルリグタイプのリストを表すテキスト
     */
    private static function _convertArrayToText($array) // , $convert_type = 1) // もし自動変換が複雑になれば実装
    {
        if (!is_array($array)) {
            throw new InvalidArgumentException('配列以外を文字列に変換しようとしました。');
        }
        return implode('/', $array);
    }

    /**
     * テキストを配列に変換する
     * @param string $text ルリグタイプのリストを表すテキスト
     * @throws InvalidArgumentException 文字列以外を変換しようとした場合
     * @return array ルリグタイプのリストを表す配列
     */
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
