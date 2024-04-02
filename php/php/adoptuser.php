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

    $name=$_POST['aname'];
    $animal=$_POST['animal'];
  
 

   
        $sql="INSERT INTO `adoption`(`FullName`, `Email`, `Number`, `Animal`, `AnimalName`)
         VALUES ('$fullname','$email','$number','$animal','$name')";

        $result = mysqli_query($conn, $sql);
  
    
        header("location: servicesuser.php");
        
    

}
?>