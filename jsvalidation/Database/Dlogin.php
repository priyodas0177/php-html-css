<?php
// require "../Validation/connection.php";
if($flag)
{
        
    if(isset($_POST["login"]))
    {
        $Emailphone=$_POST["emailphone"];
        $Password=$_POST["password"];
       
    
        
        $stmt=$conn->prepare("SELECT * FROM datatable WHERE email OR phone=? And password=? ");
        $stmt->bind_param("ss",$Emailphone,$Password);
        $stmt->execute();
        $stmt->store_result();
        if($stmt->num_rows>0){
            echo"Login Successfullt";
            if(isset($_POST["checkboxbutton"])){             //remember value=1 kora ase
                setcookie('emphone', $Emailphone, time()+ 10, "/");
                setcookie('pass', $Password, time() +10,"/");
            
                }
                else{
            
                    $Emailphone=" ";
                    $Password=" ";
                }
            header("Location:Dashboad.php");
        }
        else{
            echo"Invalide Username and Password";
        }
        $stmt->close();
        $conn->close();
        


        // $query="SELECT * FROM datatable WHERE email='$Emailphone' OR phone='$Emailphone'";
        // $result=mysqli_query($conn,$query);
        // $row=mysqli_fetch_assoc($result);
        // if(mysqli_num_rows($result)>0){
        //     if($Password==$row["password"]){
        //         $_SESSION["login"]=true;
        //         $_SESSION["id"]=$row["id"];

        //         //set cookie
                
        //           if(isset($_POST["checkboxbutton"])){             //remember value=1 kora ase
        //             setcookie('emphone', $Emailphone, time()+ 10, "/");
        //             setcookie('pass', $Password, time() +10,"/");
                    
        //             }
        //             else{
                    
        //                 $Emailphone=" ";
        //                 $Password=" ";
        //             }
        //         header("Location:Dashboad.php");

                
            

       
        
        // }
        // else{
        //     echo"User not register";
        // }
        
        
        

        // else{
        //     echo"Fill all the valid details";
        // }

    }
   
}

?>