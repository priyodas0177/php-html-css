<?php
$conn=new mysqli("localhost","root","","data");
if($conn->connect_error){
    die("Connection Failed : ".$conn->connect_error);
}
// echo" Database Connection successfully(Connection.php)";
?>