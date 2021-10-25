<?php
include('../control/logincheck.php');

if(isset($_SESSION['username'])){
header("location: pageone.php");
}
?>
<!DOCTYPE html>
<html>
<body>

<h2>..........................Login with the user name and password.................................</h2>

<form action="" method="post">
    <input type="text" name="username" placeholder="Enter your username" ><br><br>
    <input type="password" name="password" placeholder="Enter your password" ><br><br>
    <input name="submit" type="submit" value="LOGIN">
</form>
<br>
<?php echo $message; ?>

</body>
</html>