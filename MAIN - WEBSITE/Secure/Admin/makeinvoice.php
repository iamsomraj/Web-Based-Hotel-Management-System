<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
 
<?php

 $name = $email =$contact= $address= $roomtype =$checkin= $checkout =$noofdays =$payment= $paymethod= $customerid = "";
if(isset($_GET["id"]))
{

    $id = $_GET["id"];
    include("connection.php");
    $sql="Select * from completebooking where completebooking.customerid =  $id";
    $result=mysqli_query($link,$sql);
    
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
        
   
        break;
    }
?>





<script>
  
var name = "<?php echo $name;?>";
var email = "<?php echo $email;?>";
var contact = "<?php echo $contact?>";
var address = "<?php echo $address?>";
var roomtype = "<?php echo $roomtype?>";
var checkin = "<?php echo $checkin?>";
var checkout = "<?php echo $checkout?>";
var noofdays = "<?php echo $noofdays?>";
var payment = "<?php echo $payment?>";
var paymethod = "<?php echo $paymethod?>";
var customerid = "<?php echo $customerid?>";


           
    
var today = new Date();
var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();

var doc = new jsPDF();
var line = 20;
doc.setFont("times");
doc.setFontStyle("bold");
doc.text('INVOICE NUMBER:\t\t\t\t\t\t\t\t'+customerid, 20, line, null, null, 'left');
line = line + 10;
doc.text('____________________________________________________', 20, line, null, null, 'left');
line = line + 10;
doc.text('Hilton Hotels Private Limited\nThe Walk\nJumeirah Beach\nDubai, UAE', 20, line, null, null, 'left');
line = line + 30;
doc.text('____________________________________________________', 20, line, null, null, 'left');
line = line + 10;
doc.text('Date '+date+"\nTime: "+time, 20, line, null, null, 'left');
line = line + 20;      
doc.text('____________________________________________________', 20, line, null, null, 'left');
doc.setFontStyle("normal");
line = line + 10;      
doc.text("\n\nBooking ID: "+customerid+"\n\nType of Room: "+roomtype+"\n\nName: "+name+"\n\nEmail: "+email+"\n\nContact: "+contact+"\n\nAddress: "+address+"\n\nCheck In: "+checkin+"\n\nCheck Out: "+checkout+"\n\nNumber of Days: "+noofdays+"\n\nTotal Price: "+payment+"\n\n---------------------------------------------------------", 20, line, null, null,'left');
line = line + 140;      
doc.text("\n\nRemarks: No Dues Are Left"+"\n\nThank You For Your Lovely Stay ", 20, line, null, null, 'left');   

doc.save();
window.location.replace("admin-history.php");
   
    
    
</script>
    

<?php

}
else
{
    header("location:admin-history.php");
}

?>
