<?php

namespace app\search\src\controller;

use function Func\get;

trait _Trait
{
    var $VER = 25.0204;
    var $REV = 2;

    static $vars = null;

    public function index()
    {
        $arg = func_get_args();
        $orig = [];
        $get = get($orig, 'q');

        return get_defined_vars();
    }
}
