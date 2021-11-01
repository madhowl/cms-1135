<?php

namespace App\Models;

use \PDO;

class CoreModel
{
    protected $table;
    /**
     * @var PDO
     */
    protected $db;
    public $out=array();

    public function __construct($table)
    {
        $user   = DB_USER;
        $pass   = DB_PASSWORD;
        $host   = DB_HOST;
        $db     = DB_DATABASE;
        $this->db = new PDO("mysql:dbname=$db;host=$host", $user, $pass);
        $this->db->exec("SET NAMES 'utf8'");
        $this->setTable($table);
    }

    /**
     * @param mixed $table
     */
    public function setTable($table): void
    {
        $this->table = $table;
    }

    /**
     * @return array
     */
    public function all()
    {
        $sql = "SELECT * FROM " . $this->table;
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        while($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $this->out[] = $row;
        }
        return $this->out;
    }


    /**
     * @param int $id
     * @return false|mixed
     */
    public function getById(int $id)
    {
        $sql = "SELECT * FROM ". $this->table." WHERE id= :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":id", $id, \PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);
        if(empty($result)) {
            return false;
        } else {
            return $result;
        }
    }


    /**
     * @param string $slug
     * @return false|mixed
     */
    public function getBySlug(string $slug)
    {
        $sql = "SELECT * FROM ". $this->table." WHERE slug= :slug";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":slug", $slug, \PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);
        if(empty($result)) {
            return false;
        } else {
            return $result;
        }
    }

    /**
     * @return integer количество записей в таблице
     */
    public function count()
    {
        $sql="SELECT count(*) AS c FROM ".$this->table;
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $count = $stmt->fetch(PDO::FETCH_OBJ);
        return $count->c;
    }
}