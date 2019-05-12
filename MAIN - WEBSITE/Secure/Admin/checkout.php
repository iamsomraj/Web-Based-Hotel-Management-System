<?php
$r="";
if(isset($_GET["id"]))
{
    if($_GET["id"] > 0)
    {
        include("connection.php");

        $id = $_GET["id"];
        $sql="SELECT * FROM `confirmbooking` WHERE `confirmbooking`.`id` = \"$id\" " ;
        $resultone=mysqli_query($link,$sql);
        $name="";
        $email="";"";
        $contact="";
        $address="";
        $roomtype="";
        $checkin="";
        $checkout="";
        $noofdays="";
        $payment="";
        $paymethod="";
        $customerid="";
            
        while($row=mysqli_fetch_array($resultone))
        {
                  
                $id=$row['id'];
                $name=$row['name'];
                $email=$row['email'];
                $contact=$row['contact'];
                $address=$row['address'];
                $roomtype=$row['roomtype'];
                $checkin=$row['checkin'];
                $checkout=$row['checkout'];
                $noofdays=$row['noofdays'];
                $payment=$row['payment']; 
                $paymethod=$row['paymethod'];
                $customerid=$row['customerid'];
            


                break;
        
            
        }
        
  
        
  
        $query = "INSERT INTO `completebooking` (`id`, `name`, `email`, `contact`, `address`, `roomtype`, `checkin`, `checkout`, `noofdays`, `payment`, `paymethod`, `customerid`) VALUES (NULL, \"$name\", \"$email\",\"$contact\", \"$address\", \"$roomtype\", \"$checkin\", \"$checkout\", \"$noofdays\", \"$payment\", \"$paymethod\", \"$id\")";

        $resulttwo = mysqli_query($link,$query);
    
        $query = "DELETE FROM `confirmbooking` WHERE `confirmbooking`.`id` = ".$id;
        $result = mysqli_query($link,$query);                                         

        header("location:admin-history.php");

        

        
                                                                       
                
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