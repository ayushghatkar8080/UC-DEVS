<?php      
    $host = "database-5011649617.ud-webspace.de";  
    $user = "dbu333001";  
    $password = 'vTic!uuVN5!V4Zi';  
    $db_name = "dbs9818726";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ".mysqli_connect_error());  
    } 
?>