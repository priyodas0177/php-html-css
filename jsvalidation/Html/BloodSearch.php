
<!DOCTYPE HTML>
<head>
</head>
    <body>
    <form action="" method="POST" novalidate autocomplete="off">
        <table>
            <tr>
                <td>
                    <fieldset >
                        <legend>Search Blood</legend>
                        <!-- <label for="searchblood">Search Anything</label>
                        <input type="text" name="searchblood" > -->
                        <label for="bloodtype">Blood type</label>
                        <select name="bloodtype" id="bloodtype" >

                            <option value="AB Positive">AB positive</option>
                            <option value="AB Negative">AB negative</option>
                            <option value="A Positive">A positive</option>
                            <option value="A Negative"> A Negative</option>
                            <option value="B Positive">B positive</option>
                            <option value="B Negative">B negative</option>
                            <option value="O Positive">O positive</option>
                            <option value="O Negative">O Negative</option>
                        </select><br><br>
                    </fieldset>
                    
                </td>
            </tr>
            
        </table>
        
        <button type="search" name="searchblood">Search Blood</button>

        <table border="1" cellpadding="0">
        <tr>
                
                <th>BloodType</th>
                <th>Quantity</th>
                
                
            </tr>

            <?php
               require "../Database/Dbloodsearch.php";
            ?>

        </table><br><br>
        <button type="button" name="registration" onclick="location.href='Dashboad.php'">  Back</button><br><br>
    </body>
