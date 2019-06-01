
<html>
<head>
<title>patient Registration</title>
<style>


h2{font-family:castellar;font-weight:bold;font-size:30px;color:#003300;}
</style>

<h2>Patient Info</h2>

</head>
<body style="background-image:url(pic6.jpg);background-position:90% 90%;background-repeat:no-repeat;" >
<a href='http://localhost/hos/hospital.html'><h3> Go back </h3> </a> 
<div id="container">

<div id="banner" style="text-align:center;color=blue">
</div>
<div id ="col">

<h3>Book an appointment</h2>
<form action="registration.php" method="post" required>
<label> First Name : </label>
<input type="text" name="pfname" required><br/><br/>
<label> Last Name : </label>
<input type="text" name="plname" required ><br/><br/>
<label> Email Id : </label>
<input type="text" name="pemail" required ><br/><br/>
<label> Contact no : </label>
<input type="text" name="pcontact" required><br/><br/>
<label> Doctor Appointment  : </label>
<select class="form-control" name="pdocapp" required>
<!-- <option value=" Rubaiya from 12pm to 2pm"> Rubaiya(surgery) from 12pm to 2pm</option><
<option value=" Mahbub from 4pm to 6pm"> Mahbub(orthopaedist) from 4pm to 6pm</option>
<option value=" Redwan from 8pm to 10pm"> Redwan(cardiologist) from 8pm to 10pm</option>
<option value=" Rezwan from 10pm to 12pm"> Rezwan (neorologist)from 10pm to 12pm</option>
<option value=" Barisha from 1pm to 3pm"> Barisha(Dermatologist) from 1pm to 3pm</option>
<option value=" Prome from 12pm to 2pm"> Prome(surgery) from 2pm to 4pm</option><
<option value=" Tahsin from 4pm to 6pm"> Tahsin(orthopaedist) from 6pm to 8pm</option>
<option value=" Rajjak from 8pm to 10pm"> Rajjak(cardiologist) from 12pm to 2pm</option>
<option value=" Siraj from 10pm to 12pm"> Siraj (neorologistlogist)from 1pm to 3pm</option>
<option value=" Bonhy from 1pm to 3pm"> Bonhy(Dermatologist) from 10pm to 12pm</option> -->
<?php display_doc(); ?>
</select></br></br>


<label> Payment status : </label>
<select class="form-control" name="ppayment" required>
<option value ="Payment by cash">Payment by cash</option>
<option value="Payment by credit card">Payment by credit card</option>
<option value="Future payment">Future payment</option>
</select></br>

</br>
<input type="submit" name="p_submit" value="Request Appointment">


</form>

</div>

</div>
<?php
 $con=mysqli_connect("localhost","root","anika1312")or die (mysqli_error());
mysqli_select_db($con,"hmsdb");
 if(isset($_POST['p_submit'])){
	$fname=$_POST['pfname'];
    $lname=$_POST['plname'];
    $email=$_POST['pemail'];
	$contact=$_POST['pcontact'];
	$docapp=$_POST['pdocapp'];
	$payment=$_POST['ppayment'];
	$query="insert into appoint(pfname,plname,pemail,pcontact,pdocapp,ppayment)values('$fname','$lname','$email','$contact','$docapp','$payment')";
	$record=mysqli_query($con,$query);
	if($record){
		echo "<script>alert('Request recorded.')</script>";
		echo "<script>window.open('registration.php','_self')</script>";
	}
	
}
function display_doc(){
$con=mysqli_connect("localhost","root","anika1312")or die (mysqli_error());
mysqli_select_db($con,"hmsdb");
$query="SELECT * FROM doctb";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result)){
	$name=$row['Name'];
	echo '<option value="'.$name.'">'.$name.'</option>';
}
}

?>
</body>
</html>


