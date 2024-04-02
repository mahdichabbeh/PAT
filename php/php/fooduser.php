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
    $animal = isset($_POST['species']) ? $_POST['species'] : [];

    $food=$_POST['food'];
    $quantity=$_POST['quantity'];
    $date=$_POST['date'];
    $carry=$_POST['carry'];
    $intention=$_POST['entity'];


   
   
        $sql="
        INSERT INTO `food_donation`(`FullName_FD`, `Email_FD`, `Number_FD`, `Animal_FD`, `FoodKind_FD`, `Quantity_FD`, `Date_FD`, `Carry_FD`, `Intention_FD`) 
        VALUES ('$fullname','$email','$number','$animal','$food','$quantity','$date','$carry','$intention')";
        $result = mysqli_query($conn, $sql);
  

        header("location: servicesuser.php");
        
    

}

?>
