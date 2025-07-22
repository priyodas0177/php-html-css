<?php
require "../Validation/vlogin.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <!-- <link rel="stylesheet" href="../css/login.css">      -->
        <script src="../jsvalidation/jslogin.js"></script>
    </head>
        <body>
            <form action="" method="POST" novalidate autocomplete="off"  onsubmit="return isValid(this);">
    
            <div class="login-now"> 
                <h1>Login Form</h1>
                <header>
                    <h2>Hospital Appointment Management </h2>
                    <div class="nav">
                        <a href="">Home</a>
                        <a href="">About</a>
                        <a href="">Doctor</a>
                        <a href="">Contact</a>
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
                
                   

                    <p><b>Email or Phone:</b>
                    <input type="email"  name="emailphone" 
                    value="<?php if(isset($_COOKIE['emphone'])) echo $_COOKIE['emphone']; ?>"></p>
                    <span id="emailphone">*<?php echo $emailphoneErr; ?></span><br>
                    
                    <p><b>Password:</b>
                    <input type="password"  name="password"
                    value="<?php if(isset($_COOKIE['pass'])) echo $_COOKIE['pass']; ?>"></p>
                    <span id="password">*<?php echo $passwordErr; ?></span><br>
                    
                    <p><b>Remeber Me </b>
                    <input type="checkbox" name="checkboxbutton" ></p>

                    <?php echo isset($_SESSION['msg']) ? $_SESSION['msg']: "" ?>
                                
                                
                    <div class="login">
                        <button type="submit" name="login">Login</button>
                    </div> 

                    <div class="forgotpass">
                        <button type="button" name="forgot" onclick="location.
                        href='ForgotPassword.php'" >Forgor Password</button>
                    </div>  
                    
                    <div class="back">
                        <button type="button" name="back" onclick="location.
                        href='FinalRegistration.php'" >Back</button><br><br>  
                    </div> 
                    
            </div>       
        </body>
             
</html>


