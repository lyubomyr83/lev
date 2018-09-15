<?php
/**
 * Created by PhpStorm.
 * User: NUC2
 * Date: 05.05.2018
 * Time: 16:38
 */

namespace app\classes;


class MGallery
{
    public function getAllGallerys()
    {
        $sql = "SELECT * FROM gallery";
        $result = Db::getInstance()->sql($sql);
        return $result;
    }

    public function getGallery($id)
    {
        $sql = "SELECT * FROM gallery_images WHERE gallery_id='{$id}'";
        $result = Db::getInstance()->sql($sql);
        return $result;
    }
}