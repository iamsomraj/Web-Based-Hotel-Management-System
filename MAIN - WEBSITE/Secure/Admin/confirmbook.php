
<?php

session_start();



if(isset($_SESSION["isformfill"]))
{
    if(($_SESSION["isformfill"]) == 4)
    {
        $_SESSION["isformfill"] = 1;
        
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
    <link rel="stylesheet" href="assets/css/Carousel-Hero.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Responsive-Form.css">
    <link rel="stylesheet" href="assets/css/Responsive-Form1.css">
    <link rel="stylesheet" href="assets/css/sticky-dark-top-nav-with-dropdown.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Boxed.css">
    <link rel="stylesheet" href="assets/css/Testimonials.css">
    <link rel="stylesheet" href="assets/css/Pretty-Header.css">
</head>



<body style="background-color:#fcf3c1;" data-spy="scroll" data-target="#navbar-e" data-offset="300">
<nav class="navbar navbar-light navbar-expand-md sticky-top bg-light" style="background-color:#ffffff;">
        <div class="container-fluid"><a class="navbar-brand" href="#">Admin Panel</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-2"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-2">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="admin-home.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="admin-booking.php">Booking</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="admin-history.php">History</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="admin-rooms.php">Rooms</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="admin-finance.php">Finance</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="prebook.php">Reservation</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="admin-admin.php">Admins</a></li>
                </ul><button class="btn bg-w btn-primary ml-auto" type="submit"><a class="text-white" href="logout.php">Log Out</a></button></div>
        </div>
    </nav>
    
<div class="container">
  <!-- Content here -->
    
    
<div class="alert alert-success" role="alert">
    <p class="display-4 text-center">Booking Details</p>

    <p class="lead">You Booking has been confirmed!</p>
    <?php
        
       
        echo "<p class=\"lead\">Name - $name</p>";
        echo "<p class=\"lead\">Email - $email</p>";
        echo "<p class=\"lead\">Contact - $contact</p>";
        echo "<p class=\"lead\">Address - $address</p>";
        echo "<p class=\"lead\">Type of Room - $roomtype</p>";
        echo "<p class=\"lead\">Check In - $checkin</p>";
        echo "<p class=\"lead\">Check Out - $checkout</p>";
        echo "<p class=\"lead\">Number of Days - $noofdays</p>";
        echo "<p class=\"lead\">Total Price - $price</p>";
        echo "<p class=\"lead\">Payment Method - $pay</p>";
        echo "<p class=\"lead\">Please Keep Your Booking Details safe with you.</p>";
        echo "<p class=\"lead\">We May Need It In Future!</p>";        


    ?>
</div>
    
    
    
    
    
</div>
    
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>

</html>




<?php
        
            }
    else
    {
        header("location:admin-login.php");
    }


}
else
{
    header("location:admin-login.php");
}




?>