<?php
$connect = mysqli_connect("localhost", "root", "", "hilton");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM confirmbooking
	WHERE name LIKE '%".$search."%'
	OR email LIKE '%".$search."%' 
	OR contact LIKE '%".$search."%' 
	OR address LIKE '%".$search."%' 
	OR roomtype LIKE '%".$search."%' 
	OR checkin LIKE '%".$search."%' 
	OR checkout LIKE '%".$search."%' 
	OR noofdays LIKE '%".$search."%' 
	OR payment LIKE '%".$search."%' 
	OR paymethod LIKE '%".$search."%' 
	";
}
else
{
	$query = "SELECT * FROM confirmbooking ORDER BY id";
}
$result = mysqli_query($connect, $query);


if($result)
{
    $output .= '<p class="display-4 text-center text-capitalize text-dark">Confirm Booking Table<p>';

	$output .= '<div class="table-responsive">
					<table class="table table bordered table-dark table-striped">
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
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["id"].'</td>
				<td>'.$row["name"].'</td>
				<td>'.$row["email"].'</td>
				<td>'.$row["contact"].'</td>
				<td>'.$row["address"].'</td>
				<td>'.$row["roomtype"].'</td>
				<td>'.$row["checkin"].'</td>
				<td>'.$row["checkout"].'</td>
				<td>'.$row["noofdays"].'</td>
				<td>'.$row["payment"].'</td>
				<td>'.$row["paymethod"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo '';
}
?>