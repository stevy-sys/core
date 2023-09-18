<?php

namespace Stevy\Framework\Database;

use Stevy\Framework\Database\DBConnection;


class Migrations 
{
   
    public static function executeSql($sql) {
        $DBConncetion = new DBConnection(DB_NAME, DB_HOST, DB_USER, DB_PWD);
        $DBConncetion->getPDO()->exec($sql);
    }
}
