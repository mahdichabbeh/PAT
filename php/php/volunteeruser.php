
             
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

    $adress=$_POST['adresse'];
    $date=$_POST['date'];
    $event=$_POST['event'];
    $reason=$_POST['message'];


   
   
        $sql="
        INSERT INTO `volunteer`(`FullName`, `Email`, `Number`, `Adress`, `Date`, `Event`, `Reason`) 
        VALUES ('$fullname','$email','$number','$adress','$date','$event','$reason')";
        $result = mysqli_query($conn, $sql);
  

        header("location: servicesuser.php");
        
    

}

?>
