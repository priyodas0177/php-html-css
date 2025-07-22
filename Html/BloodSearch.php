<?php
require 'Connection.php'

?>

<!DOCTYPE html>

<head>
    <body>
    <form action="" method="POST" novalidate autocomplete="off">
        <table>
            <tr>
                <td>
                    <fieldset >
                        <legend>Search Blood</legend>
                        <!-- <label for="searchblood">Search Anything</label>
                        <input type="text" name="searchblood" > -->
                        <label for="bloodtype">Blood type</label>
                        <select name="bloodtype" id="bloodtype" >

                            <option value="AB Positive">AB positive</option>
                            <option value="AB Negative">AB negative</option>
                            <option value="A Positive">A positive</option>
                            <option value="A Negative"> A Negative</option>
                            <option value="B Positive">B positive</option>
                            <option value="B Negative">B negative</option>
                            <option value="O Positive">O positive</option>
                            <option value="O Negative">O Negative</option>
                        </select><br><br>
                    </fieldset>
                    
                </td>
            </tr>
            
        </table>
        
        <button type="search" name="searchblood">Search Blood</button>

        <table border="1" cellpadding="0">
        <tr>
                
                <th>BloodType</th>
                <th>Quantity</th>
                
                
            </tr>

            <?php
                if(isset($_POST['searchblood'])){
                    $filtervalue=$_POST['bloodtype'];
                    
                    $filterdata="SELECT * FROM blood_group WHERE CONCAT(bloodtype,quantity) LIKE'%$filtervalue%'";
                    $filterdata_run=mysqli_query($conn,$filterdata);
                    
                    if(mysqli_num_rows($filterdata_run)>0){
                        foreach($filterdata_run as $row){
                            ?>  
                                <tr>
                                    
                                    <td><?php echo $row ['bloodtype'];?></td>
                                    <td><?php echo $row ['quantity'];?></td>
                                    
                                    
                                </tr>
                            <?php
                           
                        }
                    }
                    else{
                        echo"no data";

                    }
                }
            ?>

        </table><br><br>
        <button type="button" name="registration" onclick="location.href='Dashboad.php'">  Back</button><br><br>
    </body>
</head>