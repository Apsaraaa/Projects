<html>
<head>
<style>
h1{font-family:castellar;font-weight:bold;font-size:40px;text-align:center;color:#003300;}

table{font-size:20px;text-align:center;color:#003300;}
body{
	background-image:url(pic9.jpg);background-position:90% 90%;background-repeat:no-repeat;
}
</style>
</head>


<body>

<center>
<h1>Available doctors list </h2>

<?php

$count1=0;
$count2=0;
$count3=0;
$count4=0;
$count5=0;
$count6=0;
$count7=0;
$count8=0;
$count9=0;
$count10=0;

$con=mysqli_connect("localhost","root","anika1312")or die (mysqli_error());
mysqli_select_db($con,"hmsdb");
$sql="SELECT pdocapp FROM appoint ";
$mydata=mysqli_query($con,$sql);
 echo "<table border=1>
<tr>

<th>Name</th>
<th>Availability</th>
 </tr>  ";

while($record=mysqli_fetch_array($mydata)){
if($record['pdocapp']=="Rubaiya"){
   $count1++;
}
if($record['pdocapp']=="Mahbub"){
   $count2++;
}
if($record['pdocapp']=="Redwan"){
   $count3++;
}
if($record['pdocapp']=="Rezwan"){
   $count4++;
}
  if($record['pdocapp']=="Barisha"){
   $count5++;
} 
  if($record['pdocapp']=="Prome"){
   $count6++;
} 
  if($record['pdocapp']=="Tahsin"){
   $count7++;
} 
  if($record['pdocapp']=="Rajjak"){
   $count8++;
} 
  if($record['pdocapp']=="Siraj"){
   $count9++;
}   if($record['pdocapp']=="Bonhy"){
   $count10++;

}
}
 
   echo "<tr>";
	if($count1>5){
	echo "<tr>";
	echo "<td> Rubaiya </td>";  
	echo "<td>Not available</td>";
	echo "</tr>";
	}
   else{
	   echo "<tr>";
	echo "<td> Rubaiya </td>";  
	echo "<td> Available</td>";
	echo "</tr>";
   }
    echo "<tr>";
	if($count2>5){
	echo "<tr>";
	echo "<td> Mahbub </td>";  
	echo "<td>Not available</td>";
	echo "</tr>";
	}
   else{
	   echo "<tr>";
	echo "<td> Mahbub </td>";  
	echo "<td> Available</td>";
	echo "</tr>";
   }
    echo "<tr>";
	if($count3>5){
	echo "<tr>";
	echo "<td> Redwan </td>";  
	echo "<td>Not available</td>";
	echo "</tr>";
	}
   else{
	   echo "<tr>";
	echo "<td> Redwan </td>";  
	echo "<td> Available</td>";
	echo "</tr>";
   }
    echo "<tr>";
	if($count4>5){
	echo "<tr>";
	echo "<td> Rezwan </td>";  
	echo "<td>Not available</td>";
	echo "</tr>";
	}
   else{
	   echo "<tr>";
	echo "<td> Rezwan </td>";  
	echo "<td> Available</td>";
	echo "</tr>";
   }
    echo "<tr>";
	
	if($count5>5){
	echo "<tr>";
	echo "<td> Barisha </td>";  
	echo "<td>Not available</td>";
	echo "</tr>";
	}
   else{
	   echo "<tr>";
	echo "<td> Barisha </td>";  
	echo "<td> Available</td>";
	echo "</tr>";
   }
   if($count6>5){
	echo "<tr>";
	echo "<td> Prome </td>";  
	echo "<td>Not available</td>";
	echo "</tr>";
	}
   else{
	   echo "<tr>";
	echo "<td> Prome </td>";  
	echo "<td> Available</td>";
	echo "</tr>";
   }
   if($count7>5){
	echo "<tr>";
	echo "<td> Tahsin </td>";  
	echo "<td>Not available</td>";
	echo "</tr>";
	}
   else{
	   echo "<tr>";
	echo "<td> Tahsin </td>";  
	echo "<td> Available</td>";
	echo "</tr>";
   }
   if($count8>5){
	echo "<tr>";
	echo "<td> Rajjak </td>";  
	echo "<td>Not available</td>";
	echo "</tr>";
	}
   else{
	   echo "<tr>";
	echo "<td> Rajjak </td>";  
	echo "<td> Available</td>";
	echo "</tr>";
   }if($count9>5){
	echo "<tr>";
	echo "<td> Siraj </td>";  
	echo "<td>Not available</td>";
	echo "</tr>";
	}
   else{
	   echo "<tr>";
	echo "<td> Siraj </td>";  
	echo "<td> Available</td>";
	echo "</tr>";
   }if($count10>5){
	echo "<tr>";
	echo "<td> Bonhy </td>";  
	echo "<td>Not available</td>";
	echo "</tr>";
	}
   else{
	   echo "<tr>";
	echo "<td> Bonhy </td>";  
	echo "<td> Available</td>";
	echo "</tr>";
   }
   
   mysqli_close($con);

?>
</center>
</body>
</html>