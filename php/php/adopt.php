<?php

   include("connection.php");

if(isset($_POST['submit']))
{
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $name=$_POST['aname'];
    $animal=$_POST['animal'];
  
 

   
        $sql="INSERT INTO `adoption`(`FullName`, `Email`, `Number`, `Animal`, `AnimalName`)
         VALUES ('$fullname','$email','$number','$animal','$name')";

        $result = mysqli_query($conn, $sql);
  
    
        header("location: services.php");
        
    

}
?>