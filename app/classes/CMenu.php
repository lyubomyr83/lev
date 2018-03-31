<?php
namespace app\classes;


class CMenu extends MMenu
{
    public function Menu()
    {
        $result = $this->getMenu();
        while ($row = mysqli_fetch_assoc($result))
        {
            $menu[] = $row;
        }

        return $menu;
    }
}