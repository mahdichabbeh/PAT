<?php
    include("connection.php");
    session_start(); 

    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "select * 
                from signup
                where Email = '$email' and Password = '$password'";

        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count ==1)
        {    
             $_SESSION['email'] = $email;
             $_SESSION['password'] = $password;
             $_SESSION['fullname'] = $row['FullName'];
             $_SESSION['username'] = $row['UserName'];
             $_SESSION['number'] = $row['Number'];
             $_SESSION['birth'] = $row['DateOfBirth'];
             $_SESSION['sexe'] = $row['Sex'];
             
            header("location: homeuser.php");
            
        }
        else 
        {
             echo "<script>" . "alert('Incorrect Email and/or password.');" . "</script>";
             
        }
    }

?>