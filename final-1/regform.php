<?php      
    include('connection.php');  
    $email = $_POST['email'];  
    $password = $_POST['password'];
    $fname = $_POST['first_name'];  
    $lname = $_POST['last_name'];  
    //$gender = $_POST['gender'];  
    $confpass = $_POST['confpass'];  
    $country = $_POST['country'];  
    $tel = $_POST['phone'];    
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password); 
        
        $fname = stripcslashes($fname);  
        $lname = stripcslashes($lname);  
        $fname = mysqli_real_escape_string($con, $fname);  
        $lname = mysqli_real_escape_string($con, $lname); 

        //$gender = stripcslashes($gender);  
        $confpass = stripcslashes($confpass);  
        //$gender = mysqli_real_escape_string($con, $gender);  
        $confpass = mysqli_real_escape_string($con, $confpass);

        $country = stripcslashes($country);  
        $tel = stripcslashes($tel);  
        $country = mysqli_real_escape_string($con, $country);  
        $tel = mysqli_real_escape_string($con, $tel);

        
      
        $sql = "INSERT INTO traveller (Password,Frist_Name,Last_Name,Email,Telephone,Country) VALUES ('$password','$fname','$lname','$email',' $tel','$country')";  
         $result = mysqli_query($con, $sql); 
        // if(mysqli_query($con,$sql)) 
        // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        // $count = mysqli_num_rows($result);  
          
        if($result){  
            echo "<h1><center> Register Added successful </center></h1>";  
        }  
        else{  
            echo "<h1> error.</h1>";  
        }     
?>  