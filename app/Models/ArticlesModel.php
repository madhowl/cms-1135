<?php


namespace App\Models;


class ArticlesModel extends CoreModel
{
    public function getByCategoryId(int $id)
    {
        $sql = "SELECT * FROM ". $this->table." WHERE category_id= :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":id", $id, \PDO::PARAM_INT);
        $stmt->execute();
        while($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $this->out[] = $row;
        }
        return $this->out;
    }
}