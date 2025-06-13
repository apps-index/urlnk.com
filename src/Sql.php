<?php

namespace Topdb;

class Sql
{
    const VERSION = 25.0204;
    const REVISION = 1;

    function comment()
    {

    }

    function operator()
    {
        // arithmetic
        // + - * / %

        // bitwise
        // & | ^

        // comparison
        // = > < >= <= <>

        // compound
        // += -= *= /= &= ^-= |*=

        // logical
        // ALL AND ANY BETWEEN EXISTS IN LIKE NOT OT SOME
    }

    function select()
    {
        $column = [
            'MIN' => ['c col', 'AS nc'],
            'MAX' => 'c',
        ];
        $a = [
            'SELECT' => [
                'DISTINCT' => 0,
                $column,
            ],
            'FROM' => $table,
            'WHERE' => $condition,
            'ORDER BY' => 'DESC',
            'LIMIT' => 1,
            'OFFSET' => 2,
        ];
    }

    function column()
    {
        $c = [
            'COUNT',
            'AVG',
            'SUM',
        ];
    }

    function as()
    {
        $s = 'c AS co';
        $t = 'Tbl as tbl2';
    }

    function conct_ws()
    {
        $s = 'CONCAT_WS(', ', Address, PostalCode, City, Country) AS Address';
    }

    function case()
    {

    }

    function ifnull()
    {

    }

    function coalesce()
    {

    }

    function from()
    {

    }

    function join()
    {
        $_ = 'inner left right cross self';
    }

    function union($all, $s1, $s2, $order)
    {
        $ = 'UNION ALL';
    }

    function group_by()
    {
        'GROUP BY Country
ORDER BY COUNT(CustomerID) DESC'   ;
    }

    function having($condition)
    {

    }

    function where($condition, $operator = 'and or not')
    {
        $b = [
            '!NOT n' => 'v',
            'gt >' => 1,
            'lt' => [
                '<',
                2,
            ],
            '>=',
            '<=',
            '<>',
            'BETWEEN 1 AND 10',
            'LIKE' => 's%',
            'IN' => '1,a',
            'c IS NULL',
            'c IS NOT NULL',
        ];
    }

    function exists()
    {

    }

    function any()
    {

    }

    function all()
    {

    }



    function like()
    {
        $l = [
            'a%',
            '%a',
            '%or%'
            '_r%',
            'a_%',
            'a__%',
            'a%o',
        ];
    }

    function in()
    {
        $i = [
            'NOT IN' => 'v1,v2',
            'IN' => 'SELECT statement',
        ];
    }

    function between()
    {
        $s = 'NOT BETWEEN v1 AND v2';
    }

    function exa()
    {
        $condition = [
            'co' => 'g',
            'and',
            [
                'c' => 'b',
                'or',
                'c' => 's',
            ],
        ];
        $condition = [
            'not',
            'co' => 'g',
            'and',
            'not co' => 'g',
        ];
        $order = [
            'count',
            'c desc',
            ['a,b' => 'desc'],
        ];
        $this->select(['distinct', 'table' => 'db0'], $column, $condition, $order);
    }

    function insert()
    {
        $i = [
            'INSERT INTO' => [
                $table,
                ['c1', 'c2'],
            ],
            'VALUES' => [
                'v1',
                'v2',
            ],
        ];
    }

    function insert_select()
    {

    }



    function exam()
    {
        $data = [
        ];
        $value = [

        ];
        $this->insert('tbl', $value, $column);
    }

    function update()
    {
        $u = [
            'UPDATE' => $table,
            'SET' => [$column, $value],
            'WHERE' => $condition,
        ];
    }

    function delete()
    {
        $d = [
            'DELETE FROM' => $table,
            'WHERE' => $condition,
        ];
    }
}
