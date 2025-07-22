<?php
require 'Connection.php';  
$searchboxErr=" ";

$flag=true;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST['searchbox'])){
        $searchboxErr="Type what you want!";
        $flag=false;
    }else{
        $_SESSION['sch']=$_POST['searchbox'];
    }
    
}
?>

<!DOCTYPE html>

<head>
    <title>Search Doctor</title>
    <link rel="stylesheet" href="css/doctorsearch.css">
</head>
    <body>
    <form action="" method="POST" novalidate autocomplete="off">
        <h1>Search Doctor</h1>
        <header>
                <h2>Hospital Appointment Management </h2>
                <div class="nav">
                    <a href="">Home</a>
                    <a href="">About</a>
                    <a href="">Doctor</a>
                    <a href="">Contact</a>
                    <a href="">Login</a>
                    
                </div>
        </header>
        <footer>
            <div class="footeraddress">
                    <h2>Address: Bashundhara G block 12 road</h2>
                    <h3>cell: 01772953816</h3>
                        
                </div>
                <div class="basicinformation">
                    <h2>Basic Information</h2>
                    <h3>Job Oportunaty</h3>
                    <h4>Location map</h4>
                </div>
        </footer>
        <div class="inputrype">
            <p>Search Anything :
            <input type="text" id="searchbox" name="searchbox"  ></p>
            <span class="error">* <?php echo $searchboxErr; ?> </span><br>
        </div>
        

          <div class="searchbutton">
          <button type="search" name="search">Search</button>
          </div>              
        
        <div>

       <div class="table">
            <table border="1" cellpadding="0">
            <tr>
                <th>id</th>
                <th>firstname</th>
                <th>lastname</th>
                <th>doctortype</th>
                <th>gender</th>
                <th>doctorfee</th>
                <th>date</th>
                <th>doctortime</th>
                <th>email</th>
                <th>phonenumber<th>
                
            </tr>

            <?php
               if($flag){

               
                        if(isset($_POST['searchbox'])){
                            
                            $filtervalue=$_POST['searchbox'];
                            
                            $filterdata="SELECT * FROM admin WHERE CONCAT(id,firstname,lastname,doctortype,
                            gender,doctorfee,date,doctortime,email,phonenumber) LIKE '%$filtervalue%'";
                            $filterdata_run=mysqli_query($conn,$filterdata);
                            
                            if(mysqli_num_rows($filterdata_run)>0){
                                foreach($filterdata_run as $row){
                                    ?>  
                                        <tr>
                                            <td><?php echo $row ['id'];?></td>
                                            <td><?php echo $row ['firstname'];?></td>
                                            <td><?php echo $row ['lastname'];?></td>
                                            <td><?php echo $row ['doctortype'];?></td>
                                            <td><?php echo $row ['gender'];?></td>
                                            <td><?php echo $row ['doctorfee'];?></td>
                                            <td><?php echo $row ['date'];?></td>
                                            <td><?php echo $row ['doctortime'];?></td>
                                            <td><?php echo $row ['email'];?></td>
                                            <td><?php echo $row ['phonenumber'];?></td>
                                            
                                        </tr>
                                    <?php
                                
                                }
                            }
                            else{
                                echo"no data";

                            }
                        }
                }   
                
            ?>
        </div>
        </table><br><br>
        <div class="backbutton">
            <button type="button" name="searchdoc" onclick="location.href='Dashboad.php'">  Back</button>
        </div>
        
    </body>
