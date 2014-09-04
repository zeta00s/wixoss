<?php

require_once '/home/zeta00s/zeta00s.php.xdomain.jp/public_html/wixoss/prefarence.php';

/** シグニのクラス[=カテゴリ]を表すクラス */
class Card_Class
{
    private $_broad_class;
    private $_narrow_class;

    public function __construct($origin_broad = '', $origin_narrow = '');

    public function getBroad();
    public function setBroad($value);
    public function getNarrow();
    public function setNarrow($value);
}

// クラス[=カテゴリ]の階層が2段階以上になる可能性があるなら、クラスの中身を再帰的に定義するかも