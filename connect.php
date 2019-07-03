<?php

    $username = "dicoding";
    $password = "KambingJantan123";
    $db_name = "dicodingdb";

    $serverName = "tcp:latiandicoding.database.windows.net,1433";  
    $connectionOptions = array("Database"=>$db_name,  
        "Uid"=>$username, "PWD"=>$password);  
    $conn = sqlsrv_connect($serverName, $connectionOptions);  
    if($conn == false)  {
        echo "Error bos!";  
	    die("Connection failed: " . $conn->connect_error . " </br>" . FormatErrors(sqlsrv_errors()));
        die(FormatErrors(sqlsrv_errors()));  
    }
?>