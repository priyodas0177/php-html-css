<?php
require 'Connection.php';
session_start();

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $stmtDelete = $conn->prepare("DELETE FROM admin WHERE id = ?");
    $stmtDelete->bind_param("i", $id);
    $stmtDelete->execute();
    $stmtDelete->close();
}
$select = "SELECT * FROM admin";
$query = mysqli_query($conn, $select);

$num=mysqli_num_rows($query);
if($num>0){
    while($result=mysqli_fetch_assoc($query)){
        echo "
        <tr>
            <td>".$result['id']."</td> 
            <td>".$result['firstname']."</td> 
            <td>".$result['lastname']."</td> 
            <td>".$result['doctortype']."</td> 
            <td>".$result['gender']."</td>
            <td>".$result['doctorfee']."</td>  
            <td>".$result['date']."</td> 
            <td>".$result['doctortime']."</td> 
            <td>".$result['email']."</td> 
            <td>".$result['phonenumber']."</td>
            <td>
                <a href='DoctorRemove.php ?id=".$result['id']."'class='btn' >Delete</a>
            </td> 
                
           
    
        </tr> 

        ";
       
    }
}
?>