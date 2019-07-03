<?php

include("connect.php");

 //Establishes the connection
 $tsql= "SELECT * FROM [dbo].[user]";
 $getResults= sqlsrv_query($conn, $tsql);
 if ($getResults == FALSE)
     echo (sqlsrv_errors());

     echo "
     
        <div class=\"container\">
     <table class=\"table\">
     <thead>
         <tr>
           <th>id</th>
           <th>Name</th>
           <th>Email</th>
           <th>Job</th>
           <th>Date</th>
         </tr>
       </thead>
       <tbody>";

 while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
    $stringdatetime=$row["Date"]->format('Y-m-d H:i:s');

    echo "
    <tr>
      <td>" . $row["id"] . "</td>
      <td>" . $row["Name"] . "</td>
      <td>" . $row["Email"] . "</td>
      <td>" . $row["Job"] . "</td>
      <td>" . $stringdatetime . "</td>
    </tr>";
    
//   echo "id: " . $row["id"]. " - Name: " . $row["Name"] . 
//         " - Email : " . $row["Email"] . " - Job : " . $row["Job"] . 
//         " - Date : " . $stringdatetime . "<br>";  

 }
echo "</tbody
</table>
</div>";

 sqlsrv_free_stmt($getResults);

?>