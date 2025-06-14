<?php
// 1.250204

class App
{
    const VERSION = 25.0614;
    const REVISION = 2;
    const EDITION = 165509.1749891309;
    const BUILD = 20250614073926.1749857966;

    function __construct()
    {
        $this->init();
    }

    function __destruct()
    {

    }

    function addPsr4()
    {
        $psr4 = [
            'apps\\' => ROOT,
            'Func\\' => "J:\git\github.com\wuding\php-app\\future\src\\func",
            'Ext\\' => "J:\git\github.com\wuding\php-app\\future\src\\ext",
        ];
        $autoload = $this->autoload();
        $a = [];
        foreach ($psr4 as $key => $value) {
            $a[] = $autoload->addPsr4($key, $value);
        }
        // print_r([get_defined_vars(), __LINE__, __FILE__]);
        return $a;
    }

    function autoload()
    {
        return require ROOT .'/vendor/autoload.php';
    }

    function define()
    {
        $err = [];
        $constants = [
            'ROOT' => dirname(__DIR__),
        ];
        foreach ($constants as $name => $value) {
            if (defined($name)) {
                $err[$name] = constant($name);
                continue;
            }
            define($name, $value);
        }
        return [$err];
    }

    function init()
    {
        $d = $this->define();
        $a = $this->addPsr4();
        $f = new \Func\Vars();
        // var_dump([$d, $a, __LINE__, __FILE__]);
    }

    function run()
    {
        $class = "apps\src\controller\Indexes";
        $obj = new $class;
        $action = 'redirect';

        $function = [$obj, $action];
        $param_arr = [];
        $cufa = call_user_func_array($function, $param_arr);
    }
}

$App = new App();
$run = $App->run();
