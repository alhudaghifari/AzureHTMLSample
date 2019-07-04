<?php

include("connect.php");

$nama = $_POST["completename"];
$email = $_POST["email"];
$job = $_POST["job"];
$datetime = new DateTime("now", new DateTimeZone('Asia/Jakarta'));

//Insert Query
$tsql = "INSERT INTO [dbo].[user](Name, Email, Job, Date) values (?,?,?,?);";
$params = array($nama, $email, $job, $datetime);
$getResults = sqlsrv_query($conn, $tsql, $params);
$rowsAffected = sqlsrv_rows_affected($getResults);
if ($getResults == FALSE or $rowsAffected == FALSE)
    die(FormatErrors(sqlsrv_errors()));
echo ($rowsAffected . " row(s) inserted: " . PHP_EOL);
sqlsrv_free_stmt($getResults);
