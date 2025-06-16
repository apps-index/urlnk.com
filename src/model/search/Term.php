<?php

namespace apps\src\model\search;

class Term extends Db
{
    const VERSION = 25.0616;
    const REVISION = 1;
    const EDITION = 150709.1750057629;
    const BUILD = 20250614144131.1749883291;

    static $class = __CLASS__;

    function exists($q)
    {
        $md5 = md5($q);
        $where = [
            'md5' => $md5,
        ];
        $row = $this->get('id', $where);
        if (false !== $row) {
            // var_dump($expression = [get_defined_vars(), __LINE__, __FILE__]);
            $up = $this->update($row['id']);
            return $row['id'];
        }
        $data = [
            'created' => date('Y-m-d H:i:s'),
            'md5' => $md5,
            'query' => $q,
            'total' => 1,
        ];
        $ins = $this->insert($data);
        return $ins;
    }

    function update($id)
    {
        $data = [
            'updated' => (object) 'NOW()',
            'total' => (object) '`total` + 1',
        ];
        $up = $this->pdo_update($data, $id);
        return $up;
    }
}
