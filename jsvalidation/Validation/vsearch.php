<?php
 
$searchboxErr=" ";

$flag=true;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST['searchbox'])){
        $searchboxErr="Type what you want!";
        $flag=false;
    }else{
        $_SESSION['sch']=$_POST['searchbox'];
    }
    
}
?>