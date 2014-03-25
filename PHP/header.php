<?php
  
  $mysqli = new mysqli("localhost", "jms", "Snow1234", "jms_project");
  if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . 
      $mysqli->connect_error;
  }
?>

<html>
<body bgcolor="#7F7F7F">
</body>
</html>