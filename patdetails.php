<html>

<head>
<title>Patient details</title>
<style>
#container{width:1200px;height:400px;margin:0 auto;}

#banner{background:url("pic7.jpg") no-repeat; height:400px;background-size: 100% 100% }

h1{font-family:castellar;font-weight:bold;font-size:40px;text-align:center;color:#000080;}
input{font-size:20px;text-align:center;color:#000080;}
table{font-size:20px;text-align:center;color:#000080;}

}

</style>

</head>
<body >

<div id="container">

<div id="banner" style="text-align:center;color=blue"><h2></h2>
<div id="header">
<form action="patientsearch.php" method="post">
<input type="text" name="search" placeholder="enter contact">
<input type="submit" value="Search" name="patsearch">

</form>

</div>
</div>

</div>


<center>
<div id="table" style="background-color:#3399FF">


<?php
$con=mysqli_connect("localhost","root","anika1312")or die (mysqli_error());
mysqli_select_db($con,"hmsdb");
if (isset($_POST['update'])){

	$UpdateQuery="UPDATE appoint SET  ppayment='$_POST[ppayment]',pdocapp='$_POST[pdocapp]'  WHERE pcontact='$_POST[hidden]'";
    mysqli_query($con,$UpdateQuery);
};

$sql="SELECT * FROM appoint";
$mydata=mysqli_query($con,$sql);
echo "<table border=1>
<tr>

<th>pfname</th>
<th>plname</th>
<th>pemail</th>
<th>pcontact</th>
<th>pdocapp </th>
<th>ppayment</th>

</tr>";
while($record=mysqli_fetch_array($mydata)){
	echo "<form action=patdetails.php method=post>";
	echo "<tr>";
	
	echo "<td>" . $record['pfname'] . "</td>";
	echo "<td>" . $record['plname'] ."</td>";
	echo "<td>" . $record['pemail'] . "</td>";
    echo "<td>" . $record['pcontact'] . "</td>";
  
    echo "<td>" . "<input type=text name=pdocapp value=" . $record['pdocapp'] . " </td>";
	echo "<td>" . "<input type=text name=ppayment value=" . $record['ppayment'] . " </td>";
	echo "<td>" . "<input type=hidden name=hidden value=" . $record['pcontact'] . " </td>";
	echo "<td>" . "<input type=submit name=update value=update" . " </td>";
	
	echo "</tr>";
	echo "</form>";
}
echo "</table>";

mysqli_close($con);
echo "<form action='patdetails.php' method='post'>
<input type='submit' name='enter' value='Enter appointment'>
</form>";

if(isset($_POST['enter'])){
	echo "<script>alert('Appointment registered.')</script>";
		echo "<script>window.open('patdetails.php','_self')</script>";
	}
	
?>


	




</div>	
</center>
</body>
</html>












