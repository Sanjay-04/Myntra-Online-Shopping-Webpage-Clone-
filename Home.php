<html>
<head>
<style>
body {
  background: url("ReviewBg.jpg");
  background-size: 100%;
  background-repeat: no-repeat;
  }
</style>
</head>
<body style="background-color:HotPink">
<center>
<img src="Modified.png">
<h1 > MYNTRA - Online Shopping Platform  </h1>
</center>
<?php
$host="localhost";
            $user="root";
            $password="";
$connect=mysqli_connect($host,$user,$password,"myntra");
$query = "SELECT * FROM feedback_home  ";
$res = mysqli_query($connect,$query);
$i=0;
echo"<center>";
print("<h1>CUSTOMER REVIEWS</h1>");?>
<<table border="5" width="1500" height="250px" >
<tr bgcolor="" height="50">
<th>CUSTOMER NAME</th>
<th>ART AND DECOR</th>
<th>LAMPS AND LIGHTING</th>
<th>KITCHEN AND DINING</th>

</tr>
<?php
while($row = mysqli_fetch_assoc($res))
{
$a[$i]=$row["Customer_Name"];
$b[$i]=$row["Art_Decor"];
$c[$i]=$row["Lamps_Lighting"];
$d[$i]=$row["Kitchen_Dining"];
print("<tr><th>$a[$i]</th>");
print("<th>$b[$i]</th>");
print("<th>$c[$i]</th>");
print("<th>$d[$i]</th>");
print("<br>");
$i=$i+1;
	
}
?>
</html>