<?php
$validatefirstname="";
$validatelastname="";
$validateemail="";
$validatepassword="";
$validatecheckbox="";
$validateradio="";
$validateage="";
$validatefile="";
$L1=$L2=$L3="";
$firstname=$lastname=$age=$email=$pwd=$Programmer="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$firstname=$_REQUEST["firstname"];
$lastname=$_REQUEST["lastname"];
$age=$_REQUEST["age"];
$pwd=$_REQUEST["pwd"];
$email=$_REQUEST["email"];
if(empty($_REQUEST["firstname"]) || (strlen($_REQUEST["firstname"])<5))
{
    $validatefirstname= "You must enter your first name ||";

}
else
{
    $firstname=$_REQUEST["firstname"];
    $validatefirstname = "First Name is: ".$firstname;
}

if(empty($_REQUEST["lastname"]) || (strlen($_REQUEST["lastname"])<5))
{
    $validatelastname= "You must enter your last name||";

}
else
{
    $lastname=$_REQUEST["lastname"];
    $validatelastname = " || Last name is : ".$lastname;
}

if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="you must enter email ||";
}
else{
    $validateemail= " || your email is\n ".$email;
}

 if(!preg_match("/(?=.*[@#$%^&+=]).*$/", $pwd)) {
                $pwd = "No password given||";
            } 
            if(strlen($pwd) < 8) {
                $pwd = "Password must contain atleast 8 characters||";
            }
            else {
                $validatepassword= " || your password is ".$pwd;
            }
if(!isset($_REQUEST["Languague1"])&&!isset($_REQUEST["Languague2"])&&!isset($_REQUEST["Languague3"]))
{
    $validatecheckbox = "please select at least one checkbox ||";
    
}
else{
   if(isset($_REQUEST["Languague1"]))
   {
       $L1= $_REQUEST["Languague1"];
   }
   if(isset($_REQUEST["Languague2"]))
   { 
       $L2= $_REQUEST["Languague2"];
   }
   if(isset($_REQUEST["Languague3"]))
   {
    $L3= $_REQUEST["Languague3"];
   }
}
if(isset($_REQUEST["Programmer"]))
{
    $validateradio= $_REQUEST["Programmer"];
}
else{
    $validateradio= "please select at least one radio ||";
}

}
?>