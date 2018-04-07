<?php
namespace app\classes;


class Mlogin
{
    public function prepareAutorisation($login)
    {
        $sql = "SELECT password, name FROM users WHERE login='{$login}'";
        $result = Db::getInstance()->sql($sql);
        return $result;
    }

}