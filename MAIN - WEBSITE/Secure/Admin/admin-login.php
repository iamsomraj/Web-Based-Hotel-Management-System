<?php
    session_start();
    $_SESSION["isformfill"] = 0;
    $username=$password="";
    $loginfail = 0;
    
    if(isset($_SESSION["loginfail"]))
    {
        if($_SESSION["loginfail"])
        {
            $loginfail = 1;
            $_SESSION["loginfail"] = false;
        }
    }

    if(isset($_POST['submit']))

    {
        
        
        $username=trim($_POST['username']);
        $password=trim($_POST['password']);
      
        if($username==""){
            $error="You Did Not Enter Username!";
            $code=1;
        }
            
        elseif($password==""){
            $error="You Did Not Enter Your Password!";
            $code=2;
        }
        
        else
        {
            $_SESSION['username']=$username;
            $_SESSION['password']=$password;
            $_SESSION["isformfill"]++;
            header('location:alogin.php');
        }
    }
?>
<!DOCTYPE html>
<html style="background-image:url(&quot;../assets/img/background-sm.jpg&quot;);">

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
    <link rel="stylesheet" href="../assets/css/DashBoard-light-boostrap1.css">
    <link rel="stylesheet" href="../assets/css/DashBoard-light-boostrap2.css">
    <link rel="stylesheet" href="../assets/css/DashBoard-light-boostrap4.css">
    <link rel="stylesheet" href="../assets/css/DashBoard-light-boostrap3.css">
    <link rel="stylesheet" href="../assets/css/Carousel-Hero.css">
    <link rel="stylesheet" href="../assets/css/DashBoard-light-boostrap.css">
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

<body style="background-color:rgba(250,250,250,0);">
    <div class="container">
        <div class="login-card"><img src="../assets/img/avatar_2x.png" class="profile-img-card">
            <p class="profile-name-card"> </p>
            <form class="form-signin" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"><span class="reauth-email">
                <?php 
                    
                        
                        if(isset($_POST["submit"]) and isset($error))

                            {
                            
                            echo "<div class=\"alert alert-danger\" role=\"alert\">$error</div>"; 
                            }
                     
                        if(isset($loginfail) and $loginfail == 1 )

                            {
                            
                            echo "<div class=\"alert alert-danger\" role=\"alert\">Wrong Email Or Password Entered!</div>"; 
                            }
                        
                        
                        
                    ?>
               
                </span><input class="form-control" type="text" name="username" placeholder="Username" autofocus="" id="inputEmail" value="<?php if(isset($username)){echo $username;}?>"<?php if(isset($code) && $code==1){echo "class=error";}?>><input class="form-control" type="password" name="password"  placeholder="Password" id="inputPassword" value="<?php if(isset($password)){echo $password;}?>"<?php if(isset($code) && $code==2){echo "class=error";}?>>

                <div
                    class="checkbox">
                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"></div>
        </div><button class="btn btn-primary " type="submit" name="submit">Sign in</button></form>
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

</html>