<?php

class db
{
    const VERSION = 25.0204;
    const REVISION = 1;

    function create()
    {
        CREATE DATABASE testDB;
        CREATE DATABASE `search` COLLATE 'utf8mb4_unicode_ci';

        CREATE TABLE table_name (
            column1 datatype,
            column2 datatype,
            column3 datatype,
           ....
        );
    }

    function create_dababase()
    {
        $this->create('search');

        $column = [
            '`id` int NOT NULL AUTO_INCREMENT PRIMARY KEY',
            '`size` smallint NULL',
  "`created` datetime NULL ON UPDATE CURRENT_TIMESTAMP COMMENT 'comment'",
  '`updated` datetime NULL DEFAULT NOW()',
  "`query` varchar(250) COLLATE 'utf8mb4_unicode_ci' NULL",
            'id' => ['type', 10, 'options', null, 'ai', 'value', 'comment']
        ];
        $this->create('term', $column, $comment, $engine, $collate, $auto_increment);
    }

    function drop()
    {
        DROP DATABASE databasename;
        DROP DATABASE `search`;
        DROP TABLE table_name;
    }

    function truncate()
    {

    }

    function alter($tbl, $add, $drop, $modify)
    {
        ALTER DATABASE `search` COLLATE ascii_bin

        ALTER TABLE `term`
ADD UNIQUE `md5` (`md5`),
ADD FULLTEXT `ft_query` (`query`);
    }

    function create_table_as($tbl, $select, $from, $where)
    {

    }

    function alter_table()
    {

    }

    function create_index()
    {

    }

    function date()
    {
/*
        DATE
        DATETIME
        TIMESTAMP
        YEAR
*/
    }

    function create_view()
    {

    }
}
