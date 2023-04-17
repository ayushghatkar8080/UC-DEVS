<?php      
    $host = "database-5011649617.ud-webspace.de";  
    $user = "dbu333001";  
    $password = 'vTic!uuVN5!V4Zi';  
    $db_name = "dbs9818726";  
      
    $conn = mysqli_connect($host, $user, $password, $db_name);  
    if($conn) {  
        echo "success"; 
    } 
    else{
        die("Error".mysqli_connect_error());
    }
?>