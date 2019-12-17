<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Warehouse &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900|Oswald:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo m-0 p-0"><a href="index.html" class="mb-0">Wonder Fitness</a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                
                <li><a href="#about-section" class="nav-link">About</a></li>
                <li><a href="#news-section" class="nav-link">Updates</a></li>
                <li><a href="#contact-section" class="nav-link">Contact</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
    </div> <!-- .site-wrap -->

 <div class="site-block-wrap2">
    <!-- <div class="owl-carousel with-dots"> -->
      <!-- <div class="site-blocks-cover overlay overlay-2" style="background-image: url(images/fit0.jpg);" data-aos="fade" id="home-section"> -->


        <div class="container2">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-6 mt-lg-5 text-center">

            <!-- p { -->
  <!-- margin-top: 100px; -->
  <!-- margin-bottom: 100px; -->
  <!-- margin-right: 150px; -->
  <!-- margin-left: 80px; -->
<!-- } -->
             <!-- <h1 class="text-shadow">Get Your Fitness Remmedy Here</h1> -->
              <!-- <p class="mb-5 text-shadow">Getting regular workouts done may not be good enough for full body fitness. Get a personlized guideline on a routine for quick and effective fitness results </p> -->
              <!-- <p><a href="#" target="_blank" class="btn btn-primary px-5 py-3">Get Started</a></p> -->
              
            <!-- </div> -->
          <!-- </div> -->
        <!-- </div> -->
  
        
      <!-- </div>   -->
  <!-- <form method="POST" action="index.html">
      <button type="submit" class="btn btn-primary btn-md text-white" name='submit'> GO BACK</button> 
      <div class="row form-group">
                 <div class="col-md-12"> -->
                   <!-- <input type="submit" name='submit' value="GO BACK" class="submit">  -->
                <!-- </div> -->
              <!-- </div> -->
            <!-- </form> --> 

<?php 
require_once("config.php");

if(isset($_POST['submit'])){
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    // $userName=$_POST['uname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    
    if(!empty($_POST['fname']) && !empty($_POST['fname']) && !empty($_POST['email']) && !empty($_POST['email']))
    {

        
    $check_duplicate_user="SELECT fname FROM users WHERE fname='$firstName'";

    $result=mysqli_query($conn,$check_duplicate_user);
    $count =  mysqli_num_rows($result);

    if($count>0){
      //  <script> window.alert("You are already registered user");</script>
         echo "<p>You are already subscribed!!!</p>";
        
    }else{
//require_once("contact_mail.php“);
$sql="INSERT INTO `users`(`fname`, `lname`, `uname`, `email`, `subject`, `message`) VALUES ('".$firstName."','".$lastName."','".$userName."''".$email."', '".$subject."', '".$message."')";
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
    echo "Please fill Name and Email";
    }}



?>

</div>
</div>

  </div> <!-- .site-wrap -->

  <a href="#top" class="gototop"><span class="icon-angle-double-up"></span></a> 

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
    
</body>

</html>