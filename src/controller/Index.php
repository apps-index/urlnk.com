<?php

namespace app\search\src\controller;

// include 'fi.php';

use function Func\{get, post, request};
// use const CON;
// use app\search\src\controller\
use Ext\{PDObj};

class Index extends _Abstract
{
    use _Trait;

    const VERSION = 25.0203;
    const REVISION = 1;

    public function __construct()
    {
        // echo __METHOD__,"\n";
    }

    public function index()
    {
        $arg = func_get_args();
        $engines = new engines\Index;
        $a = (array) $engines;
        $b = (string) $engines;
        $c = $a['code'];
        // print_r(get());

        $orig_q = [];
        $q = get($orig_q, 'q');
        $hsc_q = htmlspecialchars($q);
        // var_dump([$q, $hsc_q]);die;

        $orig = [];
        $float = request($orig, 'TIME_FLOAT', 0);
        $content = post($orig, 'content');
        $md5 = md5($content);
        $hash = substr($md5, 0, 8);
        $addslashes = addslashes($content);
        $strlen = strlen($addslashes);
        // var_dump([$strlen]);die;
        $pdo_orig = ['user' => 'test', 'pass' => 'test', 'dbname' => 'zzz'];
        $PDObj = new \Ext\PDObj($pdo_orig);
        $sql = "INSERT INTO `spa_share_post` (`request_time_float`, `created`, `content`, `md5`, `hash`, `ip`, `ua`, `init`)
VALUES ($float, NULL, '$addslashes', '$md5', '$hash', NULL, NULL, NULL);";
        $orig = ['user' => 'test', 'pass' => 'test', 'dbname' => 'zzz', 'query' => $sql];
        // var_dump($orig);
        $expression = $content ? $PDObj->insert_into($orig) : null;
        // var_dump($expression);die;

        $sel_orig = ['query' => 'SELECT id, content FROM `spa_share_post` ORDER BY id DESC LIMIT 50'];
        // $sel_orig = ['query' => 'SELECT id,domain content FROM `tip_domain_zone` ORDER BY `exp` LIMIT 50'];
        $sel = $PDObj->select($sel_orig);

        return get_defined_vars();
    }

    function share()
    {
        $args = func_get_args();
        // print_r($args[0][0]);die;
        $id = $args[0][0];

        $pdo_orig = ['user' => 'test', 'pass' => 'test', 'dbname' => 'zzz'];
        $PDObj = new PDObj($pdo_orig);

        $sel_orig = ['query' => "SELECT id, content FROM `spa_share_post` WHERE id = '$id' LIMIT 1"];
        $sel = $PDObj->select($sel_orig);
        // var_dump($sel);

        $script = 'index/share';
        $view = [
            'row' => $sel[0],
        ];
        unset($PDObj);
        return get_defined_vars();
    }
}
/*
$b = 'func';
print_r([CON, sub\foo::FunctionName('v'), constant('INI_ALL'),$b()]);

*/
