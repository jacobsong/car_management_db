<?php
include "header.php";
?>

<table border="1">
<tr><th>Id</th><th>First Name</th><th>Last Name</th><th>Phone</th></tr>
<?php
  $sql = "select id,fname,lname,phone from owner ;";
  $mysqli->query($sql);

  if($results = $mysqli->query($sql)) {
    while ($row = $results->fetch_assoc()) {
        $link = "insertOwner.php?id=" . $row["id"] . "&fname=" . $row["fname"] . 
          "&lname=" . $row["lname"] .
          "&phone=" . $row["phone"];
        echo "<tr><td><a href='$link'>" . $row["id"] . "</a></td>";
        echo "<td>" . $row["fname"] . "</td>";
        echo "<td>" . $row["lname"] . "</td>";
        echo "<td>" . $row["phone"] . "</td>";
        echo "<td><a href='deleteOwner.php?id=" . $row["id"] . "'>DEL</a></td>";
        echo "<td><a href='insertCar.php?owner_id=" . $row["id"] . "'>Add Car</a></td>";
        echo "</tr>";
    }
  }
  else
     die($mysqli->error);
?>
</table>

<button onclick="window.location='menu.htm';">Menu</button>
