<?php
namespace app\classes;


class MContent
{
    public function getContent($id)
    {
        $sql = "SELECT id, content, title from pages WHERE id='{$id}'";
        $result = Db::getInstance()->sql($sql);
        return $result;
    }
}