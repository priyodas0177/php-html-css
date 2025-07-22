
<!DOCTYPE html>
<head>
    <title>Doctor Remove Page</title>
    <link rel="stylesheet" href="../css/doctorremove.css">
    
</head>
    <body>
        <form action="" method="Post" novalidation autocomplete="off" onsubmit="return isValid(this);">
        <h1>Doctor Remove Form</h1>
        <table border="1" cellpadding="0">
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
            <tr>
                <th>id</th>
                <th>firstname</th><br><br>
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
                require "../Database/Ddoctorremove.php";
               //cut kora hoyese
                 
            ?>
             

        </table><br><br>

            <div class="backbutton">
                <button type="button" name="dashboad" onclick="location.href='Dashboad.php'">  Back</button>
            </div>

            <div class="logout">
                <button type="button" name="logout" onclick="location.href='Login.php'">  Logout</button><br><br>
            </div>
    </body>
