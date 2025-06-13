<?php

namespace Ext;

use PDO;

class Pdo extends \PDO
{
    const VERSION = 25.0204;
    const REVISION = 1;

    static $dsn = [
        '.mydb' => '',
    ];

    static $options = [
        '.mydb' => [
            PDO::ATTR_PERSISTENT => 1,
        ],
    ];

    public function __construct($dsn, $username = null, $password = null, $options = null)
    {
        // code...
    }

    public function query()
    {
        // code...
    }
}
