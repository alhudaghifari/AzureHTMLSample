<?php

include("connect.php");

echo "cek satu";
$sql = "SELECT * FROM User";
$result = $conn->query($sql);


echo "cek dua";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["Name"]. "  - Email : " . $row["Email"] . " - Job : " . "<br>";
    }
} else {
    echo "0 results";
}
echo "hasilnya mana bos";
$conn->close();
mysqli_close($conn);

// $serverName = "latiandicoding.database.windows.net"; // update me
// $connectionOptions = array(
//     "Database" => "user", // update me
//     "Uid" => "Dicoding", // update me
//     "PWD" => "KambingJantan123" // update me
// );
// //Establishes the connection
// $conn = sqlsrv_connect($serverName, $connectionOptions);
// $tsql= "SELECT * from User";
// $getResults= sqlsrv_query($conn, $tsql);
// echo ("Reading data from table" . PHP_EOL);
// if ($getResults == FALSE)
//     echo (sqlsrv_errors());
// while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
// //  echo ($row['CategoryName'] . " " . $row['ProductName'] . PHP_EOL);
//     echo "id: " . $row["id"]. " - Name: " . $row["Name"]. "  - Email : " . $row["Email"] . " - Job : " . "<br>";
// }
// sqlsrv_free_stmt($getResults);

?>