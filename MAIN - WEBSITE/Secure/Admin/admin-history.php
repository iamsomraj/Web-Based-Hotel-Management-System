<?php
    session_start();
    if($_SESSION['isformfill']!=0)
    {
?>  


<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">

    <link rel="stylesheet" href="../assets/css/Carousel-Hero.css">

    <link rel="stylesheet" href="../assets/css/Features-Blue.css">
    <link rel="stylesheet" href="../assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="../assets/css/Features-Clean.css">
    <link rel="stylesheet" href="../assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="../assets/css/Header-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="../assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="../assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="../assets/css/Pretty-Header.css">
    <link rel="stylesheet" href="../assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="../assets/css/Responsive-Form.css">
    <link rel="stylesheet" href="../assets/css/Responsive-Form1.css">
    <link rel="stylesheet" href="../assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="../assets/css/Sidebar-Menu1.css">
    <link rel="stylesheet" href="../assets/css/sidebar.css">
    <link rel="stylesheet" href="../assets/css/sidebar1.css">
    <link rel="stylesheet" href="../assets/css/sticky-dark-top-nav-with-dropdown.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/Team-Boxed.css">
    <link rel="stylesheet" href="../assets/css/Testimonials.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md sticky-top bg-light" style="background-color:#ffffff;">
        <div class="container-fluid"><a class="navbar-brand" href="#">Admin Panel</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-2"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-2">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="admin-home.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="admin-search.php">Search</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="admin-booking.php">Booking</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="admin-history.php">History</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="admin-rooms.php">Rooms</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="admin-finance.php">Finance</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="prebook.php">Reservation</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="admin-admin.php">Admins</a></li>
                </ul><button class="btn btn-primary rounded ml-auto" type="submit"><a href="logout.php">Log Out</a></button></div>
        </div>
    </nav>
    
    
 <div class="container-fluid">
        
               </br>
         <div class="display-4 text-center text-capitalize">Booking History</div>
        </br>

          
         <table class="table table-responsive table-striped table-dark">
          <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Full Name</th>
                <th scope="col">Email Address</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Home Town/City</th>
                <th scope="col">Room Type</th>
                <th scope="col">Check In</th>
                <th scope="col">Check Out</th>
                <th scope="col">No.of Days</th>
                <th scope="col">Amount Payable</th>
                <th scope="col">Payment Method</th>
                <th scope="col">Customer-Booking ID</th>
                <th scope="col">Action</th>
            </tr>
          </thead>
             
            <?php
             include("connection.php");
             $sql="Select * from completebooking";
             $result=mysqli_query($link,$sql);
            ?>
             
            <?php
              
              while($row=mysqli_fetch_array($result))
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
                $customerid = $row["customerid"];
            ?>
             
            <tr>
                <th scope="row"><?php echo $id; ?></th>
                <td><?php echo $name; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $contact; ?></td>
                <td><?php echo $address; ?></td>
                <td><?php echo $roomtype; ?></td>
                <td><?php echo $checkin; ?></td>
                <td><?php echo $checkout; ?></td>
                <td><?php echo $noofdays; ?></td>
                <td><?php echo $payment; ?></td>
                <td><?php echo $paymethod; ?></td>
                <td><?php echo $customerid; ?></td> 
                 <th>
                <div class="btn-btn-primary">
                    <button type="button" class='btn btn-success bg-success btn-sm' role="button"><a class="text-white text-uppercase" href="makeinvoice.php?id=<?php echo $customerid;?>"  >Invoice</a></button>
                     </div>
                </th>
            </tr>
             
             
            <?php } ?>

    
          </tbody>
        </table>




    </div>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/DashBoard-light-boostrap2.js"></script>
    <script src="../assets/js/DashBoard-light-boostrap.js"></script>
    <script src="../assets/js/DashBoard-light-boostrap1.js"></script>
    <script src="../assets/js/DashBoard-light-boostrap4.js"></script>
    <script src="../assets/js/DashBoard-light-boostrap3.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="../assets/js/Sidebar-Menu.js"></script>
</body>

</html>
<?php
}
else
    {
        header("location:admin-login.php");
    }
?>