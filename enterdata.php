<?php

$connect = new mysqli(localhost, 'root', 'pushi100', 'Credit');

if(!$connect) {
   echo "Error: Unable to Connect to database";
   echo "Debugging Error: ".mysqli_connect_error().PHP_EOL;
   exit;
}

echo "Success: A connection was enabled";


?>
<!DOCTYPE html>
<html>
<head>
   <title>Data Entry for Credit Payment Stat</title>
</head>
<body>
  <p> Body of Doc</p>


</body>
</html>
