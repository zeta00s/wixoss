<?php

require_once '/home/zeta00s/zeta00s.php.xdomain.jp/public_html/wixoss/prefarence.php';

class Card_Color extends Enum
{
    const UNKNOWN = -1;

    const COLORNESS = 0;
    const WHITE = 1;
    const RED = 2;
    const BLUE = 3;
    const GREEN = 4;
    const BLACK = 5;

    public function __construct($value = -1)
    {
        parent::__construct($value);
    }
}