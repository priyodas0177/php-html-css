<?php
require "Connection.php";
session_start();


$emailphoneErr= $passwordErr=" ";
$flag=true;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST['emailphone'])){
        $emailphoneErr="Email or Phone number is Required";
        $flag=false;
    }else{
        $_SESSION['emphn']=$_POST['emailphone'];
    }
    if(empty($_POST['password'])){
        $passwordErr="Password is Required";
        $flag=false;
    }else{
        $_SESSION['passw']=$_POST['password'];
    }

    if($flag){
        
        if(isset($_POST["login"])){
            $Emailphone=$_POST["emailphone"];
            $Password=$_POST["password"];
           // $rememberme=$_POST["checkboxbutton"];
        
           
            $query="SELECT * FROM datatable WHERE email='$Emailphone' OR phone='$Emailphone'";
            $result=mysqli_query($conn,$query);
            $row=mysqli_fetch_assoc($result);
            if(mysqli_num_rows($result)>0){
                if($Password==$row["password"]){
                    $_SESSION["login"]=true;
                    $_SESSION["id"]=$row["id"];

                    //set cookie
                   
                      if(isset($_POST["checkboxbutton"])){             //remember value=1 kora ase
                        setcookie('emphone', $Emailphone, time()+ 10, "/");
                        setcookie('pass', $Password, time() +10,"/");
                        
                    }else{
                      
                        $Emailphone=" ";
                        $Password=" ";
                    }
                    header("Location:Dashboad.php");

                    
                

                }
            
            }
            else{
                echo"User not register";
            }
            
            
        }
        else{
            echo"Fill all the valid details";
        }

            }


}
?>