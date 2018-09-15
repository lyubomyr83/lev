<?php
/**
 * Created by PhpStorm.
 * User: NUC2
 * Date: 05.05.2018
 * Time: 16:38
 */

namespace app\classes;


class CGallery extends MGallery
{
    public function receiveAllGallerys()
    {
        $gallerys = $this->getAllGallerys();

        while ($row = mysqli_fetch_assoc($gallerys))
        {
            $gallery[$row['id']]= $row['gallery_name'];
        }

        return $gallery;
    }

    public function receiveGallery($id)
    {
        $gallerys = $this->getGallery($id);

        while ($row = mysqli_fetch_assoc($gallerys))
        {
            $gallery[]= $row['image'];
        }

        return $gallery;
    }
}