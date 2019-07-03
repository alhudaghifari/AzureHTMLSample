<?php

    $username = "dicoding";
    $password = "KambingJantan123";
    $db_name = "dicodingdb";

    $serverName = "latiandicoding.database.windows.net,1433";  
    $connectionOptions = array("Database"=>$db_name,  
        "Uid"=>$username, "PWD"=>$password);  
    $conn = sqlsrv_connect($serverName, $connectionOptions);  
    if($conn == false)  {
        die(FormatErrors(sqlsrv_errors()));  
        echo("Error bos!");  
    }
?>