<?php

// https://gist.github.com/hirak/5109317
// http://qiita.com/Hiraku/items/71e385b56dcaa37629fe

abstract class Enum
{
	private $scalar;

	function __construct($value)
	{
		$ref = new ReflectionObject($this);
		$consts = $ref->getConstants();
		if (!in_array($value, $consts, true)) {
			throw new InvalidArgumentException;
		}

		$this->scalar = $value;
	}

	final static function __callStatic($label, $args)
	{
		$class = get_called_class();
		$const = constant("$class::$label");
		return new $class($const);
	}

	//元の値を取り出すメソッド。
	//メソッド名は好みのものに変更どうぞ
	final function valueOf()
	{
		return $this->scalar;
	}

	final function __toString()
	{
		return (string)$this->scalar;
	}

	// ******** original methods ********
	// 定数のリストを連想配列(キー:定数名, 値:定数の値)で取り出す
	final function getValues()
	{
		$ref = new ReflectionObject($this);
		return $ref->getConstants();
	}
}