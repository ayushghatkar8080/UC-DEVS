<?php      
    $host = "sql303.epizy.com";  
    $user = "epiz_32768705";  
    $password = '5eWqwFcfj3o5';  
    $db_name = "epiz_32768705_Users";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ".mysqli_connect_error());  
    }  
?>