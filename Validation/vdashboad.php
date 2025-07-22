<?php
session_start();
require 'Connection.php';
$id=$_SESSION["id"];
if(!empty($id)){
  
   $result=mysqli_query($conn,"SELECT * FROM datatable WHERE id=$id");
   $row=mysqli_fetch_assoc($result);
   //echo $id;

}
else{
    header("Location: Login.php");
}




?>