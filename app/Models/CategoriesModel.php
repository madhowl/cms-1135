<?php


namespace App\Models;


class CategoriesModel extends CoreModel
{
    public function getAllCategories()
    {
        $sql="SELECT *, (SELECT count(*) FROM articles WHERE  category_id= c.id ) as count FROM categories c";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        while($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $this->out[] = $row;
        }
        return $this->out;
    }

    public function getListCategories()
    {
        $sql="SELECT id, name FROM ".$this->table;
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        while($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $this->out[] = $row;
        }
        return $this->out;
    }
}