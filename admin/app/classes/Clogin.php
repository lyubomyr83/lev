<?php
namespace app\classes;

class Clogin extends Mlogin
{
    public function getAutorisation($login,$pass)
    {
        $result = $this->prepareAutorisation($login);
        $row = mysqli_fetch_assoc($result);

        $pass_from_db = $row['password'];

        if($pass == $pass_from_db)
        {
            echo "Добро пожаловать ".$row['name'];
        }
        else
        {
            echo "Ошибка авторизации";
        }
    }
}