<?php

class String_Space
{
    /**
     * 文字列の先頭および末尾にある半角空白および全角空白を取り除く
     * @param string $str 半角空白および全角空白を取り除く文字列
     * @return string 半角空白および全角空白を取り除いた文字列
     */
    public static function trimEmEn($str)
    {
        return preg_replace('/^[\s　]*(.*?)[\s　]*$/u', '\1', $str);
    }

    /**
     * 文字列の先頭および末尾にある全角空白のみを取り除く
     * @param string $str 全角空白を取り除く文字列
     * @return string 全角空白を取り除いた文字列
     */
    public static function trimEm($str)
    {
        return preg_replace('/^　*(.*?)　*$/u', '\1', $str);
    }

    /**
     * 文字列の先頭および末尾にある半角空白を取り除く (trim関数そのまま)
     * @param string $str 半角空白を取り除く文字列
     * @return string 半角空白を取り除いた文字列
     */
    public static function trimEn($str)
    {
        return trim($str);
    }
}