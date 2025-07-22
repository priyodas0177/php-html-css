<?php
    if($flag)
    {
        if(isset($_POST['submit'])){
            $FirstName=$_POST['firstname'];
            $LastName=$_POST['lastname'];
            $Doctortype=$_POST['doctortype'];
            $Gender=$_POST['gender'];
            $DoctorFee=$_POST['doctorfee'];
            $Date=$_POST['date'];
            $DoctorTime=$_POST['doctortime'];
            $Email=$_POST['email'];
            $PhoneNumber=$_POST['phonenumber'];
        
           
            
            // $mydays="";
            // if(count($Date)>1){
            //     foreach($Date as $day){
            //         $mydays.= $day . ",";
            //     }
            // }
            // else{
            //     foreach($Date as $day){
            //         $mydays=$day;
            //     }
               
            // }
          
        
            $query = "INSERT INTO admin (firstname, lastname, doctortype, gender, doctorfee, date, doctortime, email, phonenumber)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("ssssdssss", $FirstName, $LastName, $Doctortype, $Gender, $DoctorFee, $Date, $DoctorTime, $Email, $PhoneNumber);
            $stmt->execute();

            // Check if the query was successful
            if ($stmt->affected_rows > 0) {
                echo "Query success";
            } else {
                echo "Error: " . $stmt->error;
            }

            // Close the statement and connection
            $stmt->close();
            $conn->close();
        }else{
            
        }

    }
?>