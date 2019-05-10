<?php
        
session_start();
$count=2;
if(isset($_SESSION["isformfill"]))
{
    if(($_SESSION["isformfill"]) == 1)
    {

?>


<?php

    $username=$_SESSION['username'];
    $password=$_SESSION['password'];
    include("connection.php");
    $query="select * from admin where user=\"$username\" and pass=\"$password\"";
    $result=mysqli_query($link,$query);
    $databaselog = "";
    if($link)
    {
        
                $databaselog .= "<p>Connection Success!</p>";

    }
    else
    {
                $databaselog .= "<p>Connection Failed!</p>";
                header("location:admin-login.php");

    }
    $row=mysqli_num_rows($result);
    if($row==1)
    {
            echo "Logged in successfully";
            $_SESSION["isformfill"]++;
            header("location:admin-home.php");
    }
    else
    {
            $databaselog .= "<p>Cannot log in!</p>";
            $_SESSION["loginfail"] = true;
            header("location:admin-login.php");
        
    }
        
        
?>


<?php
        
            }
    else
    {
        header("index.php");
    }


}
else
{
    header("index.php");
}




?>

