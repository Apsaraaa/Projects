<html>
<head>

</head>
<center>
<body style="background-image:url(pic10.jpg);background-position:40% 40%;background-repeat:no-repeat;">
</br></br>
<form action="staff.php" method="post">
<label><h2>Doctor's name: </h2></label>
<input type="text" name="name" placeholder="enter doctor's name">
<input type="submit" name="doc_sub" value="Add Doctor">
</form>

<form action="staff.php" method="post">
<label><h2>Doctor's name: </h2></label>
<input type="text" name="name1" placeholder="enter doctor's name">
<input type="submit" name="doc_del" value="Delete Doctor">
</form>



<?php



if(isset($_POST['doc_sub'])){
	$con=mysqli_connect("localhost","root","anika1312")or die (mysqli_error());
    mysqli_select_db($con,"hmsdb");
	$name=$_POST['name'];
	$sql="INSERT INTO doctb(Name)VALUES('$name');";
	$res=mysqli_query($con,$sql);
	if($res){
		echo "<script>alert('Your Doctor has been added.')</script>";
		echo "<script>window.open('staff.php','_self')</script>";
	}
}
if(isset($_POST['doc_del'])){
	$con=mysqli_connect("localhost","root","anika1312")or die (mysqli_error());
    mysqli_select_db($con,"hmsdb");
	$name=$_POST['name1'];
	$sql="DELETE FROM doctb WHERE Name='$name'";
	$result=mysqli_query($con,$sql);
	if($result){
		echo "<script>alert('Your Doctor has been deleted.')</script>";
		echo "<script>window.open('staff.php','_self')</script>";
	}
}
		
?>

</body>
</center>
</html>