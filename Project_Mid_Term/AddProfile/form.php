<!DOCTYPE html>
<html>
<body>

<h1>"Request to add profile"</h1><br>
<h3>"Please fill all the sections"</h3>
<hr>

<form action="process.php" method="POST">
	First name:<br>
	<input type="text" name="firstName">
	<br><br/>
	Last name:<br>
	<input type="text" name="lastName">
	<br><br>
	  
	Email:<br>
	<input type="text" name="email">
	<br><br>
	  
	Mobile:<br>
	<input type="text" name="mobile">
	<br><br>

    address<br>
	<input type="text" name="address">
	<br><br>

    Work Type (Part time/ Full)<br>
	<input type="workType" name="workType">
	<br><br>




	<input type="submit" value="Submit">
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
