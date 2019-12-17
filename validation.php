<?php

session_start();

$conn= mysqli_connect('localhost','root','','fitness');

mysqli_select_db($conn, 'registration');

$userName = $_POST['uname'];
$password = $_POST['password'];


$s = "select * from `registration` where uname='$userName' &&  password='$password'";

$result = mysqli_query($conn,$s);
$num=mysqli_num_rows($result);

if($num==1){
    
    header('location:index.html');

}

else{
     echo "Invalid Credentials";
      header('location:Registration.php');
}

?>