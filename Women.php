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
<a href="HOME PAGE.php" target="_blank"><h2><strong>Home Page</a>
</center>
<?php
$host="localhost";
            $user="root";
            $password="";
$connect=mysqli_connect($host,$user,$password,"myntra");
$query = "SELECT * FROM feedback_women  ";
$res = mysqli_query($connect,$query);
$i=0;
echo"<center>";

print("<h1>CUSTOMER REVIEWS</h1>");?>
<table border="5" width="1500" height="250px" >
<tr bgcolor="" height="50">
<th>CUSTOMER NAME</th>
<th>LEVIS</th>
<th>West Side</th>
<th>H&M</th>
<th>GUCCI</th>
</tr>
<?php
while($row = mysqli_fetch_assoc($res))
{
$a[$i]=$row["Customer_Name"];
$b[$i]=$row["Levis"];
$c[$i]=$row["Westside"];
$d[$i]=$row["H&M"];
$e[$i]=$row["GUCCI"];
print("<tr><th>$a[$i]</th>");
print("<th>$b[$i]</th>");
print("<th>$c[$i]</th>");
print("<th>$d[$i]</th>");
print("<th>$e[$i]</th></tr>");
print("<br>");
$i=$i+1;
	
}
?>
</html>