<?php
require 'Connection.php';
session_start();


$firstnameErr= $lastnameErr= $emailErr= " ";
$genderErr= $phonenumberErr= $passwordErr=$confirmpasswordErr=" ";
$flag=true;

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST['firstname'])){
        $firstnameErr="Name is Required";
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

    if(empty($_POST['gender'])){
        $genderErr="gender required";
        $flag=false;
    }else{
        $_SESSION['gndr']=$_POST['gender'];
    }

    if(empty($_POST['phonenumber'])){
        $phonenumberErr="phonenumber required";
        $flag=false;
    }else{
        $_SESSION['phone']=$_POST['phonenumber'];
    }

    if(empty($_POST['password'])){
        $passwordErr="password required";
        $flag=false;
    }else{
        $_SESSION['pass']=$_POST['password'];
    }

    if(empty($_POST['confirmpassword'])){
        $confirmpasswordErr="confirmpassword required";
        $flag=false;
    }else{
        $_SESSION['cpass']=$_POST['confirmpassword'];
    }

    if($flag){
        
        $Firstname=$_SESSION['fname'];
        $Lastname=$_SESSION['lname'];
        $Email=$_SESSION['mail'];
        $Gender=$_SESSION['gndr'];
        $Phone=$_SESSION['phone'];
        $Password=$_SESSION['pass'];
        $Confirmpassword=$_SESSION['cpass'];
       

        if($Password==$Confirmpassword)
        {

            // $query="INSERT INTO datatable(firstname, lastname, email,gender, phone, password,confirmpassword) 
            // VALUES('$Firstname','$Lastname','$Email','$Gender','$Phone','$Password','$Confirmpassword')";
            // mysqli_query($conn,$query);

            require "../Database/Dtaregistration.php";
                  
           
        }
        else{
            echo"..Password not match ..";

        }

     }
}


?>