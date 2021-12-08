<?php

namespace App\Models;

use App\HelperClass;

class UsersModel extends CoreModel
{
    public function checkEntryExists($field, $entry)
    {
        $sql = "SELECT * FROM ". $this->table." WHERE :field = :entry ";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":field", $field, \PDO::PARAM_STR);
        $stmt->bindValue(":entry", $entry, \PDO::PARAM_STR);
        HelperClass::debug($stmt);
        $stmt->execute();
        HelperClass::debug($stmt);
        $result = $stmt->fetchAll();
        HelperClass::debug($result);
        if(empty($result)) {
            return false;
        } else {
            return $result;
        }
    }
}