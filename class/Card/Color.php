<?php

require_once '/home/zeta00s/zeta00s.php.xdomain.jp/public_html/wixoss/prefarence.php';

/** カードの色 (白, 赤, 青, 緑, 黒, 無色) を表す Enum クラス*/
class Card_Color extends Enum
{
    /** 不明
     * @var int */
    const UNKNOWN = -1;

    /** 無色
     * @var int */
    const COLORNESS = 0;
    /** 白
     * @var int */
    const WHITE = 1;
    /** 赤
     * @var int */
    const RED = 2;
    /** 青
     * @var int */
    const BLUE = 3;
    /** 緑
     * @var int */
    const GREEN = 4;
    /** 黒
     * @var int */
    const BLACK = 5;

    /**
     * Constructs a new card color enum
     * @param int $value 初期値 (既定は UNKNOWN)
     */
    public function __construct($value = -1)
    {
        parent::__construct($value);
    }
}