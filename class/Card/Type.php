<?php

require_once '/home/zeta00s/zeta00s.php.xdomain.jp/public_html/wixoss/prefarence.php';

/** カードの種類 (ルリグ, アーツ, シグニ, スペル) を表す Enum クラス */
class Card_Type extends Enum
{
    /** 不明
     * @var int */
    const UNKNOWN = -1;

    /** ルリグ
     * @var int */
    const LRIG = 0;
    /** アーツ
     * @var int */
    const ARTS = 1;
    /** シグニ
     * @var int */
    const SIGNI = 2;
    /** スペル
     * @var int */
    const SPELL = 3;

    /**
     * Constructs a new card type enum
     * @param int $value 初期値 (既定は UNKNOWN)
     */
    public function __construct($value = -1)
    {
        parent::__construct($value);
    }
}