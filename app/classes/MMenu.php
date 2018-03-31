<?php
namespace app\classes;


class MMenu
{
    public function getMenu()
    {
        $sql = "SELECT id, menu_icon, menu_name from pages";
        $result = Db::getInstance()->sql($sql);
        return $result;
    }

}