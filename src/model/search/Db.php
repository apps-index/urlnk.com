<?php

namespace apps\src\model\search;

use Ext\PDObj;

class Db
{
    const VERSION = 25.0614;
    const REVISION = 1;
    const EDITION = 094431.1750038271;
    const BUILD = 20250614144131.1749883291;

    /* Property */
    var $primary_key = 'id';

    /* RunTime */
    var $pdo_orig = null;
    var $PDObj = null;

    function __construct()
    {
        $pdo_orig = [
            'user' => 'test',
            'pass' => 'test',
            'dbname' => 'search',
        ];
        $this->PDObj = new PDObj($pdo_orig);
        $this->pdo_orig = $pdo_orig;
    }

    function db_table()
    {
        $pattern = "#\\\model\\\#";
        $subject = static::$class;
        $limit = -1;
        $flags = 0;
        $preg_split = preg_split($pattern, $subject, $limit, $flags);
        $subject = $array_pop = array_pop($preg_split);
        $search = '\\';
        $replace = '.';
        $str_replace = str_replace($search, $replace, $subject);
        $strtotlower = strtolower($str_replace);
        return $strtotlower;
        var_dump($expression = get_defined_vars());
        die;
    }

    function get($column, $variable)
    {
        $sql = "SELECT $column FROM `search`.`term` WHERE ";
        $pieces = [];
        foreach ($variable as $key => $value) {
            $addslashes = addslashes($value);
            $pieces[] = "`$key` = '$addslashes'";
        }
        $glue = ",";
        $sql .= implode($glue, $pieces);
        $sql .= " LIMIT 1";
        $sel = $this->pdo_select($sql);
        return $row = $sel[0] ?? false;
        var_dump([get_defined_vars(), __LINE__, __FILE__]);
    }

    function insert($variable)
    {
        $sql = "INSERT INTO `search`.`term` SET ";
        $pieces = [];
        foreach ($variable as $key => $value) {
            $addslashes = addslashes($value);
            $pieces[] = "`$key` = '$addslashes'";
        }
        $glue = ",";
        $sql .= implode($glue, $pieces);
        return $ins = $this->pdo_insert_into($sql);
        var_dump([$ins, $sql, __LINE__, __FILE__]);
    }

    function pdo_insert_into($sql)
    {
        $sel_orig = [
            'query' => $sql,
        ];
        $sel_orig = array_merge($sel_orig, $this->pdo_orig);
        $sel = $this->PDObj->insert_into($sel_orig);
        return $sel;
        var_dump([$sel, __LINE__, __FILE__]);
    }

    function pdo_select($sql)
    {
        $sel_orig = [
            'query' => $sql,
        ];
        $sel = $this->PDObj->select($sel_orig);
        return $sel;
        var_dump([$sel, __LINE__, __FILE__]);
    }

    function pdo_update($data, $id)
    {
        $sql = $this->sql_update($data, $id);
        $exec = $this->PDObj::$dbh->exec($sql);
        // var_dump([get_defined_vars(), __LINE__, __FILE__]);
        return $exec;
    }

    function sql_implode($variable)
    {
        $glue = PHP_EOL;
        $pieces = [];
        foreach ($variable as $key => $value) {
            if ($value) {
                $pieces[] = "$key $value";
            }
        }
        $implode = implode($glue, $pieces);
        return $implode;
    }

    function sql_set($variable)
    {
        $glue = ', '. PHP_EOL;
        $pieces = [];
        foreach ($variable as $key => $value) {
            if (is_object($value)) {
                $val = $value->scalar;
            } else {
                $val = "'$value'";
            }
            $piece = "`$key` = $val";
            $pieces[] = $piece;
        }
        $implode = implode($glue, $pieces);
        return $implode;
    }

    function sql_update($variable, $id)
    {
        $arr = [
            'UPDATE' => $this->db_table(),
            'SET' => $this->sql_set($variable),
            'WHERE' => $this->sql_where($id),
        ];
        $sql = $this->sql_implode($arr);
        // var_dump([get_defined_vars(), __LINE__, __FILE__]);
        return $sql;
    }

    function sql_where($id)
    {
        if (is_numeric($id)) {
            $sql = "`$this->primary_key` = $id";
        }
        // var_dump([get_defined_vars(), __LINE__, __FILE__]);
        return $sql;
    }
}
