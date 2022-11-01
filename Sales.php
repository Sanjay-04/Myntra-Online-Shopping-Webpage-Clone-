<html>
    <head>
        <title>Billing</title>
     
        <form  name="bill" action="Sales Action.php">
    </head>
    <body>
	    <style>
                 body {
                 background-image: url('Sales Pic.jpg');
                 background-repeat: no-repeat;
                 background-attachment: fixed; 
                 background-size: 100% 100%;
             }
             </style>
        <center>
        <H3>NAME:</H3><input type="text"  name="a" required pattern="[A-Za-z]+"></input><br><br>
		<h3>DELIVERY TO:</h3><input type="text"  name="b" required pattern="[A-Za-z]+"></input><br><br>
        <H3>EMAIL ID:</H3><input type="text"  name="c" required ></input><br><br>
        <h3>ADDRESS:</h3><input type="text" name="d" required></input><br><br>
		<h3>PHONE NUMBER:</h3><input type="text" name="e" required></input><br><br>
        <button class="submit" type="submit">Confirm Details</button>
        </center>
    </form>
    </body>
</html>