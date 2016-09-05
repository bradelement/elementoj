<?php
namespace Lib\Utils;

class UUID
{
    public static function uuid()
    {
        $chars = md5(uniqid(mt_rand(), true));
        $ret = array(
            substr($chars, 0, 8),
            substr($chars, 8, 4),
            substr($chars, 12, 4),
            substr($chars, 16, 4),
            substr($chars, 20, 12),
        );
        return implode('-', $ret);
    }
}
