<?php

        include("connection.php");


if(isset($_GET["id"]))
{
    if($_GET["id"] > 0)
    {
        $id = $_GET["id"];
        $query = "DELETE FROM `booking` WHERE `booking`.`id` = ".$id;
        $result = mysqli_query($link,$query);
        header("location:admin-booking.php");
                                                    
                                                                    
    }
    else
    {
        header("location:admin-home.php");
    }
    
}
else
{
    header("location:admin-home.php");
}


?>