<?php
   $servername = "localhost";
   $username = "root"; 
   $db_name ="pat_db";
   $conn = new mysqli($servername, $username, "", $db_name);
   
   if($conn -> connect_error) {
    echo "No";
   }
   echo"";
?>