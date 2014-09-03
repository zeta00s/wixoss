<?php

require_once '/home/zeta00s/zeta00s.php.xdomain.jp/public_html/wixoss/prefarence.php';

/** カードのレアリティを表す Enum クラス */
class Card_Rarity extends Enum
{
    /** 不明 (default) */
    const UNKNOWN = -1;

    /** コモン (COMMON)<br>●C */
    const C = 1;
    /** レア (RARE)<br>●●R */
    const R = 2;
    /** ルリグコモン (LRIG COMMON)<br>●●●LC */
    const LC = 3;
    /** スーパーレア (SUPER RARE)<br>●●●●SR */
    const SR = 4;
    /** ルリグレア (LRIG RARE)<br>●●●●●LR */
    const LR = 5;

    /** シークレット (SECRET)<br>●SECRET● */
    const SECRET = 9;

    // TBC は未確認の意

    /** <i>[TBC]</i> プロモーションカード (PROMOTION CARD)<br>●●●PR */
    const PR = 13;

    /** <i>[TBC]</i> 構築済みデッキ (STRUCTURE DECK)<br>●●●ST */
    const ST = 23;

    /** <i>[TBC]</i> (SPEC, SPECIAL) <br>●●●SP */
    const SP = 53;
    // ((SPECIFICATION)) [spec selector]

    /** ？？？ (???)<br>●???● */
    const QUESTION = 99;

    public function __construct($value = -1)
    {
        parent::__construct($value);
    }
}