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
$query = "SELECT * FROM feedback_kids  ";
$res = mysqli_query($connect,$query);
$i=0;
echo"<center>";
print("<h1>CUSTOMER REVIEWS</h1>");?>
<table border="5" width="1500" height="250px" >
<tr bgcolor="" height="50">
<th>CUSTOMER NAME</th>
<th>GINNI AND JONY</th>
<th>CHEROKEE</th>
<th>PEPE JEANS</th>
</tr>
<?php
while($row = mysqli_fetch_assoc($res))
{
$a[$i]=$row["Customer_Name"];
$b[$i]=$row["Ginni_Jony"];
$c[$i]=$row["Cherokee"];
$d[$i]=$row["Pepe_Jeans"];

print("<tr><th>$a[$i]</th>");
print("<th>$b[$i]</th>");
print("<th>$c[$i]</th>");
print("<th>$d[$i]</th>");
print("<br>");
$i=$i+1;
	
}

?>

</html>