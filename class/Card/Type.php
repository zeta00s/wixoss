<?php

require_once '/home/zeta00s/zeta00s.php.xdomain.jp/public_html/wixoss/prefarence.php';

class Card_Type extends Enum
{
	const UNKNOWN = -1;

	const LRIG = 0;
	const ARTS = 1;
	const SIGNI = 2;
	const SPELL = 3;
}