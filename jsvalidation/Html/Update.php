<?php
require 'Connection.php';
session_start();
$id=$_SESSION['id'];

$firstnameErr= $lastnameErr= $emailErr= $phonenumberErr=" ";
$flag=true;

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST['firstname'])){
        $firstnameErr="First Name is Required";
        $flag=false;
    }else{
        $_SESSION['fname']=$_POST['firstname'];
    }

    if(empty($_POST['lastname'])){
        $lastnameErr="Last name required";
        $flag=false;
    }
    else{
        $_SESSION['lname']=$_POST['lastname'];
    }

    if(empty($_POST['email'])){
        $emailErr="email required";
        $flag=false;
    }else{
        $_SESSION['mail']=$_POST['email'];
    }
    if(empty($_POST['phonenumber'])){
        $phonenumberErr="phonenumber required";
        $flag=false;
    }else{
        $_SESSION['phone']=$_POST['phonenumber'];
    }

    if($flag){
        if(isset($_POST["ok"])){
            $Firstname=$_POST["firstname"]; 
            $LastName=$_POST["lastname"];
            $Email=$_POST["email"];
            $PhoneNumber=$_POST["phonenumber"];
            $update_query="UPDATE datatable SET firstname='$Firstname',lastname='$LastName',
            email='$Email',phone='$PhoneNumber' WHERE id='$id'";
            mysqli_query($conn,$update_query);
            header("Location:Profile.php");
         
            echo"Update done";
            
         }
    }
}



?>
<!DOCTYPE html>

<head>
    <body>
        <form action="" method="POST" novalidation>
        <p><b> First Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :</b>
            <input type="text" id="firstname" name="firstname"> </p>
            <span class="error">* <?php echo $firstnameErr; ?> </span>
             
            <p><b> Last Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :</b>
            <input type="text" id="lastname" name="lastname" ></p>
            <span class="error">* <?php echo $lastnameErr; ?> </span>

            <p><b> Email &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</b>
            <input type="text" id="email" name="email" ></p>
            <span class="error">* <?php echo $emailErr; ?> </span>

            <p><b>Phone/Mobile &nbsp &nbsp &nbsp &nbsp &nbsp:</b>
            <input type="phone" id="phonenumber" name="phonenumber" ></p>
            <span class="error">* <?php echo $phonenumberErr; ?> </span><br><br>

            <button type="submit" name="ok">Ok</button><br><br>

            <button type="button" name="changepassword" onclick="location.href='ChangePassword.php'"> Change Password</button><br><br>
            <button type="button" name="update" onclick="location.href='Profile.php'"> Back</button>
        
    </body>
        

</head>