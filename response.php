
<?php 
require_once("config.php");

if(isset($_POST['submit'])){
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    // $userName=$_POST['uname'];
    $userName = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    
    if(!empty($_POST['fname']) && !empty($_POST['fname']) && !empty($_POST['email']) && !empty($_POST['email']))
    {

        
    $check_duplicate_user="SELECT fname FROM registration WHERE fname='$firstName'";

    $result=mysqli_query($conn,$check_duplicate_user);
    $count =  mysqli_num_rows($result);

    if($count>0){
      //  <script> window.alert("You are already registered user");</script>
         echo "<p>You are already subscribed!!!</p>";
        
    }else{
//require_once("contact_mail.php“);
$sql="INSERT INTO `registration`(`fname`, `lname`, `uname`, `email`, `password`) VALUES ('".$firstName."','".$lastName."','".$userName."''".$email."', '".$password."')";
if($conn->query($sql)){
    echo "<p>Thank you! We will contact you</p>";
}
else
{
    die('There was an error running the query [' . $conn->error . ']');
}
    }
     
    }
    else
    {
    echo "Please fill all details";
    }}



?>

