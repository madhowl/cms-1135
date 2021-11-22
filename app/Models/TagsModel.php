<?php

namespace App\Models;

class TagsModel extends CoreModel
{
    public function getAllTags()
    {
        $sql="SELECT * , (SELECT count(*) FROM article_tag WHERE  tag_id= t.id ) as count FROM tags t";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        while($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $this->out[] = $row;
        }
        return $this->out;
    }
    public function addNewTag($data)
    {

    }

    public function updateTag($id, $data)
    {

    }

    public function deleteTag($id)
    {
        $date = date_create();
        $time= date_timestamp_get($date);


        $sql = "UPDATE ".$this->table." SET 'deleted_at' = :time WHERE `tags`.`id` = :id;" ;
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":id", $id, \PDO::PARAM_INT);
        $stmt->bindValue(":time", $time, \PDO::PARAM_INT);
        $stmt->execute();
        return  $time;
    }

}
