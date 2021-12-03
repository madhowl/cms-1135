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

    public function addNewArticle($data)
    {
        $sql = "INSERT INTO ".$this->table." (id, title, category_id, intro_text, intro_img, full_text, visit) VALUES (NULL, :title, :category_id, :intro_text, :intro_img, :full_text, :visit);" ;
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":title", $data['title'], \PDO::PARAM_STR);
        $stmt->bindValue(":category_id", $data['category_id'], \PDO::PARAM_INT);
        $stmt->bindValue(":intro_text", $data['intro_text'], \PDO::PARAM_STR);
        $stmt->bindValue(":intro_img", $data['intro_img'], \PDO::PARAM_STR);
        $stmt->bindValue(":full_text", $data['full_text'], \PDO::PARAM_STR);
        $stmt->bindValue(":visit", $data['visit'], \PDO::PARAM_STR);
        $stmt->execute();
    }
}