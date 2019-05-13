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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
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

    <?php
        
             include("connection.php");
             $sql="Select * from completebooking";
             $result=mysqli_query($link,$sql);
              $labelstring = $sellingprice = $actualprice = $profit = "";
                $tap = $tsp = $tp = 0; 
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
                
                $tap = $tap + round($payment*0.65);
                $tsp = $tsp + $payment;
                $tp = $tp + ($payment - round($payment*0.65));
              
                $actualprice .= round($payment*0.65)." "; 
                $sellingprice .= $payment." "; 
                $profit .= ($payment-round($payment*0.65))." "; 
                $labelstring .= $id."->".str_replace(' ', '',$name)." ";

              }
        
                $tap .= " "; 
                $tsp .= " ";
                $tp .= " "; 
        


?>
            
   
        
        
        
        
        
        


    
    <div class="container">
            </br>
    </br>
        <p class="text-center text-dark text-capitalize display-4">bar comparison</p>
        <canvas id="myChart"></canvas>
            </br>
    </br>
        <p class="text-center text-dark text-capitalize display-4">line area comparison</p>
        <canvas id="myChartnew"></canvas>
    </br>
    </br>
        <p class="text-center text-dark text-capitalize display-4">Pie comparison</p>
        <canvas id="myChartnewnew"></canvas>

    </div>
 
    
  <script>
    let myChart = document.getElementById('myChart').getContext('2d');
    let myChartnew = document.getElementById('myChartnew').getContext('2d');
    let myChartnewnew = document.getElementById('myChartnewnew').getContext('2d');

    let label = "<?php echo $labelstring;?>";
    let labelarray = label.split(" ");
    labelarray = labelarray.slice(0,(labelarray.length-1));
    
    let actual = "<?php echo $actualprice;?>";
    let actualarray = actual.split(" ");
    actualarray = actualarray.slice(0,(actualarray.length-1));    
      
      
    let selling = "<?php echo $sellingprice;?>";
    let sellingarray = selling.split(" ");
    sellingarray = sellingarray.slice(0,(sellingarray.length-1));
      
      
    let profit = "<?php echo $profit;?>";
    let profitarray = profit.split(" ");
    profitarray = profitarray.slice(0,(profitarray.length-1));
      
      
    let totalactual = "<?php echo $tap;?>";
    let totalactualarray = totalactual.split(" ");
    totalactualarray = totalactualarray.slice(0,(totalactualarray.length-1));    
      
    let totalselling = "<?php echo $tsp;?>";
    let totalsellingarray = totalselling.split(" ");
    totalsellingarray = totalsellingarray.slice(0,(totalsellingarray.length-1));       
      
      
    let totalprofit = "<?php echo $tp;?>";
    let totalprofitarray = totalprofit.split(" ");
    totalprofitarray = totalprofitarray.slice(0,(totalprofitarray.length-1));   

      
      
    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Arial';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#777';

    let massPopChart = new Chart(myChart, {
      type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels: labelarray,
        datasets:[{
          label:'Selling Price',
          data: sellingarray,
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(255, 99, 132, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(255, 159, 64, 0.6)',
            'rgba(255, 99, 132, 0.6)'
          ],
          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        },
        {
          label:'Actual Price',
          data: actualarray,
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(255, 99, 132, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(255, 159, 64, 0.6)',
            'rgba(255, 99, 132, 0.6)'
          ],
          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
        ]
      },
      options:{
        title:{
          display:true,
          fontSize:50
        },
        legend:{
          display:true,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:50,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
    let massPopChartNew = new Chart(myChartnew, {
      
      type:'line', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels: labelarray,
        datasets:[{
          label:'Selling Price',
          data: sellingarray,
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(255, 99, 132, 0.6)'

          ],
          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        },
        {
          label:'Actual Price',
          data: actualarray,
          //backgroundColor:'green',
          backgroundColor:[
                'rgba(54, 162, 235, 0.6)'

          ],
          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }
                  
                  
        ,
        {
          label:'Profit',
          data: profitarray,
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(255, 159, 64, 0.6)',


          ],
          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
        ]
      },
      options:{
        title:{
          display:true,
          fontSize:50
        },
        legend:{
          display:true,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:50,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
    let massPopChartNewNew = new Chart(myChartnewnew, {
      type:'polarArea', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels: ['Total Selling Price','Total Actual Price', 'Total Profit'],
        datasets:[{
          label:'Total Selling Price',
          data: [totalsellingarray[0],totalactualarray[0],totalprofitarray[0]],
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(255, 99, 132, 0.6)',
            'rgba(54, 162, 235, 0.6)',

            'rgba(255, 159, 64, 0.6)'

,

          ],
          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        },
        
 
                  
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
        ]
      },
      options:{
        title:{
          display:true,
          fontSize:50
        },
        legend:{
          display:true,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:50,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
  </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>

 
</body>

</html>
<?php
}
else
    {
        header("location:admin-login.php");
    }
?>
