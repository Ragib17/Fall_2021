<!DOCTYPE html>
<html>
<body>
<h1>"Sell Product"</h1><br>
<h3>"Please fill all the sections"</h3>
<hr>

<form action="process.php" method="POST">
	Product name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; <input type="text" name="pName">
	<br><br/>
	Product Number: &nbsp; &nbsp; &nbsp; <input type="text" name="pNumber">
	<br><br>
	  
	Production Date: &nbsp; &nbsp; &nbsp; <input type="text" name="pDate">
	<br><br>

    Expire Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; <input type="text" name="eDate">
	<br><br>

    Quantity:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; <input type="text" name="quantity">
	<br><br>




	<input type="submit" value="Add">
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