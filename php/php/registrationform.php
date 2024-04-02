<?php
  include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/register.css">
</head>

<body>
    <div class="container">
        <div class="cover">
            <div class="front">
                <img id="frontimg" src="../assets/regis-photo1.jpg">
                <div class="text">
                    <span class="text1"> Having an animal in your life makes you a better human</span>
                </div>
            </div>
        </div>
        <form action="registration.php" method="post" name="myForm" onsubmit="return validateForm()">
            <div class="form-container">
                <div class="signin-form">
                    <div class="why"><span class="google">
                        <span> <i class="fa fa-google" aria-hidden="true"></i> Sign up with Google </span>
                    </span>
                    <span class="google1">
                        <span> <i class="fa fa-facebook-official" aria-hidden="true"></i> Sign up with Facebook </span>
                    </span>
                    </div>
                    <p class="or">-OR-</p>
                    <div class="title">Sign Up</div>
                    <div class="inputboxes">
                        <span>
                            <div class="inputbox">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                <input type="text" placeholder="Full Name" id="name" name="fullname" >
                            </div>
                        </span>
                        <span id="fullnameError" class="error"></span>
                        <div class="inputbox">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <input type="email" placeholder="someone@example.com" id="email" name="email" >
                        </div>
                        <span id="emailError" class="error"></span>
                        <div class="inputbox">
                            <i class="fa fa-address-card" aria-hidden="true"></i>
                            <input type="text" placeholder="User Name" id="username" name="username" >
                        </div>
                        <span id="usernameError" class="error"></span>
                        <div class="inputbox">
                            <i class="fa fa-key" aria-hidden="true"></i>
                            <input type="password" placeholder="New Password" id="passwd" name="password"  >
                        </div>
                        <span id="passwdError" class="error"></span>
                        <div class="inputbox">
                            <i class="fa fa-phone-square" aria-hidden="true"></i>
                            <input type="text" placeholder="Number" id="phone" name="number" minlength="8" maxlength="8" >
                        </div>
                        <span id="phoneError" class="error"></span>

                        <p class="sexe">Date of Birth</p> 
                        <div class="date">
                            <input type="date" name="birth" >
                        </div>
                        <div class="intputbox">
                            <p class="sexe">sex</p>
                            <select name="sexe" >
                                <option value="m"> Male
                                <option value="f"> Female
                                <option value="p"> prefere not to say
                            <select >
                        </div>
                        <div class="bouton inputbox">
                            <input type="submit" value="submit" name="submit">
                        </div>
                        <div class="text">
                            already have an account ? <a href="loginform.php"> Login now </a> 
                        </div>
                    </div>
                </div>  
            </div>
        </form>
    </div>
    <script src="../js/registartion.js">
    </script>
</body>

</html>