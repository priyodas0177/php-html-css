<?php
require "../Validation/vregistration.php";
?>
<!DOCTYPE html>
<html> 
<head>
    <title>Registratioon From</title>
    <link rel="stylesheet" href="../css/registration.css">
    <script src="..\jsvalidation\jsregistration.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- novalidate autocomplete="off"  -->
    <form action="" method="POST"  onsubmit="return isValid(this);">
            
        <h1>Registration Here</h1>
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
          
           
        <div class="label">                   
        <p><b> First Name  :</b> 
        <input type="text"  name="firstname"  ></p>
        <span id="firstname">* <?php echo $firstnameErr; ?> </span>
            
        <p><b> Last Name :</b>
        <input type="text" name="lastname" ></p>
        <span  id="lastname">* <?php echo $lastnameErr; ?> </span>

        <p><b> Email :</b>
        <input type="email"  name="email" ></p>
        <span id="email">* <?php echo $emailErr; ?> </span>

        <p><b> Gender :</b>
        <input type="radio"name = "gender"  value = "Male" > Male
        <input type="radio"name = "gender"  value = "Female"> Female</p>
        <span id="gender">* <?php echo $genderErr; ?> </span>
        

        <p><b>Phone/Mobile :</b>
        <input type="phone"  name="phonenumber" ></p>
        <span id="phonenumber">* <?php echo $phonenumberErr; ?> </span>

        <p><b> Password :</b><input type="password"  name="password" ></p>
        <span id="password">* <?php echo $passwordErr; ?> </span>

        <p><b> Confirm Password:</b>
        <input type="password"  name="confirmpassword" ></p>
        <span id="confirmpassword">* <?php echo $confirmpasswordErr; ?> </span><br>
        </div>  

        <?php echo isset($_SESSION['msg']) ? $_SESSION['msg']: "" ?>
        
        <div class="registration">
            <button type="submit" name="registration">Registration</button><br>
        </div>

        <div class="login">
            <button type="button" name="login" onclick="location.href='Login.php'"> Login</button>
        </div>

</form>             
        
</body>
</html>