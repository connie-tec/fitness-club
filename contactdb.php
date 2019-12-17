<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitness";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])){
$firstName=$_POST['fname'];
$lastName=$_POST['lname'];
$email=$_POST['email'];

$subject=$_POST['subject'];
$message=$_POST['message'];



$s="SELECT * FROM `users` WHERE email='$email'";
$result=mysqli_query($conn,$s);
$num=mysqli_num_rows($result);

if($num==1){
    echo "Email Address Already Taken";
}
else{
$sql = "INSERT INTO `users` (`fname`, `lname`, `email`, `subject` , `message`)
VALUES ('".$firstName."', '".$lastName."', '".$email."', '".$subject."','".$message."')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}}
}
$conn->close();
?>
