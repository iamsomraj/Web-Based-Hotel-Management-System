<?php
    session_start();
    $_SESSION["isformfill"] = 0;
    $_SESSION["superiorcheck"]=1;
    $_SESSION["deluxecheck"]=1;
    $_SESSION["sdeluxecheck"]=1;
    $_SESSION["savercheck"]=1;
     $_SESSION["freesuperior"]=0;
    $_SESSION["freedeluxe"]=0;
    $_SESSION["freesdeluxe"]=0;
    $_SESSION["freesaver"]=0;
    

    $name=$email=$contact=$address=$roomtype=$checkin=$checkout="";

    if(isset($_POST['submit'])){
        $name=trim($_POST['name']);
        $email=trim($_POST['email']);
        $contact=trim($_POST['contact']);
        $address=trim($_POST['address']);
        $roomtype=trim($_POST['roomtype']);
        $checkin=$_POST["checkin"];
        $checkout=$_POST["checkout"];
      
        if($name==""){
            $error="Error : You Did Not Enter Your Name!";
            $code=1;
        }
            
        elseif($email==""){
            $error="Error : You Did Not Enter Your Email ID!";
            $code=2;
        }
        
         elseif(!preg_match("/^(\w+[\-\.])*\w+@(\w+\.)+[A-Za-z]+$/",$email)){
            $error="Error : You Did Not Enter Correct Email Address!";
            $code=2;
        }
        
        elseif($contact==""){
            $error="Error : You Did Not Enter Your Contact Number!";
            $code=3;
        }
        
        elseif(!preg_match("/^\d{10}$/",$contact)){
            $error="Error : You Did Not Enter Contact Number In 10 Digits!";
            $code=3;
        }
        elseif($address==""){
            $error="Error : You Did Not Enter Your Address";
            $code=4;
        }
        
        elseif($roomtype=="select"){
            $error="Error : You Did Not Select Any Type Of Room!";
            $code=5;
        }
        
        else
        {

            $_SESSION['name']=$name;
            $_SESSION['email']=$email;
            $_SESSION['contact']=$contact;
            $_SESSION['address']=$address;
            $_SESSION['roomtype']=$roomtype;
            $_SESSION['checkin']=$checkin;
            $_SESSION['checkout']=$checkout;
            $_SESSION["isformfill"]++;
            header('location:postbook.php');
        }
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Hotels At Ease</title>
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


    

<body  data-spy="scroll" data-target="#navbar-e" data-offset="300">
    <nav class="navbar navbar-light navbar-expand-md sticky-top" id="navbar-e" style="background-color:#ffffff;">
        <div class="container-fluid"><a class="navbar-brand" href="index.php">Hilton</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-2"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-2">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php#gallery">Gallery</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php#testimonial">Testimonials</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php#team">Team</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
    
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="form-group">
                <p></p>
            </div>
            <div class="form-group">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center mb-0">Room Booking</h1>
                    </div>
                    <div class="card-body">
                        <center><p class="card-text">Life's Better At Our Rooms!</p></center>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col">
                        
                    <?php 
                    
                        
                        if(isset($_POST["submit"]) and isset($error))

                            {
                            
                            echo "<div class=\"alert alert-danger\" role=\"alert\">$error</div>"; 
                            }
                        
                        
                    ?>

                    
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col"><input class="form-control form-control-lg" type="text" name="name" placeholder="Full Name" value="<?php if(isset($name)){echo $name;}?>"<?php if(isset($code) && $code==1){echo "class=error";}?>></div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col"><input class="form-control form-control-lg" type="text" name="email" placeholder="Email Address" value="<?php if(isset($email)){echo $email;}?>"<?php if(isset($code) && $code==2){echo "class=error";}?>></div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col"><input class="form-control form-control-lg" type="text" name="contact" placeholder="Contact Number" value="<?php if(isset($contact)){echo $contact;}?>"<?php if(isset($code) && $code==3){echo "class=error";}?>></div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col"><input class="form-control form-control-lg" type="text" name="address" placeholder="Home Town / City" value="<?php if(isset($address)){echo $address;}?>"<?php if(isset($code) && $code==4){echo "class=error";}?>></div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col">
                        <select class="form-control form-control-lg" name="roomtype">
                            <option value="select" selected="">Select Room Type</option>
                            <option value="Superior" <?php if(isset($roomtype) && $roomtype=="biggest"){echo 'selected="selected"';}?>>Superior - 4 persons</option>
                            <option value="Deluxe" <?php if(isset($roomtype) && $roomtype=="big"){echo 'selected="selected"';}?>>Deluxe - 3 persons</option>
                            <option value="Semi Deluxe" <?php if(isset($roomtype) && $roomtype=="medium"){echo 'selected="selected"';}?>>Semi Deluxe - 2 persons</option>
                            <option value="Saver" <?php if(isset($roomtype) && $roomtype=="small"){echo 'selected="selected"';}?>>Saver - 1 person</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-4"><input class="form-control form-control-lg" type="text" disabled="" readonly="" placeholder="Checkin"></div>
                    <div class="col-8"><input class="form-control form-control-lg" type="date" name="checkin" required=""></div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-4"><input class="form-control form-control-lg" type="text" disabled="" readonly="" placeholder="Checkout"></div>
                    <div class="col-8"><input class="form-control form-control-lg" type="date" name="checkout" required=""></div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col"><button class="btn btn-success btn-lg" name="submit" type="submit">Submit</button></div>
                    <div class="col"><button class="btn btn-danger btn-lg" type="reset">Reset</button></div>
                </div>
            </div>
        </form>
    
    </div>
    </div>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
     
                    <div class="col-sm-6 col-md-3 item text">
                        <h3>Hotel Information</h3>
                            <p>No Pets Are Allowed</p>
                            <p>Visa Assistance Available</p>
                            <p>Customizable Packages</p>
                            <p>Over 20 Restaurants and Diner</p>

                    </div>
                    <div class="col-md-6 item text">
                        <h3>Location</h3>
                        <p>The Walk</p>
                        <p>Jumeirah Beach Residence</p>
                        <p>Post Box 2431</p>
                        <p>Dubai,UAE</p>
                    </div>
                    <!--div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div-->
                </div>
                <p class="copyright">© Copyright 2019</p>
            </div>
        </footer>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>

</html>