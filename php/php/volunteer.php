<?php

   include("connection.php");

if(isset($_POST['submit']))
{
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $adress=$_POST['adresse'];
    $date=$_POST['date'];
    $event=$_POST['event'];
    $reason=$_POST['message'];


   
   
        $sql="
        INSERT INTO `volunteer`(`FullName`, `Email`, `Number`, `Adress`, `Date`, `Event`, `Reason`) 
        VALUES ('$fullname','$email','$number','$adress','$date','$event','$reason')";
        $result = mysqli_query($conn, $sql);
  

        header("location: services.php");
        
    

}

?>
