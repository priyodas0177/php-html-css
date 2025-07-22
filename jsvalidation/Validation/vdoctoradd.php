<?php
session_start();
require 'Connection.php';

$firstnameErr= $lastnameErr=$doctortypeErr=$genderErr=" ";
$doctorfeeErr=$dateErr=$doctortimeErr=$emailErr=$phonenumberErr=" ";
$flag=true;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST['firstname'])){
        $firstnameErr="First Name is Required";
        $flag=false;
    }else{
        $_SESSION['fname']=$_POST['firstname'];
    }


    if(empty($_POST['lastname'])){
        $lastnameErr="Last Name is Required";
        $flag=false;
    }else{
        $_SESSION['lname']=$_POST['lastname'];
    }

    if(empty($_POST['doctortype'])){
        $doctortypeErr="Doctor Type is Required";
        $flag=false;
    }else{
        $_SESSION['dtype']=$_POST['doctortype'];
    }
    

    if(empty($_POST['gender'])){
        $genderErr="Gender is Required";
        $flag=false;
    }else{
        $_SESSION['gndr']=$_POST['gender'];
    }
    

    if(empty($_POST['doctorfee'])){
        $doctorfeeErr="Doctorfee is Required";
        $flag=false;
    }else{
        $_SESSION['dfee']=$_POST['doctorfee'];
    }

    if(empty($_POST['date'])){
        $dateErr="Date is Required";
        $flag=false;
    }else{
        $_SESSION['dte']=$_POST['date'];
    }

    if(empty($_POST['doctortime'])){
        $doctortimeErr="Doctor Time is Required";
        $flag=false;
    }else{
        $_SESSION['dtime']=$_POST['doctortime'];
    }

    if(empty($_POST['email'])){
        $emailErr=" Email is Required";
        $flag=false;
    }else{
        $_SESSION['dtime']=$_POST['email'];
    }

    if(empty($_POST['phonenumber'])){
        $phonenumberErr="Phone Number is Required";
        $flag=false;
    }else{
        $_SESSION['pnmbr']=$_POST['phonenumber'];
    }
    require "../Database/Ddoctoradd.php";
   
}
?>