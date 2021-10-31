<?php

namespace App\Models;

class CoreModel
{
    protected $table;
    protected $db;

    public function __construct($table)
    {
        $user   = DB_USER;
        $pass   = DB_PASSWORD;
        $host   = DB_HOST;
        $db     = DB_DATABASE;
        $this->db = new \PDO("mysql:dbname=$db;host=$host", $user, $pass);
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
}