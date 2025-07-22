<?php
require "Connection.php";
session_start();


$emailphoneErr= $passwordErr=" ";
$flag=true;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST['emailphone'])){
        $emailphoneErr="Email or Phone number is Required";
        $flag=false;
    }else{
        $_SESSION['emphn']=$_POST['emailphone'];
    }
    if(empty($_POST['password'])){
        $passwordErr="Password is Required";
        $flag=false;
    }else{
        $_SESSION['passw']=$_POST['password'];
    }

    require "../Database/Dlogin.php";

}
?>