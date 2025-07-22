<?php
require "../Validation/vdoctoradd.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Doctor Add Page</title>
        <link rel="stylesheet" href="../css/doctoradd.css">
        <script src="../jsvalidation/jsdoctoradd.js"></script>
    </head>
    <body>
        <form acion="" method="POST" novalidate autocomplete="off"  onsubmit="return isValid(this);">
            <h1>Doctor Add Form</h1>
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


            <p>First Name:
            <input type="text" name="firstname" ></p>
            <span id="firstnameErr">* <?php echo $firstnameErr; ?> </span>

            <p>Last Name:
            <input type="text" name="lastname" ></p> 
            <span id="lastnameErr">* <?php echo $lastnameErr; ?> </span>

            
            
            <p>Doctor Type
            <select name="doctortype"  >
                <option value="plasticsurgery">Plastic Surgery</option>
                <option value="pathologist">Pathologist</option>
                <option value="generalpractitioner">General Practitioner</option>
                <option value="radiologist">Radiologist</option>
            </select></p>
            <span id="doctortypeErr">* <?php echo $doctortypeErr; ?> </span>

            <p>Gender
            <select name="gender" >
                <option value="Male" >Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select></p>
            <span id="genderErr">* <?php echo $genderErr; ?> </span>

            <p>Doctor Fee : 
            <input type="text" name="doctorfee" ></p> 
            <span id="doctorfeeErr">* <?php echo $doctorfeeErr; ?> </span>

            <p>Date
            <select name="date"  multiple>
                <option value="saturday" >Saturday</option>
                <option value="sunday">Sunday</option>
                <option value="monday">Monday</option>
                <option value="tuesday">Tuesday</option>
                <option value="wednessday">Wednessday</option>
                <option value="thusday">Thusday</option>
                <option value="friday">Friday</option>
            </select></p>
            <span id="dateErr">* <?php echo $dateErr; ?> </span>
            

            <p>Doctor Time : 
            <input type="time" name="doctortime" ></p>
            <span  id="doctortimeErr">* <?php echo $doctortimeErr; ?> </span>


            <p>Email :
            <input type="email" name="email"></p>
            <span id="emailErr">* <?php echo $emailErr; ?> </span>
           

            <p>Phone Number :
            <input type="tel" name="phonenumber" ></p>
            <span id="phonenumberErr">* <?php echo $phonenumberErr; ?> </span>

            <?php echo isset($_SESSION['msg']) ? $_SESSION['msg']: "" ?>
            
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
</html>