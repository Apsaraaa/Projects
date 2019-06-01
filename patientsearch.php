<html>

<head>
</head>
<body style="background-image:url(pic6.jpg);background-position:80% 80%;background-repeat:no-repeat;">
<?php

if(isset($_POST['patsearch'])){
	$con=mysqli_connect("localhost","root","anika1312")or die (mysqli_error());
    mysqli_select_db($con,"hmsdb");
	$contact=$_POST['search'];
	$query="select * from appoint where pcontact='$contact' ";
	$res=mysqli_query($con,$query);
	echo "<div class 'card' >
	
	<div class='card-body' stye='background-color:#3498DB; color:#ffffff;'>
	<table border='2px' >
	
	<tr>
	<th>First Name </th>
	<th>Last Name </th>
	<th>Email id</th>
	<th>Contact </th>
	<th>Doctor Appointment </th>
	<th>Payment</th>
	</tr>
	
	<tbody>
	";
	
	while($row=mysqli_fetch_array($res)){
		$fname=$row['pfname'];
		$lname=$row['plname'];
	    $email=$row['pemail'];
	    $contact=$row['pcontact'];
	    $docapp=$row['pdocapp'];
		$ppayment=$row['ppayment'];
		echo "<tr>
<td>$fname</td>
<td>$lname</td>
<td>$email</td>
<td>$contact</td>
<td>$docapp</td>
<td>$ppayment</td>
</tr>";

	}
	echo "</tbody></table></div></div>";
}
?>
	
</body>
</html>		