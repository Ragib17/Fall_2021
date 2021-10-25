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

<h3> <a href="../AddProfile/form.php"> Request to add profile</a></h3>
<h3><a href="../AddProduct/form.php"> Request to add product</a></h53<br>
<h3><a href="../Delivary/form.php"> Request to assign delivary man information</a></h53<br>
<h3><a href="../SellProduct/form.php"> Request to sell product</a></h53<br>

 <h3> <a href="../control/logout.php">logout</a></h3>

</body>
</html>

<?php


?>   
