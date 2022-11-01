<!DOCTYPE html>
<html>
<body>
<html lang="en">

<head>
 
</head>
<center>
<img src="Modified.png">
<h1 > MYNTRA - Online Shopping Platform  </h1>
<h4>Myntra Main and Registered Office Address: 3rd Floor, AKR Tech Park, 7th Mile, Krishna Reddy Industrial Area, Kudlu Gate, Bangalore 560068, Karnataka, India.
<br>Myntra Main Main and Registered Office Phone Number: +91-80-43540100</h4></center>
<?php
$host="localhost";
$user="root";
$password="";
$connect=mysqli_connect($host,$user,$password,"myntra");
print("<br>");

$query = "SELECT*FROM sales";
$res = mysqli_query($connect,$query);
while($row = mysqli_fetch_array($res))
{
	$Name=$row["name"];
	$Dname=$row["dname"];
	$Email=$row["email"];
	$Address=$row["address"];
	$Phno=$row["phoneno"];

}



mysqli_close($connect)

?>
<body>
 
<pre>
<p><h2>
    Customer Name           :	<?php echo("$Name");?> <br>									
    Delivery Name           :	<?php echo("$Dname");?><br>
    Price                   :    750<br>
    Email                   :	<?php echo("$Email");?><br> 
    Address                 :	<?php echo("$Address");?> <br>
    Phone number            :	<?php echo("$Phno");?><br>
    Date of Order	    :   <?php echo  date("d-m-Y");?><br>
    Day of Order	    :   <?php echo  date("l"); ;?><br>
    Time of Order	    :   <?php echo date("h:i:sa");?><br></h2>
   
  <h3><center>Thanks for Shopping At Myntra</center></h3></p></pre>
   
		<center>
        <button type="button" onclick="window.print()">Generate Bill</button><br></center> 
     



</body>
</html>
