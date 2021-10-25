<?php include 'myaction.php' ?>

<!DOCTYPE html>
<html>
<body>
<form action="process.php" method="POST">
	Delivery Person Name:<br>
	<input type="text" name="pName">
	<br><br/>
	Mobie Number: <br>
	<input type="text" name="mNumber">
	<br><br>
	  
	Email:<br>
	<input type="text" name="email">
	<br><br>
	  
    Address:<br>
	<input type="text" name="address">
	<br><br>





	<input type="submit" value="Submit" name="submit">
</form>
</body>
</html>

<br><!DOCTYPE html>
<html>
<body>

<button onclick="goBack()">Back</button>

<script>
function goBack() {
  window.history.back();
}
</script>

</body>
</html>
