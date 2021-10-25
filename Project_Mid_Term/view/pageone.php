<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html>
<body>
<h2>..........................Welcome to home page for staff members.........................</h2>
<hr>

<h3> <a href="../AddProfile/form.php"> Request to add profile</a> or <a href="../AddProfile/data.json"> View all add profile requests</a></h3><br>
<h3><a href="../AddProduct/form.php"> Request to add product</a> or <a href="../AddProduct/data.json"> View all add product requests</a></h3><br>
<h3><a href="../Delivary/form.php"> Request to assign delivary man information</a> or <a href="../Delivary/data.json"> All requests for delivary man</a></h3><br>
<h3><a href="../SellProduct/form.php"> Request to sell product</a> or <a href="../SellProduct/data.json"> View all sell product requests</a></h3><br>

 <h3> <a href="../control/logout.php">logout</a></h3>

</body>
</html>

<?php


?>   
