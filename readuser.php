<?php

include("connect.php");

//Establishes the connection
$tsql = "SELECT Name, Email, Job, Date FROM [dbo].[user]";
$getResults = sqlsrv_query($conn, $tsql);
if ($getResults == FALSE) {
  echo ("Mohon reload page ulang :)");
  die(FormatErrors(sqlsrv_errors()));
}

echo "<div class=\"container\">
     <table class=\"table\">
     <thead>
         <tr>
           <th>Name</th>
           <th>Email</th>
           <th>Job</th>
           <th>Date</th>
         </tr>
       </thead>
       <tbody>";

while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
  $stringdatetime = $row["Date"]->format('Y-m-d H:i:s');

  echo "<tr>
      <td>" . $row["Name"] . "</td>
      <td>" . $row["Email"] . "</td>
      <td>" . $row["Job"] . "</td>
      <td>" . $stringdatetime . "</td>
    </tr>";
}
echo "</tbody
</table>
</div>";

sqlsrv_free_stmt($getResults);
