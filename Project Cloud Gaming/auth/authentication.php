<?php
    include('connection.php');  
    $username = $_POST['email'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
    $password = stripcslashes($password);  
    $username = stripcslashes($username);  
    $username = mysqli_real_escape_string($con, $username);  
    $password = mysqli_real_escape_string($con, $password);  
      
    $sql = "select * from Users where email = '$username' and password = '$password'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
          
    if($count == 1){  
        echo"<h1><center> Login successful </center></h1>";  
    }  
    else{  
        echo"<h1> Login failed. Invalid email or password.</h1>";  
    }
?>