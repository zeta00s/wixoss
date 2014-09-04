<?php

use GuzzleHttp\Stream\__construct;
require_once '/home/zeta00s/zeta00s.php.xdomain.jp/public_html/wixoss/prefarence.php';

/** それぞれのカードに含まれる全ての情報を表すクラス */
class Card_Sheet
{
    /** カードに含まれるそれぞれの情報を表す連想配列
     * (キーは Card_SheetKey クラスの KNKNOWN 以外の全ての定数と対応)
     * @var array */
    private $_data;

    public function __construct($origin_id = '');

    public function getValue(Card_SheetKey $sheet_key);
    public function setValue(Card_SheetKey $sheet_key, $value);

    public function isValid();

    private function isUnknown();
}