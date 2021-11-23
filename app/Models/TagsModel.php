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
        $sql = "INSERT INTO ".$this->table." (`id`, `name`, `deleted_at`) VALUES (NULL, :name, NULL);" ;
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":name", $data['name'], \PDO::PARAM_STR);
        $stmt->execute();
    }

    public function updateTag(array $data)
    {
        $sql = "UPDATE ".$this->table." SET name = :name WHERE tags.id = :id;" ;
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":id", $data['id'], \PDO::PARAM_INT);
        $stmt->bindValue(":name", $data['name'], \PDO::PARAM_STR);
        $stmt->execute();
    }

    public function deleteTag($id)
    {
        $time = time();
        $sql = "UPDATE ".$this->table." SET deleted_at = FROM_UNIXTIME(:time) WHERE tags.id = :id;" ;
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":id", $id, \PDO::PARAM_INT);
        $stmt->bindValue(":time", $time);
        $stmt->execute();
        //$stmt->debugDumpParams();
        //return  $time;
    }

    public function undeleteTag($id)
    {
        $sql = "UPDATE ".$this->table." SET deleted_at = '' WHERE tags.id = :id;" ;
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":id", $id, \PDO::PARAM_INT);
        $stmt->execute();
    }

}
