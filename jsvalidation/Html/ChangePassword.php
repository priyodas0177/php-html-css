<?php
require 'Connection.php';

session_start();
$id=$_SESSION["id"];
$oldpassErr=$newpassErr=$confirmpassErr=" ";
$flag=true;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST['oldpass'])){
        $oldpassErr="Old Pass is Required";
        $flag=false;
    }else{
        $_SESSION['pass']=$_POST['oldpass'];
    }

    if(empty($_POST['newpass'])){
        $newpassErr="New Pass is required";
        $flag=false;
    }
    else{
        $_SESSION['lname']=$_POST['newpass'];
    }

    if(empty($_POST['confirmpass'])){
        $confirmpassErr="Confirm Pass required";
        $flag=false;
    }else{
        $_SESSION['cpass']=$_POST['confirmpass'];
    }
    if($flag){
        if(isset($_POST["save"])){
            $Oldpass=$_POST['oldpass'];
            $Newpass=$_POST['newpass'];
            $Confirmpass=$_POST['confirmpass'];
            $result=mysqli_query($conn,"SELECT * FROM datatable WHERE password='$Oldpass'");
            $row=mysqli_fetch_assoc($result);
           
            if($Newpass==$Confirmpass){
            
                if($Oldpass==$row["password"]){
                    $_SESSION["login"]=true;
                    $_SESSION["id"]=$row["id"];  
                    $update_query="UPDATE datatable SET password= '$Newpass' WHERE id='$id' ";
                    $up_result=mysqli_query($conn,$update_query);
                   if($up_result==1){
                    echo"Success new pass";
                   }
                   else{
                    echo" Pass not success";
                   }
        
                }
                else{
                    echo"Wrong password";
                }
            }     
        }
    }
}






?>


<!DOCTYPE html>
<html>
    
    <body>
    <form action="" method="POST" novalidate autocomplete="off">
        <table>
            <tr>
                <td>
                    <fieldset>
                    <legend>Change Password</legend><br>
                    <label for="oldpass">Old Password</label>
                    <input type="password" name="oldpass" ><br><br>
                    <span class="error">* <?php echo $oldpassErr; ?></span> <br><br>
                   

                    <label for="newpass">New Password</label>
                    <input type="password" name="newpass" ><br><br>
                    <span class="error">* <?php echo $newpassErr; ?></span><br><br>

                    <label for="confirmpass">Confirm Password</label>
                    <input type="password" name="confirmpass" ><br><br>
                    <span class="error">* <?php echo $confirmpassErr; ?> </span><br><br>
                    </fieldset>
                    
                </td>
            </tr>
        </table>
        <button type="submit" name="save">Save</button>
    </body><br><br>

    <button type="button" name="chngpass" onclick="location.href='Profile.php'">  Back</button><br><br>
</html>