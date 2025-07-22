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
    if($flag){
        if(isset($_POST["submit"])){
            $Bloodtype=$_POST['bloodtype'];
            $Quantity=$_POST['quantity'];
        

            $query="SELECT quantity FROM blood_group WHERE bloodtype='$Bloodtype'";
            $quantity_result=mysqli_query($conn,$query);
            $row=mysqli_fetch_assoc($quantity_result); //array
        
            $old_quantity= $row['quantity'];
            $new_quantity=$old_quantity-$Quantity;

            $query_update="UPDATE  blood_group SET quantity='$new_quantity' WHERE bloodtype='$Bloodtype'";
            mysqli_query($conn,$query_update);
            
            
            echo"..Blood Remove Success..";
        }else{
            echo"Wrong query";
        }
            
    }
}
?>