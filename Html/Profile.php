<?php
require "Connection.php";
session_start();

?>

<!DOCTYPE html>
<head>
    <body>
        <form action="" method="POST" novalidate autocomplete="off">
        <table>
            <tr>
              
                <th>Id</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Phone</th>
                      
               
            </tr>
            <?php
            $id=$_SESSION['id'];
            
            
            $filterdata="SELECT * FROM datatable WHERE id=$id";
            $filterdata_run=mysqli_query($conn,$filterdata);
            if(mysqli_num_rows($filterdata_run)>0){
                foreach($filterdata_run as $row){
                   
                    ?>
                    
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['firstname']; ?></td>
                        <td><?php echo $row['lastname']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
            
                    </tr>
                    <?php
                }
            }
            ?>
           
        </table><br><br>
    </body>
</head>
<button type="button" name="update" onclick="location.href='Update.php'"> Update Anything</button><br><br>

<button type="button" name="dashboad" onclick="location.href='Dashboad.php'"> Back</button>
