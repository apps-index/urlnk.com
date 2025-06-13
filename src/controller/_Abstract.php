<?php

namespace app\search\src\controller {

abstract class _Abstract implements _Interface
{
    var $VERSION = 25.0203;
    var $REVISION = 2;

    public function __construct()
    {
        echo __METHOD__,"\n";
    }

    public function __toString()
    {
        return __FILE__;
    }

    public function _index()
    {
        // code...
    }
}

}


namespace NS {

}


namespace {

const CON = 3;

function func()
{
    // use NS\Cls;


return __FUNCTION__;
}

}
