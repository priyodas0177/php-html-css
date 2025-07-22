<?php
require 'Connection.php';
if(isset($_POST['searchblood'])){
    $filtervalue=$_POST['bloodtype'];
    
    $filterdata = "SELECT * FROM blood_group WHERE CONCAT(bloodtype, quantity) LIKE ?";
    $stmtFilter = $conn->prepare($filterdata);
    $filterParam = "%$filtervalue%";
    $stmtFilter->bind_param("s", $filterParam);
    $stmtFilter->execute();
    $result = $stmtFilter->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>  
            <tr>
                <td><?php echo $row['bloodtype']; ?></td>
                <td><?php echo $row['quantity']; ?></td>
            </tr>
            <?php
        }
    }
    else{
        echo"no data";

    }

    // Close the prepared statement and connection
    $stmtFilter->close();
    $conn->close();

    
   
}
?>