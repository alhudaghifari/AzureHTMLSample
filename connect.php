<?php

$username = "dicoding";
$password = "KambingJantan123";
$db_name = "latiandicodingwndws";
$db_nameOld = "dicodingdb";

$serverName = "latiandicoding.database.windows.net";
$serverName1 = "latiandicodingwndws.database.windows.net";
$serverName2 = "latiandicodingwndws2.database.windows.net";
$connectionOptions = array(
    "Database" => $db_name,
    "Uid" => $username, "PWD" => $password
);
$conn = sqlsrv_connect($serverName2, $connectionOptions);
if ($conn == false) {
    echo "Mohon refresh halaman lagi :)";
    die("Connection failed: " . $conn->connect_error . " </br>");
    die(FormatErrors(sqlsrv_errors()));
}
