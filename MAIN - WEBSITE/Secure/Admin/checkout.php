<?php
  include("connection.php");
$r="";
if(isset($_GET["id"])  && isset($_GET["roomtype"]))
{
    if($_GET["id"] > 0  &&  $_GET["roomtype"] != "")
    {
      

        $id = $_GET["id"];
        $roomtype = $_GET["roomtype"];
          
        
        
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

        //header("location:admin-history.php");
        
        
        //updating vacant rooms
        
        $sql="UPDATE `room` SET `vacant`=`vacant`+1 where `roomtype`=\"$roomtype\" ";
        $result1=mysqli_query($link,$sql);
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