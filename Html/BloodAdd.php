<?php
require "../Validation/vbloodadd.php";
?>
<!DOCTYPE html>
<head>
    <title>Blood Add Page</title>
    <link rel="stylesheet" href="css/Bloodadd.css">
</head>
    <body>
        <form action="" method="POST" novalidation>
        
            <h1>Blood Add Form</h1>
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
            <p>Blood Type
            <select name="bloodtype" id="bloodtype" >

                <option value="AB Positive">AB positive</option>
                <option value="AB Negative">AB negative</option>
                <option value="A Positive">A positive</option>
                <option value="A Negative"> A Negative</option>
                <option value="B Positive">B positive</option>
                <option value="B Negative">B negative</option>
                <option value="O Positive">O positive</option>
                <option value="O Negative">O Negative</option>
            </select></p><br>

            <p><b> Quantity :</b>
            <input type="text" id="quantity" name="quantity" ></p>
            <span class="error"> <?php echo $quantityErr; ?> </span><br>

                <!-- <label for="quantity">Quantity</label>
                <input type="text" name="quantity"> -->
                    
                
               
           
        
            <div class="submitbuttion">
                <button type="submit" name="submit">Submit</button>
            </div>
            
            <div class="backbutton">
                <button type="button" name="dashboad" onclick="location.href='Dashboad.php'">  Back</button>
            </div>

            <div class="logout">
                <button type="button" name="logout" onclick="location.href='Login.php'">  Logout</button><br><br>
            </div>
            
    
    </body>
