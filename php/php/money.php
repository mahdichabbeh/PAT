<?php

   include("connection.php");

if(isset($_POST['submit']))
{
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $adress=$_POST['adresse'];
    $amount=$_POST['amount'];
    $pay=$_POST['pay'];
    $object=$_POST['goal'];
    $project=$_POST['project'];
    $intention=$_POST['entity'];
 


   
        $sql="INSERT INTO `money_donation`(`FullName_MD`, `Email_MD`, `Number_MD`, `Adress_MD`, `Amount`, `Payment`, `Object`, `Project`, `Intention_MD`) 
        VALUES ('$fullname','$email','$number','$adress','$amount','$pay','$object','$project','$intention')";

        $result = mysqli_query($conn, $sql);
  
    
        header("location: services.php");
        
    

}
?>
<?php

include("connection.php");

if(isset($_POST['submit']))
{
 $fullname=$_POST['fullname'];
 $email=$_POST['email'];
 $number=$_POST['number'];

 $amount=$_POST['amount'];
 $pay=$_POST['pay'];
 $object=$_POST['goal'];
 $project=$_POST['project'];
 $intention=$_POST['entity'];




     $sql="INSERT INTO `money_donation`(`FullName_MD`, `Email_MD`, `Number_MD`, `Amount`, `Payment`, `Object`, `Project`, `Intention_MD`) 
     VALUES ('$fullname','$email','$number','$amount','$pay','$object','$project','$intention')";

     $result = mysqli_query($conn, $sql);

 
     header("location: services.php");
     
 

}
?>