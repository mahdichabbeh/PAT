<?php
  include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <video autoplay loop muted plays-inline class="bgvideo">
        <source src="../assets/background-video.mp4" type="video/mp4">
    </video>
    <div class="container">
        <form action="login.php" method="post" name="myForm" onsubmit="return validateForm()">
            <div class="form-container">
                <div class="login-form">
                    <div class="title">Login</div>
                    <div class="inputboxes">
                        <div class="inputbox">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <input type="email" placeholder="someone@example.com" name="email" id="name">
                        </div>
                        <span id="fullnameError" class="error"></span>
                        <div class="inputbox">
                            <i class="fa fa-key" aria-hidden="true"></i>
                            <input type="password" placeholder="Enter your password" name="password" id="passwrd" >
                            <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toogle()"></i>
                        </div>
                        <span id="passwdError" class="error"></span>
                        <div class="text2"> <a href="#"> Forgot Password? </a> </div>
                        <div class="bouton inputbox">
                            <input type="submit" value="submit" name="submit">
                        </div>
                        <div class="text">
                            dont have an account ? <a href="registration.php"> Signup now </a> 
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

<script src="../js/login.js"></script>
</html>