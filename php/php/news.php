<?php

include("connection.php");

if(isset($_POST['submit']))
{

 $text=$_POST['text'];
 



$sql="INSERT INTO `newsletter`(`Email_N`) VALUES ('$text')";
$result = mysqli_query($conn, $sql);
header("Location: contact.php");
     
 }


?>