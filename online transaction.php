<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style1.css">
<script src="validate.js">  </script>
</head>
<body>
<style>
                 body {
                 background-image: url('Payment.png');
                 background-repeat: no-repeat;
                 background-attachment: fixed; 
                 background-size: 100% 100%;
             }
             </style>


<div class="order-placement-form">
<h2> Online Transaction </h2>

<div id="error_message"></div>
<form id="myform" onsubmit="Order Placed.php">

	
        <input type="text" placeholder="Card Holder Name" id="name"required pattern="[A-Za-z]+> <br>  <br>
	
	<input type="text" placeholder="Delivery Address" id="address"><br><br>
        <input type="text" placeholder="Card Number" id="number">  <br> <br>
      <input type="passsword" placeholder="CVV Number" id="cvvno">	<br><br>
	
<p> Expiry date(month/year) : </p>
<select name="months" id="months">
                                <option value="Jan">Jan</option>
                                <option value="Feb">Feb</option>
                                <option value="Mar">Mar</option>
                                <option value="Apr">Apr</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="Aug">Aug</option>
                                <option value="Sep">Sep</option>
                                <option value="Oct">Oct</option>
                                <option value="Nov">Nov</option>
                                <option value="Dec">Dec</option>
                            </select>
                            <select name="years" id="years">
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                            </select><br/><br/>



<a href="Sales.php"> PAY NOW </a>
</form>

</body>
</html>