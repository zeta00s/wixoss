<?php

require_once '/home/zeta00s/zeta00s.php.xdomain.jp/public_html/wixoss/prefarence.php';

class Card_Data
{
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

    private $data;
    // NULLは使わない予定(たぶんMySQLとの関係で)。
    // 数値の最小値は 0, 未設定は -1 で固定? こういうのはOKなのかね?



    public function __construct($id = 0)
    {
        $this->init();
    }



    private function init()
    {
        $this->data['id'] = '';
        $this->data['card_name_kana'] = '';
        $this->data['illust'] = '';
        $this->data['rarity'] = new Card_Rarity();

        $this->data['card_name'] = '';
        $this->data['card_type'] = new Card_Type();
        $this->data['color'] = new Card_Color();
        $this->data['text'] = '';
        $this->data['level'] = -1;
        $this->data['cost'] = new Card_Cost();
        $this->data['grow_cost'] = new Card_Cost();
        $this->data['limit'] = -1;
        $this->data['lrig_type'] = new Card_LrigType();
        $this->data['limited_conditions'] = new Card_LrigType();
        $this->data['class'] = new Card_Class();
        $this->data['power'] = -1;

/* 		$this->data['burst_icon'] = -1;
        $this->data['guard_icon'] = -1;
 */
        $this->data['ability'] = new Card_Ability();
        $this->data['burst_ability'] = new Card_Ability();
        $this->data['guard_ability'] = new Card_Ability();
    }



    public function isValid()
    {
        $copy = new self();
        //カードとしての妥当性チェックの予定

        //アーツとスペル以外の種類のカードは、コストがデフォルトと一致しなければならない、などもここで
    }



    public function getId()
    {
        return $this->data['id'];
    }

    public function setId($value)
    {
        if (!is_string($value)) {
            throw new InvalidArgumentException('カードIDとして不適切な値が代入されようとしました。');
        }
        $this->data['id'] = $value;
    }

    public function getKana()
    {
        return $this->data['card_name_kana'];
    }

    public function setKana($value)
    {
        if(!is_string($value)) {
            throw new InvalidArgumentException('カード名(カナ)として不適切な値が代入されようとしました。');
        }
        // 全角カナのみ(半角カナは使わない) ...チェックする??
        $this->data['card_name_kana'] = $value;
    }

    public function getIllust()
    {
        return $this->data['illust'];
    }

    public function setIllust($value)
    {
        if(!is_string($value)) {
            throw new InvalidArgumentException('Illustとして不適切な値が代入されようとしました。');
        }
        $this->data['illust'] = $value;
    }

    public function getRarity()
    {
        return $this->data['rarity'];
    }

    public function setRarity(Card_Rarity $value)
    {
        $this->data['rarity'] = $value;
    }



    public function getCardName()
    {
        return $this->data['card_name'];
    }

    public function setCardName($value)
    {
        if (!is_string($value)) {
            throw new InvalidArgumentException('カード名として不適切な値が代入されようとしました。');
        }
        $this->data['card_name'] = $value;
    }

    public function getCardType()
    {
        return $this->data['card_type'];
    }

    public function setCardType(Card_Type $value)
    {
        $this->data['card_type'] = $value;
    }

    public function getColor()
    {
        return $this->data['color'];
    }

    public function setColor(Card_Color $value)
    {
        $this->data['color'] = $value;
    }

    public function getText()
    {
        return $this->data['text'];
    }

    public function setText($value)
    {
        if (!is_string($value)) {
            throw new InvalidArgumentException('カードのテキストとして不適切な値が代入されようとしました。');
        }
        $this->data['text'] = $value;
    }

    public function getLevel()
    {
        return $this->data['level'];
    }

    public function setLevel($value)
    {
        if (!is_int($value)) {
            throw new InvalidArgumentException('カードのレベルとして不適切な値が代入されようとしました。');
        } elseif ($value < -1 || $value > $ini['max_level']) {
            throw new RangeException('あり得ない数値です。');
        }
        $this->data['level'] = $value;
    }

    public function getCost()
    {
        return $this->data['cost'];
    }

    public function setCost(Card_Cost $value)
    {
        $this->data['cost'] = $value;
    }

    public function getGrowCost()
    {
        return $this->data['grow_cost'];
    }

    public function setGrowCost(Card_Cost $value)
    {
        $this->data['grow_cost'] = $value;
    }

    public function getLimit()
    {
        return $this->data['limit'];
    }

    public function setLimit($value)
    {
        if (!is_int($value)) {
            throw new InvalidArgumentException('カードのリミットとして不適切な値が代入されようとしました。');
        } elseif ($value < -1 || $value > $ini['max_limit']) {
            throw new RangeException('あり得ない数値です。');
        }
        $this->data['limit'] = $value;
    }

    public function getLrigType()
    {
        return $this->data['lrig_type'];
    }

    public function setLrigType(Card_LrigType $value)
    {
        $this->data['lrig_type'] = $value;
    }

    public function getLimitedConditions()
    {
        return $this->data['limited_conditions'];
    }

    public function setLimitedConditions(Card_LrigType $value)
    {
        $this->data['limited_conditions'] = $value;
    }

    public function getClass()
    {
        return $this->data['class'];
    }

    public function setClass(Card_Class $value)
    {
        $this->data['class'] = $value;
    }

    public function getPower()
    {
        return $this->data['power'];
    }

    public function setPower($value)
    {
        if (!is_int($value)) {
            throw new InvalidArgumentException('カードのパワーとして不適切な値が代入されようとしました。');
        } elseif ($value < -1) {
            throw new RangeException('あり得ない数値です。');
        }
        $this->data['power'] = $value;
    }



/* 	public function getBurstIcon()
    {
        return $this->data['burst_icon'];
    }

    public function setBurstIcon($value)
    {
        if (!is_int($value)) {
            throw new InvalidArgumentException('バーストアイコンとして不適切な値が代入されようとしました。');
        } elseif ($value < -1 || $value > 1) {
            throw new RangeException('あり得ない数値です。');
        }
        $this->data['burst_icon'] = $value;
    }

    public function getGuardIcon()
    {
        return $this->data['guard_icon'];
    }

    public function setGuardIcon($value)
    {
        if (!is_int($value)) {
            throw new InvalidArgumentException('ガードアイコンとして不適切な値が代入されようとしました。');
        } elseif ($value < -1 || $value > 1) {
            throw new RangeException('あり得ない数値です。');
        }
        $this->data['guard_icon'] = $value;
    }
 */


    public function getAbility()
    {
        return $this->data['ability'];
    }

    public function setAbility(Card_Ability $value)
    {
        $this->data['ability'] = $value;
    }

    public function getBurstAbility()
    {
        return $this->data['burst_ability'];
    }

    public function setBurstAbility(Card_Ability $value)
    {
        $this->data['burst_ability'] = $value;
    }

    public function getGuardAbility()
    {
        return $this->data['guard_ability'];
    }

    public function setGuardAbility(Card_Ability $value)
    {
        $this->data['guard_ability'] = $value;
    }



}