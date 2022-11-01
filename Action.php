<html>
    <head>
        <style>
            body {
            background: url(cit1.jpg);
            background-size: 100%;
            background-repeat: no-repeat;
            }
        </style>
    </head>
    <body>
    `    <?php
            // Connect to the database
            $host="localhost";
            $user="root";
            $password="";
			
            $connect=mysqli_connect($host,$user,$password,"myntra");
            
            // Get the submitted form control data values 
        
            $mail=$_GET['mailid'];
            $pass=$_GET['password'];
            $sql="INSERT INTO signin(Email, Password ) VALUES ('$mail', '$pass')";
            if (mysqli_query($connect,$sql))
               header("Location:HOME PAGE 2.php");
            mysqli_close($connect);
        ?>
    </body>
</html>