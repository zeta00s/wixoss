<?php

require_once '/home/zeta00s/zeta00s.php.xdomain.jp/public_html/wixoss/prefarence.php';

/** カードの種類 (ルリグ, アーツ, シグニ, スペル) を表す Enum クラス */
class Card_Type extends Enum
{
    /** 不明 (default) */
    const UNKNOWN = -1;

    /** ルリグ */
    const LRIG = 0;
    /** アーツ */
    const ARTS = 1;
    /** シグニ */
    const SIGNI = 2;
    /** スペル */
    const SPELL = 3;

    public function __construct($value = -1)
    {
        parent::__construct($value);
    }
}