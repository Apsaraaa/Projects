<html>
<head>
<title>Admin login</title>

</head>
<body style="background:url('pic3.jpg') no-repeat; background-size:cover;">
<center>
<div class="container" style="width:300px;margin-top:100px;">
<div class="card">
<img src="pic5.jpg" class="card-img-top">
<div class="card-body">
<form action="Admin.php" method="post">
<label><h2>Username : </h2></label></br>
<input type="text" name="username" class="form-control" placeholder="enter username" ></br>
<label><h2> Password : </h2> </label></br>
<input type="password" name="password" class="form-control" placeholder="enter password"></br></br>
<input type="submit" name="submit" id="user1" class="btn btn-primary">
</form>
</div>

</div>

</div>
</center>
<?php
$con=mysqli_connect("localhost","root","anika1312")or die (mysqli_error());
mysqli_select_db($con,"hmsdb");
if(isset($_POST['username']) and isset($_POST['password'])){
$username=$_POST['username'];
$password=$_POST['password'];

$error= "";
$success= "";

if (isset($_POST['submit'])){
if($username == "admin"){
	if($password == "password"){
    $error= "";
    $success="<p style='color:blue;font-size:30px;'><strong>&nbsp &nbspWelcome Admin!!!</strong></p></br>";
	echo $success;
	header("Location:http://localhost/hos/admin-panel.php");
	}
	
	
	else{
	$error= "<p style='color:blue;font-size:30px;'><strong>&nbsp &nbsp Invalid Password!!</strong></p>";
    $success="";
	echo $error;
	
}
}
else{
	$error= " <p style='color:blue;font-size:30px;'><strong>&nbsp &nbsp Invalid username!!</strong></p>";
    $success="";
	echo $error;
}
};
};

		




?>

</body>
</html>