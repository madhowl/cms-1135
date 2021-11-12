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
}
