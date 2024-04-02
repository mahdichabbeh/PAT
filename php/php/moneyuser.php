<?php

   include("connection.php");

if(isset($_POST['submit']))
{
    session_start();
    if (isset($_SESSION['fullname'])) {
        $fullname = $_SESSION['fullname'];}

    if (isset($_SESSION['email'])) {
            $email = $_SESSION['email'];}
    
    if (isset($_SESSION['number'])) {
        $number = $_SESSION['number'];}

    $amount=$_POST['amount'];
    $pay=$_POST['pay'];
    $object=$_POST['goal'];
    $project=$_POST['project'];
    $intention=$_POST['entity'];
 


   
        $sql="INSERT INTO `money_donation`(`FullName_MD`, `Email_MD`, `Number_MD`, `Amount`, `Payment`, `Object`, `Project`, `Intention_MD`) 
        VALUES ('$fullname','$email','$number','$adress','$amount','$pay','$object','$project','$intention')";

        $result = mysqli_query($conn, $sql);
  
    
        header("location: servicesuser.php");
        
    

}
?>