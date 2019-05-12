<?php

if(isset($_POST["addadmin"]))
{

    if(isset($_POST["username"]) && isset($_POST["password"]))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $id = NULL;
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
            $query="INSERT INTO `admin` VALUES (\"$id\",\"$username\",\"$password\")";
            $result=mysqli_query($link,$query);
            if($result)
            {
                echo "Insertion is successful!";
                header("location:admin-admin.php?astatus=1");

            }
            else
            {
                echo "Insertion is not successful!";
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