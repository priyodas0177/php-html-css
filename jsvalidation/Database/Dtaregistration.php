<?php
 if($Password==$Confirmpassword)
 {

    // $query="INSERT INTO datatable(firstname, lastname, email,gender, phone, password,confirmpassword) 
    // VALUES('$Firstname','$Lastname','$Email','$Gender','$Phone','$Password','$Confirmpassword')";
    // mysqli_query($conn,$query);

    require "../Validation/connection.php";
    $sql=("INSERT INTO datatable(firstname, lastname, email,gender, 
    phone, password,confirmpassword) VALUES (?, ?, ?, ?, ?, ?, ?)");

    $result=mysqli_prepare($conn,$sql);
    if($result){
    mysqli_stmt_bind_param($result,"ssssiss",$Firstname,$Lastname,$Email,$Gender,$Phone,$Password,$Confirmpassword);
    mysqli_stmt_execute($result);
    echo"Registration Successfully...";
    
    }else{
    echo"query error";
    }
    header("location:Login.php");
           
    
 }
 else{
     echo"..Password not match ..";

 }
    
?>