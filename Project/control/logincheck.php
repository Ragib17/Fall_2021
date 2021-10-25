<?php

session_start(); 

 $message="";
// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}

if ($_POST['username']=="project" && $_POST['password']=="123456")
{

$_SESSION["username"] = $_POST['username'];
$_SESSION["password"] = $_POST['password'];

}
else
{
    $message = "username or password can not be authenticated";

}
 

}


?>