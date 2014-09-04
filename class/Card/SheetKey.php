<?php

require_once '/home/zeta00s/zeta00s.php.xdomain.jp/public_html/wixoss/prefarence.php';

/**  */
class Card_SheetKey extends Enum
{
    const UNKNOWN = '';

    const ID = 'id';
    const CARD_NAME_KANA = 'card_name_kana';
    const ILLUST = 'illust';
    const RARITY = 'rarity';
    const CARD_NAME = 'card_name';
    const CARD_TYPE = 'card_type';
    const COLOR = 'color';
    const TEXT = 'text';
    const LEVEL = 'level';
    const COST = 'cost';
    const GROW_COST = 'grow_cost';
    const LIMIT = 'limit';
    const LRIG_TYPE = 'lrig_type';
    const CONDITION = 'condition';
    const CATEGORY = 'class';
    const POWER = 'power';

    const ABILITY = 'ability';
    const BURST_ABILITY = 'burst_ability';
    const GUARD_ABILITY = 'guard_ability';

    public function __construct($value = '')
    {
        parent::__construct($value);
    }
}

/* 	private $id;
 private $card_name_kana;
private $illust;
private $rarity;

private $card_name;
private $card_type;
private $color;
private $text;
private $level;
private $cost;
private $grow_cost;
private $limit;
private $lrig_type;
private $limited_conditions;
private $class;
private $power;

private $burst_icon;
private $guard_icon;

private $ability;
private $burst_ability;
private $guard_ability; */
