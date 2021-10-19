<?php
ini_set('display_errors', 1);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "AIUB";
$error="";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{

    if(isset($_POST['insert'])){
        if (empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['rad']) || empty($_POST['MobileNumber']) || empty($_POST['DateOfBirth']) || empty($_POST['Hsc']) || empty($_POST['Ssc']) || empty($_POST['course']) || empty($_POST['enroll']) || empty($_POST['academic'])){
            echo "Please Fill Up The Form";
        }
        else
        {
        $fname=$_POST['firstname'];
        $lname=$_POST['lastname'];
        $email=$_POST['email'];
        $gender=$_POST['rad'];
        $mobile=$_POST['MobileNumber'];
        $dob=$_POST['DateOfBirth'];
        $hsc=$_POST['Hsc'];
        $ssc=$_POST['Ssc'];
        $course=$_POST['course'];
        $enroll=$_POST['Enroll'];
        $academic=$_POST['Academic'];

        $connection = new db();
        $conobj=$connection->OpenCon();
        $sql = "INSERT INTO New_Student (First_Name, Last_Name, Email, Gender, Mobile, DateOfBirth, HSC, SSC, Course, Enroll, Academic_Year)
        VALUES ($fname, $lname, $email, $gender, $mobile, $dob, $hsc, $ssc, $course, $enroll, $academic)";

        if ($conn->query($sql) === TRUE) {
        echo "Created Successfully";
        }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        }
        
    }
    else{
        header("location : infoform.php");
    }
}
$conn->close();
?>