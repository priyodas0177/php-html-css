<?php
require 'Connection.php';
session_start();

if(isset($_POST["submit"])){
   
    $Email=$_POST["forgotemail"];
    $Password=$_POST["forgotpasswoord"];
    $result=mysqli_query($conn,"SELECT * FROM datatable WHERE email='$Email'");
    $row=mysqli_fetch_assoc($result);
    
    if($Email==$row['email']){
       
        
            echo"Success new pass";
            $update_query="UPDATE datatable SET password='$Password' WHERE email='$Email'";
            mysqli_query($conn,$update_query);
            
           
           

    }
    else{
        echo"Wrong Email";
    }
}
?>
<!DOCTYPE html>
<head>
    <body>
        <form action="" method="POST" novalidate autocomplete="off">
        <table>
            <fieldset>
                <legend>Forgot Password</legend>
                <label for="forgotemail" name="email">Enter Your Email</label>
                <input type="text" name="forgotemail"><br><br>

                <label for="forgotpasswoord" name="forgotpasswoord">Enter New Password</label>
                <input type="text" name="forgotpasswoord">
            </fieldset>
        </table><br>
        <button type="submit" name="submit">Submit</button>
    </body>
</head>