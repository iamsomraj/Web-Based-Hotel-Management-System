<?php

if(isset($_POST["updateadmin"]))
{

    if(isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["id"]))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $id = $_POST["id"];
        include("connection.php");
        $databaselog = "";
        if($link)
        {

                    $databaselog .= "Connection Success!";

        }
        else
        {
                    $databaselog .= "Connection Failed!";
                    header("location:admin-admin.php");

        }
        $query="select * from admin where `admin`.`id` = \"$id\" ";
        $result=mysqli_query($link,$query);
        $row=mysqli_num_rows($result);
        if($row==1)
        {

            $query="UPDATE `admin` SET `user` = \"$username\", `pass` = \"$password\" WHERE `admin`.`id` = \"$id\"";
            $result=mysqli_query($link,$query);
            if($result)
            {
                echo "Updation is successful!";
                header("location:admin-admin.php?ustatus=1");

            }
            else
            {
                echo "Updation is not successful!";
                header("location:admin-admin.php");

            }
        }
        else
        {
                echo "User cannot be found!";
                header("location:admin-admin.php");

        }
        
    }
    else
    {
        echo "Invalid 3";
        header("location:admin-admin.php");


    }
}
else if(isset($_POST["deleteadmin"]))
{

    if(isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["id"]))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $id = $_POST["id"];
        include("connection.php");
        $databaselog = "";
        if($link)
        {

                    $databaselog .= "Connection Success!";

        }
        else
        {
                    $databaselog .= "Connection Failed!";
                    header("location:admin-admin.php");

        }
     

        $query="DELETE FROM `admin` WHERE `admin`.`id` = \"$id\" AND `admin`.`user` = \"$username\" AND `admin`.`pass` = \"$password\" ";
        $result=mysqli_query($link,$query);
        if($result)
        {
            echo "Deletion is successful!";
            header("location:admin-admin.php?ustatus=2");

        }
        else
        {
            echo "Deletion is not successful!";
            header("location:admin-admin.php");

        }
   
        
    }
    else
    {
        echo "Invalid 3";
        header("location:admin-admin.php");


    }
}
else
{
        echo "Invalid 1";
        header("location:admin-admin.php");

}

?>