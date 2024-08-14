<?php


namespace CatCatMouse\Tt;


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