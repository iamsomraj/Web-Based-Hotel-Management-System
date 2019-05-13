<?php
    session_start();
    if(isset($_SESSION['isformfill']))
    {
        
            if($_SESSION['isformfill'] == 2 || $_SESSION['isformfill'] == 1 )
            {
                
         include("connection.php");
                $count=mysqli_num_rows(mysqli_query($link,"select * from booking"));
             $sql="Select * from `booking`";       

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

<body style="background-color:#fafafa;">
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
    
    <div class="container">
        <div class="intro">
            </br>
            <h1 class="text-center">Dashboard</h1>
            <p class="lead text-center text-capitalize">From booking for our clients to acquiring details about Hilton's finance, everything you will need is here under one umbrella!</p>
        </div>
    </div>
    <div class="features-blue" style="margin:0;">
        <div class="container">
            <div class="row">
                <p class="lead text-center">&nbsp; &nbsp;</p>
            </div>
            <div class="row features">
                <div class="col-sm-6 col-md-4 item"><i class="fa fa-edit icon"></i>
                    <h1 class="text-capitalize name"><a href="admin-booking.php">Booking</a></h1>
                    <p class="lead text-capitalize">You have received  <?php echo $count; ?> bookings! <a href="admin-booking.php">Check booking!</a></p>
                </div>
                <div class="col-sm-6 col-md-4 item"><i class="fa fa-clock-o icon"></i>
                    <h3 class="name"><a href="admin-history.php">History</a></h3>
                    <p class="lead text-capitalize">Want to know about previous bookings?<a href="admin-history.php"> check History!</a></p>
                    <div class="btn-group" role="group"></div>
                </div>
                <div class="col-sm-6 col-md-4 item"><i class="fa fa-list-alt icon"></i>
                    <h3 class="name"><a href="admin-rooms.php">Rooms</a></h3>
                    <p class="lead text-capitalize">Want to know about occupancy of rooms? <a href="admin-rooms.php">check Rooms!</a></p>
                </div>
                <div class="col-sm-6 col-md-4 item"><i class="fa fa-rupee icon"></i>
                    <h3 class="name"><a href="admin-finance.php">Finance</a></h3>
                    <p class="lead text-capitalize">Want to know about economic status? <a href="admin-finance.php">check Finance!</a></p>
                </div>
                <div class="col-sm-6 col-md-4 item"><i class="fa fa-pencil icon"></i>
                    <h3 class="name"><a href="prebook.php">Reservation</a></h3>
                    <p class="lead text-capitalize">For Bookings from the admin panel!<a href="prebook.php"> Go to reservation!</a></p>
                </div>
                <div class="col-sm-6 col-md-4 item"><i class="fa fa-user icon"></i>
                    <h3 class="name"><a href="admin-admin.php">Admins</a></h3>
                    <p class="lead text-capitalize">Want to manage the admin control and access?<a href="admin-admin.php"> Visit Admins!</a></p>
                </div>
            </div>
        </div>
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

                
