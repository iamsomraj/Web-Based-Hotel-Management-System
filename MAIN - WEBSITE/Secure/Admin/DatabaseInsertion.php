
<?php
        
session_start();



if(isset($_SESSION["isformfill"]))
{
    if(($_SESSION["isformfill"]) == 2)
    {

?>


<?php


    $_SESSION["finalise"] = "false";
    $name=$_SESSION['name'];
    $email=$_SESSION['email'];
    $contact=$_SESSION['contact'];
    $address=$_SESSION['address'];
    $roomtype=$_SESSION['roomtype'];
    $checkin=$_SESSION['checkin'];
    $checkout=$_SESSION['checkout'];
    $noofdays=$_SESSION['noofdays'];
    $price=$_SESSION['price'];
    $pay=$_SESSION['pay'];
    $id=null;
    include("connection.php");
        
    $query="insert into booking values('$id','$name','$email','$contact','$address','$roomtype','$checkin','$checkout','$noofdays','$price','$pay')";
    $result=mysqli_query($link,$query);
    $databaselog = "";
    if($con)
    {
        
                $databaselog .= "<p>Connection Success!</p>";

    }
    else
    {
                $databaselog .= "<p>Connection Failed!</p>";
                header("location:prebook.php");

    }
    if($result)
    {
            $_SESSION["isformfill"]++;

            header("location:confirmbook.php");
    }
    else
    {
            $databaselog .= "<p>Data is not inserted!</p>";
            header("location:prebook.php");


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

