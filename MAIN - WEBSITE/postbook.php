<?php
    session_start();
    if(isset($_SESSION['isformfill']))
    {
        
            if($_SESSION['isformfill'] == 1)
            {

?>


<?php
                
    $name=$_SESSION['name'];
    $email=$_SESSION['email'];
    $contact=$_SESSION['contact'];
    $address=$_SESSION['address'];
    $roomtype=$_SESSION['roomtype'];
    $checkin=$_SESSION['checkin'];
    $checkout=$_SESSION['checkout'];
    

                
    function numberofdays ( $firstdate, $lastdate )
    {
        $checkin = date_create($firstdate);
        $checkout = date_create($lastdate);
        $diff=date_diff($checkin,$checkout);
        $n = $diff->format('%d');
        return $n;
    }
                
    
    $noofdays=numberofdays($checkin,$checkout);
                
    
    $pay="";
    $price="4500";
    if(isset($_POST['submit'])){
        $pay=trim($_POST['pay']);

        if($roomtype=="select") {
                $error="Error : You Did Not Select Any Payment Option!";
                $code=10;
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
                $_SESSION['noofdays']=$noofdays;
                $_SESSION['price']=$price; 
                $_SESSION['pay']=$pay;
                $_SESSION["isformfill"]++;
                header('location:DatabaseInsertion.php');
            }
    }
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
    <div></div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="form-group">
                <p></p>
            </div>
            <div class="form-group">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center mb-0">Booking Second</h1>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
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
                    <div class="col"><input class="form-control form-control-lg" type="text" name="name" value="<?php echo "$name"; ?>" disabled="" readonly="" placeholder="Full Name"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col"><input class="form-control form-control-lg" type="text" name="email" value="<?php echo "$email"; ?>" disabled="" readonly="" placeholder="Email Address"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col"><input class="form-control form-control-lg" type="text" name="contact" value="<?php echo "$contact"; ?>" disabled="" readonly="" placeholder="Contact Number"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col"><input class="form-control form-control-lg" type="text" name="address" value="<?php echo "$address"; ?>" disabled="" readonly="" placeholder="Home Town / City"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col"><input class="form-control form-control-lg" type="text" name="roomtype" value="<?php echo "Type Of Room - "."$roomtype"; ?>" disabled="" readonly="" placeholder="Type of Room"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-6"><input class="form-control form-control-lg" type="text" value="Checkin" disabled="" readonly="" placeholder="Checkin"></div>
                    <div class="col-6"><input class="form-control form-control-lg" type="text" name="checkin" value="<?php echo "$checkin"; ?>" disabled="" readonly="" placeholder="dd-mm-yyyy"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-6"><input class="form-control form-control-lg" type="text" value="Checkout" disabled="" readonly="" placeholder="Checkout"></div>
                    <div class="col-6"><input class="form-control form-control-lg" type="text" name="checkout" value="<?php echo "$checkout"; ?>" disabled="" readonly="" placeholder="dd-mm-yyyy"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col"><input class="form-control form-control-lg" type="text" name="noofdays" value="<?php echo "No Of Days - "."$noofdays"; ?>" disabled="" readonly="" placeholder="Number of Days"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-6"><input class="form-control form-control-lg" type="text" value="Payment ₹ " disabled="" readonly="" placeholder="Payment ₹"></div>
                    <div class="col-6"><input class="form-control form-control-lg" type="text" name="price" value="<?php echo "$price"; ?>" disabled="" readonly="" placeholder="0000.00"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col"><select class="form-control form-control-lg" name="pay">
                        <option value="select" selected="">Select Payment Method</option>
                        <option value="Pay Now" <?php if(isset($pay) && $pay=="Pay Now"){echo 'selected="selected"';}?>>Pay Now</option>
                        <option value="Pay Later" <?php if(isset($pay) && $pay=="Pay Later"){echo 'selected="selected"';}?>>Pay Later</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col"><button class="btn btn-primary btn-lg" name="submit" type="submit">Book</button></div>
                    <div class="col"><button class="btn btn-danger btn-lg" type="submit">Cancel</button></div>
                </div>
            </div>
        </form>
    </div>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Company Name</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Company Name © 2017</p>
            </div>
        </footer>
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
                header("location:prebook.php");
            }
    }
    else
    {
        header("location:prebook.php");
    }
?>


?>