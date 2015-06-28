<?php

namespace App;

class ShaGenerator
{
    public static function generate($id, $token)
    {
        $str = $id + $token + getenv("SHA_SALT");
        return sha1($str);
    }
}