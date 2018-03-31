<?php
namespace app\classes;


class CContent extends MContent
{
    public function Content($id)
    {
        $result = $this->getContent($id);
        $content = mysqli_fetch_assoc($result);
        return $content;
    }
}