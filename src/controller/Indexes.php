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

    const VERSION = 25.0718;
    const REVISION = 2;
    const EDITION = 165610.1749891370;
    const BUILD = 20250614102653.1749868031;

    function __construct($argument = null)
    {
        // code...
    }

    function redirect()
    {
        $arr = [
            'https://urlnk.com/?q=%s&ref=9033',
            'https://search.douban.com/movie/subject_search?search_text=%s',
        ];
        $pattern = "#%s#";
        $orig_q = [];
        $q = get($orig_q, 'q');
        $type = get($orig_q, 'type', 0);
        $ue_q = urlencode($q);
        $u = "https://urlnk.com/?q=$ue_q&ref=9033";
        $subject = $arr[$type ] ?? null;
        if (!$subject) {
            goto __DEBUG__;
        }
        $u = preg_replace($pattern, $ue_q, $subject);

        $string = "Location: $u";
        $Term = new Term();
        $id = $Term->exists($q, $type);

        header($string);
        __DEBUG__:
        var_dump($expression = [get_defined_vars(), __LINE__, __FILE__]);
    }
}
