<?php

require_once '/home/zeta00s/zeta00s.php.xdomain.jp/public_html/wixoss/prefarence.php';

/** カードのレアリティを表す Enum クラス (<i>[TBC] </i>の定数は名称未確認) */
class Card_Rarity extends Enum
{
    /** 不明
     * @var int */
    const UNKNOWN = -1;

    /** コモン (COMMON)<br>●C
     * @var int */
    const C = 1;
    /** レア (RARE)<br>●●R
     * @var int */
    const R = 2;
    /** ルリグコモン (LRIG COMMON)<br>●●●LC
     * @var int */
    const LC = 3;
    /** スーパーレア (SUPER RARE)<br>●●●●SR
     * @var int */
    const SR = 4;
    /** ルリグレア (LRIG RARE)<br>●●●●●LR
     * @var int */
    const LR = 5;

    /** シークレット (SECRET)<br>●SECRET●
     * @var int */
    const SECRET = 9;

    /** <i>[TBC]</i> プロモーションカード (PROMOTION CARD)<br>●●●PR
     * @var int */
    const PR = 13;

    /** <i>[TBC]</i> 構築済みデッキ (STRUCTURE DECK)<br>●●●ST
     * @var int */
    const ST = 23;

    /** <i>[TBC]</i> (SPEC, SPECIAL) <br>●●●SP
     * @var int */ // ((SPECIFICATION)) [spec selector]
    const SP = 53;

    /** ？？？ (???)<br>●???●
     * @var int */
    const QUESTION = 99;

    /**
     * Constructs a new card rarity enum
     * @param int $value 初期値 (既定は UNKNOWN)
     */
    public function __construct($value = -1)
    {
        parent::__construct($value);
    }
}