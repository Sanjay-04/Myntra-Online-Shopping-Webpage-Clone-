<html>  
      <head> 
		
      </head>  
      <body>
	   <style>
            body {
            background:url(Sales Action Pic.jpg);
            background-size: 100%;
            background-repeat: no-repeat;
            }
        </style>
      
	  <?php
			$host="localhost";
			$user="root";
			$password="";
			$connect=mysqli_connect($host,$user,$password,"myntra");
				$name=$_GET['a'];
				$dname = $_GET['b'];
				$email= $_GET['c'];
				$address=$_GET['d'];
				$phoneno=$_GET['e'];
				$sql="INSERT INTO sales (name,dname,email,address,phoneno) VALUES ('$name','$dname','$email','$address','$phoneno')";
				$a=mysqli_query($connect,$sql);

			mysqli_close($connect)
		?>


<form action="Order Placed.php"><br>
<center><h2> You Have Successfully Entered All The Necessary Details! <br>Please Click Below To Continue</h2>
<button class="submit" type="submit">Submit</button></center>
</form>
</body>
</html>