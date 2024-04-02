<?php

   include("connection.php");

if(isset($_POST['submit']))
{
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $number=$_POST['number'];
    $birth=$_POST['birth'];
    $sexe=$_POST['sexe'];


    $sql = "SELECT *
             FROM signup 
             WHERE UserName= '$username' ";

    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count != 0){
        echo "<script>";
        echo 'alert("Username already exists. Retry Again!")';
        echo "</script>";
    }

    else {

        $sql="INSERT into signup (`FullName`,`Email`,`UserName`,`Password`,`Number`,`DateOfBirth`,`Sex`) values('$fullname','$email','$username','$password','$number','$birth','$sexe')";
        $result = mysqli_query($conn, $sql);
  

        header("location: loginform.php");
        
    }

}
?>