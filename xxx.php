


<?php
$userName=$_POST['uname'];
$password=$_POST['password'];
$error="";
$success="";

if(isset($_POST['submit'])){
    if($userName == 'admin'){
        if($password == "password"){

            $error='';
            $success='Welcome again!!';
        }
        else{
            $error="Invalid Password!!";
            $success="";
        }
    }
    else{
        $error="invalid username!!!";
        $success="Welcome again!!!";
    }
}
 ?>





<html>
    <head>
        <title>Login and registration</title>
     <link rel="stylesheet" href="style.css"> -->

    </head>

<body>

    <div class="login-page">
        <div class="form">

                
            <form class="register-form" method="POST" action="xxx.php">
                <h3 class="formtitle">REGISTER </h3>

                 <!-- <input type="subject" name="subject" id="subject" class="form-control"> -->
                <input type="text" placeholder="Enter First name" name="fname" required/>
                <input type="text" placeholder="Enter Last name" name="lname" required/>
                <input type="text" placeholder="Enter user name" name="uname" required/>
                <input type="text" placeholder="Enter email adress"name="email" required/>
                <input type="password" placeholder="Enter password"name="password" required/>
                <button> create</button>
            <p class="message"><a href="xxx.html"> Already registered?</a></p>
            </form>


            <form class="login-form" method="POST"action="index.html">
                <h3 class="formtitle">LOGIN</h3>
                    <input type="text" placeholder="Enter username" name="uname" required/>

                    <input type="password"name="password" placeholder="Enter password" required/>
                
                <button>login</button>
            <p class="message">Not registered?<a href="#">register</a></p>
            </form>
        </div>
    </div>

    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script>

    $('.message a').click(function(){
        $('form').animate({height:"toggle",opacity:"toggle"},"slow");
    });
    
</script>
</body>
</html>
