<?php

namespace app\search\src\controller\engines;

class Index
{
    const VERSION = 25.0203;
    const REVISION = 1;

    var $code = 730;
    var $msg = null;
    var $data = [
        'str' => '',
    ];

    function __construct()
    {
        // parent::__construct();
    }

    function __destruct()
    {
        // parent::__destruct();
    }

    function __call($name, $arguments)
    {
        // 注意: $name 的值区分大小写
        echo "Calling object method '$name' "
             . implode(', ', $arguments). "\n";
    }

    static function __callStatic($name, $arguments)
    {
        // 注意: $name 的值区分大小写
        echo "Calling static method '$name' "
             . implode(', ', $arguments). "\n";
    }

    function __set($name, $value)
    {
        echo "Setting '$name' to '$value'\n";
        $this->data[$name] = $value;
    }

    function __get($name)
    {
        // echo "Getting '$name'\n";
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
        return null;

        $trace = debug_backtrace();
        trigger_error(
            'Undefined property via __get(): ' . $name .
            ' in ' . $trace[0]['file'] .
            ' on line ' . $trace[0]['line'],
            E_USER_NOTICE);
        return null;
    }

    function __isset($name)
    {
        echo "Is '$name' set?\n";
        return isset($this->data[$name]);
    }

    function __unset($name)
    {
        echo "Unsetting '$name'\n";
        unset($this->data[$name]);
    }

    function __clone()
    {
        $this->instance = ++self::$instances;
    }

    static function __set_state($an_array)
    {
        $obj = new A;
        $obj->var1 = $an_array['var1'];
        $obj->var2 = $an_array['var2'];
        return $obj;
    }

    function __debugInfo()
    {
        return [
            'info' => $this->code ** 2,
        ];
    }

    function __invoke(array $a, array $b): int
    {
        return $a[$this->key] <=> $b[$this->key];
    }

    function __toString()
    {
        return $this->str;
    }

    function __serialize(): array
    {
        return [
          'dsn' => $this->dsn,
          'user' => $this->username,
          'pass' => $this->password,
        ];
    }

    function __unserialize(array $data): void
    {
        $this->dsn = $data['dsn'];
        $this->username = $data['user'];
        $this->password = $data['pass'];

        $this->connect();
    }

    function __sleep()
    {
        return array('server', 'username', 'password', 'db');
    }

    function __wakeup()
    {
        $this->connect();
    }
}
