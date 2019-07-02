<?php
	// $servername = "latiandicoding.database.windows.net";
	// $db_username = "dicoding";
    // $db_password = "KambingJantan123";
    // $db_name = "[dbo].[user]";

	// $conn = new mysqli($servername, $db_username, $db_password, $db_name);
	// if ($conn->connect_error) {
	//     die("Connection failed: " . $conn->connect_error);
	// } 

    $host = "latiandicoding.database.windows.net";
    $username = "dicoding";
    $password = "KambingJantan123";
    $db_name = "dicodingdb";
    
    //Establishes the connection
    // $conn = mysqli_init();
    // mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
    // if (mysqli_connect_errno($conn)) {
    // die('Failed to connect to MySQL: '.mysqli_connect_error());
    // }

    // PHP Data Objects(PDO) Sample Code:
    // try {
    //     $conn = new PDO("sqlsrv:server = tcp:latiandicoding.database.windows.net,1433; Database = dicodingdb", "dicoding", $password);
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // }
    // catch (PDOException $e) {
    //     print("Error connecting to SQL Server. cuy : ");
    //     die(print_r($e));
    // }

    // // SQL Server Extension Sample Code:
    // $connectionInfo = array("UID" => "dicoding@latiandicoding", "pwd" => $password, "Database" => "dicodingdb", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
    // $serverName = "tcp:latiandicoding.database.windows.net,1433";
    // $conn = sqlsrv_connect($serverName, $connectionInfo);

    echo "nyobain dulu";
    // try  
    // {  
    //     $serverName = "tcp:latiandicoding.database.windows.net,1433";  
    //     $connectionOptions = array("Database"=>"dicodingdb",  
    //         "Uid"=>"dicoding", "PWD"=>"KambingJantan123");  
    //     $conn = sqlsrv_connect($serverName, $connectionOptions);  
    //     if($conn == false)  
    //         die(FormatErrors(sqlsrv_errors()));  
    // }  
    // catch(Exception $e)  
    // {  
    //     echo("Error!");  
    // }  

    // PHP Data Objects(PDO) Sample Code:
    try {
        $conn = new PDO("sqlsrv:server = tcp:latiandicoding.database.windows.net,1433; Database = dicodingdb", "dicoding", $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e) {
        print("Error connecting to SQL Server.");
        die(print_r($e));
    }

    // SQL Server Extension Sample Code:
    $connectionInfo = array("UID" => "dicoding@latiandicoding", "pwd" => $password, "Database" => "dicodingdb", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
    $serverName = "tcp:latiandicoding.database.windows.net,1433";
    $conn = sqlsrv_connect($serverName, $connectionInfo);


?>