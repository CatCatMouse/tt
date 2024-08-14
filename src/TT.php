<?php


namespace Cc\Tt;


class TT
{
    public static function make() {
        return new static();
    }

    public function hello()
    {
        echo "hello world!\n";
    }

}