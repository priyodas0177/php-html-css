<?php
require 'Connection.php'; 
if($flag){

               
if(isset($_POST['searchbox'])){
    
    $filtervalue = $_POST['searchbox'];

    // Using a prepared statement to prevent SQL injection
    $filterdata = "SELECT * FROM admin WHERE CONCAT(id, firstname, lastname, doctortype,
    gender, doctorfee, date, doctortime, email, phonenumber) LIKE ?";
    $stmtFilter = $conn->prepare($filterdata);
    $filterParam = "%$filtervalue%";
    $stmtFilter->bind_param("s", $filterParam);
    $stmtFilter->execute();
    $result = $stmtFilter->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>  
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
                <td><?php echo $row['doctortype']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['doctorfee']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['doctortime']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phonenumber']; ?></td>
            </tr>
            <?php
        }
    } else {
        echo "No data";
    }

// Close the prepared statement and connection
$stmtFilter->close();
$conn->close();

   
}
} 
?>  