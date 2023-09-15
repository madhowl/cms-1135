<?php

namespace App\Models;

use App\HelperClass;

class UsersModel extends CoreModel
{
    public function checkEntryExists($field, $entry)
    {
        $sql = "SELECT * FROM ". $this->table." WHERE ".$field ." = :entry ";
        $stmt = $this->db->prepare($sql);
        //$stmt->bindValue(":field", $field, \PDO::PARAM_STR);
        $stmt->bindValue(":entry", $entry, \PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);
        if(empty($result)) {
            return false;
        } else {
            return $result;
        }
    }
    public function addNewUser($data)
    {
        $sql = "INSERT INTO ".$this->table." (id, username, email, password, hash_email_confirm) 
        VALUES (NULL, :username, :email, :password, :hash_email_confirm);" ;
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":username", $data['username'], \PDO::PARAM_STR);
        $stmt->bindValue(":email", $data['email'], \PDO::PARAM_INT);
        $stmt->bindValue(":password", $data['password'], \PDO::PARAM_STR);
        $stmt->bindValue(":hash_email_confirm", $data['hash_email_confirm'], \PDO::PARAM_STR);
        $stmt->execute();
    }
}