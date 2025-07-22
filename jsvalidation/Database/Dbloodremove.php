<?php
if($flag){
        if(isset($_POST["submit"])){

            $query = "SELECT quantity FROM blood_group WHERE bloodtype=?";
            $stmtSelect = $conn->prepare($query);
            $stmtSelect->bind_param("s", $Bloodtype);
            $stmtSelect->execute();
            $stmtSelect->store_result();
            $stmtSelect->bind_result($old_quantity);
            $stmtSelect->fetch();
            $stmtSelect->close();
            
            $new_quantity = $old_quantity - $Quantity;
            
            // Using a prepared statement for the update
            $queryUpdate = "UPDATE blood_group SET quantity=? WHERE bloodtype=?";
            $stmtUpdate = $conn->prepare($queryUpdate);
            $stmtUpdate->bind_param("is", $new_quantity, $Bloodtype);
            $stmtUpdate->execute();
            $stmtUpdate->close();
            
            echo "Blood Remove Success";
            
            // Close the connection
            $conn->close();
            
            // $Bloodtype=$_POST['bloodtype'];
            // $Quantity=$_POST['quantity'];
        

            // $query="SELECT quantity FROM blood_group WHERE bloodtype='$Bloodtype'";
            // $quantity_result=mysqli_query($conn,$query);
            // $row=mysqli_fetch_assoc($quantity_result); //array
        
            // $old_quantity= $row['quantity'];
            // $new_quantity=$old_quantity-$Quantity;

            // $query_update="UPDATE  blood_group SET quantity='$new_quantity' WHERE bloodtype='$Bloodtype'";
            // mysqli_query($conn,$query_update);
            
            
            // echo"..Blood Remove Success..";
        }else{
            echo"Wrong query";
        }
            
    }
?>