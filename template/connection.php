<?php

//Step1
 $db = mysqli_connect('localhost','root','root','database_name')
 or die('Error connecting to MySQL server.');
?>

<html>
 <head>
 </head>
 <body>
 <h1>PHP connecting to MySQL</h1>

<?php
   
//Step2
$query = "SELECT * FROM db_contactt";
mysqli_query($db, $query) or die('Error querying database.');

//Step3
$result = mysqli_query($db, $query);

while ($row = mysqli_fetch_array($result)) {
 echo $row['Name'] . ' ' . $row['Email'] . ': ' . $row['Password'] . ' '  .'<br />';
}

//Step 4
mysqli_close($db);
?>

</body>