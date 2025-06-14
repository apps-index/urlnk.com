<?php

namespace apps\src\controller;

use function Func\{get, post, request};
use apps\src\model\search\Term;

/**
 *
 */
class Indexes
 // extends _Abstract
{
    use _Trait;

    const VERSION = 25.0614;
    const REVISION = 1;
    const EDITION = 165610.1749891370;
    const BUILD = 20250614102653.1749868031;

    function __construct($argument = null)
    {
        // code...
    }

    function redirect()
    {
        $orig_q = [];
        $q = get($orig_q, 'q');
        $ue_q = urlencode($q);
        $u = "https://urlnk.com/?q=$ue_q&ref=9033";
        $string = "Location: $u";
        $Term = new Term();
        $id = $Term->exists($q);

        header($string);
        var_dump($expression = [get_defined_vars(), __LINE__, __FILE__]);
    }
}
