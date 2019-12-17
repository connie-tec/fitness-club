<?php

session_start();

$conn= mysqli_connect('localhost','root','','fitness');

mysqli_select_db($conn, 'registration');

$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$userName = $_POST['uname'];
$password = $_POST['password'];
$email = $_POST['email'];

$s = "select * from `registration` where uname='$userName'";

$result = mysqli_query($conn,$s);
$num=mysqli_num_rows($result);

if($num==1){
    echo"username already taken";

}

else{
    $reg="INSERT INTO `registration`(`fname`, `lname`, `uname`, `email`, `password`) VALUES ('".$firstName."','".$lastName."','".$userName."','".$email."','".$password."')";

mysqli_query($conn,$reg);
// echo"registration successful";
header('location:Registration.php');
}

?>