<?php


if($flag)
{
    if(isset($_POST["submit"])){
        $Bloodtype=$_POST['bloodtype'];
        $Quantity=$_POST['quantity'];

        //Prepared statment part
       
        // Using a prepared statement to prevent SQL injection
        $query = "SELECT quantity FROM blood_group WHERE bloodtype=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $Bloodtype);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($old_quantity);
        $stmt->fetch();
        $stmt->close();

        $new_quantity = $old_quantity + $Quantity;

        // Using a prepared statement for the update
        $query_update = "UPDATE blood_group SET quantity=? WHERE bloodtype=?";
        $stmt_update = $conn->prepare($query_update);
        $stmt_update->bind_param("is", $new_quantity, $Bloodtype);
        $stmt_update->execute();
        $stmt_update->close();
        echo"done";

        echo "Blood Add Success";

        // Close the connection
        $conn->close();
      
        
    


        //done part
        // $query="SELECT quantity FROM blood_group WHERE bloodtype='$Bloodtype'";
        // $quantity_result=mysqli_query($conn,$query);
        // $row=mysqli_fetch_assoc($quantity_result); //array
    
        // $old_quantity= $row['quantity'];
        // $new_quantity=$old_quantity+$Quantity;

        // $query_update="UPDATE  blood_group SET quantity='$new_quantity' WHERE bloodtype='$Bloodtype'";
        // mysqli_query($conn,$query_update);
        

        // echo"..Blood Add Success..";
        }
}
?>