<?php
function db($sql)
{
    $connection = mysqli_connect("localhost", "php", 12345, "leva");

    if($sql)
    {
        $result = mysqli_query($connection, $sql);
    }
}
