<?php

        include("connection.php");


if(isset($_GET["id"]) && isset($_GET["roomtype"]))
{
    if($_GET["id"] > 0 &&  $_GET["roomtype"] != "")
    {
        $id = $_GET["id"];
        $roomtype = $_GET["roomtype"];
        $query = "DELETE FROM `booking` WHERE `booking`.`id` = ".$id;
        $result = mysqli_query($link,$query);
        
        $sql="UPDATE room SET vacant=vacant+1 where roomtype=\"$roomtype\" ";
        $result=mysqli_query($link,$sql);
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