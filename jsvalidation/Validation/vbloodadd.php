<?php
require "Connection.php";
$quantityErr=" ";
$flag=true;

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST['quantity'])){
        $quantityErr="*Please Enter Quantity!";
        $flag=false;
    }else{
        $_SESSION['qnty']=$_POST['quantity'];
    }
    require "../Database/Dbloodadd.php";
    
}
    
?>