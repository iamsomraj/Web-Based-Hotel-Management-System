
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
    if($roomtype=="Superior" && $_SESSION["superiorcheck"]==1)
    {
        $_SESSION["freesuperior"]--;
        $_SESSION["superiorcheck"]=0;
        header("location:room-updation.php");
    }
    else if($roomtype=="Deluxe" && $_SESSION["deluxecheck"]==1)
    {
        $_SESSION["freedeluxe"]--;
        $_SESSION["deluxecheck"]=0;
        header("location:room-updation.php");
    }
    else if($roomtype=="Semi Deluxe" && $_SESSION["sdeluxecheck"]==1)
    {
        $_SESSION["freesdeluxe"]--;
        $_SESSION["sdeluxecheck"]=0;
        header("location:room-updation.php");
    }
    else if($roomtype=="Saver" && $_SESSION["savercheck"]==1)
    {
        $_SESSION["freesaver"]--;
        $_SESSION["savercheck"]=0;
        header("location:room-updation.php");
    }
        else
        
    {
        
    $query="insert into booking values('$id','$name','$email','$contact','$address','$roomtype','$checkin','$checkout','$noofdays','$price','$pay')";
    $result=mysqli_query($link,$query);
    $databaselog = "";
    if($link)
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

