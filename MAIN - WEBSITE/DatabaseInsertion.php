<?php
    session_start();

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
    
    $con=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($con,"hilton");
    $sql="insert into booking values('$id','$name','$email','$contact','$address','$roomtype','$checkin','$checkout','$noofdays','$price','$pay')";
    $result=mysqli_query($con,$sql);
    if($con)
            {
                echo "<p class='success'>"."Connected"."</p>";
                if($result)
                {
                    echo "<p class='success'>"."Data Inserted"."</p>";
                }
            }
                else
            {
                echo "<p class='message'>"."Not Connected"."</p>";
            }
    if(!$result)
    {
        echo die(mysqli_error($con));
    }
    session_destroy();
?>
