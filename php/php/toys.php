<?php

   include("connection.php");

if(isset($_POST['submit']))
{
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $adress=$_POST['adresse'];
    $toys=$_POST['toys'];
    $carry=$_POST['carry'];
    $quantity=$_POST['quantity'];
    $description=$_POST['description'];
    $use=$_POST['use'];
    $date=$_POST['date'];
    $intention=$_POST['entity'];
 


   
        $sql="INSERT INTO `toys_donation`(`FullName_TD`, `Email_TD`, `Number_TD`, `Adress_TD`, `Toys`, `Carry_TD`, `Quantity_TD`, `Description_TD`, `Use_TD`, `Date_TD`, `Intention_TD`)
         VALUES ('$fullname','$email','$number','$adress','$toys','$carry','$quantity','$description','$use','$date','$intention')";

        $result = mysqli_query($conn, $sql);
  
    
        header("location: services.php");
        
    

}
?>