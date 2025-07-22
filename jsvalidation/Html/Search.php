<?php
    require "../Validation/vsearch.php";
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
               require "../Database/Ddoctorsearch.php";
                
            ?>
        </div>
        </table><br><br>
        <div class="backbutton">
            <button type="button" name="searchdoc" onclick="location.href='Dashboad.php'">  Back</button>
        </div>
        
    </body>
