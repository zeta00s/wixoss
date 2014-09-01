<?php

require_once '/home/zeta00s/zeta00s.php.xdomain.jp/public_html/wixoss/prefarence.php';

class Card_Rarity extends Enum
{
	const UNKNOWN = -1;

	const C = 1;
	// COMMON
	// ●C
	const R = 2;
	// RARE
	// ●●R
	const LC = 3;
	// LRIG COMMON
	// ●●●LC
	const SR = 4;
	// SUPER RARE
	// ●●●●SR
	const LR = 5;
	// LRIG RARE
	// ●●●●●LR

	const SECRET = 9;
	// SECRET
	// ●SECRET●

	const PR = 13;
	// ******** PROMOTION CARD
	// ●●●PR

	const ST = 23;
	// ******** STRUCTURE DECK
	// ●●●ST

	const SP = 53;
	// ******** SPEC?? (SPECIAL) (((SPECIFICATION))) [spec selector]
	// ●●●SP

	const QUESTION = 99;
	// ???
	// ●???●
}