<?php
include "header.php";
?>

<table border="1">
<tr><th>VIN</th><th>Make</th><th>Model</th><th>Year</th><th>Miles</th></tr>

<?php
  $sql = "select vin,make,model,year,miles,owner_id from car ;";
  $mysqli->query($sql);

  if($results = $mysqli->query($sql)) {
    while ($row = $results->fetch_assoc()) {
        $link = "editCar.php?oldVin=" . $row["vin"] . "&make=" . $row["make"] . 
          "&model=" . $row["model"] .
          "&year=" . $row["year"].
          "&miles=" . $row["miles"];
        echo "<tr><td><a href='$link'>" . $row["vin"] . "</a></td>";
        echo "<td>" . $row["make"] . "</td>";
        echo "<td>" . $row["model"] . "</td>";
        echo "<td>" . $row["year"] . "</td>";
        echo "<td>" . $row["miles"] . "</td>";
        echo "<td><a href='carDetails.php?vin=" . $row["vin"] . "&make=" . $row["make"] . 
        "&model=" . $row["model"] . "&year=" . $row["year"] . "'>Details</a></td>";
        echo "<td><a href='deleteCar.php?vin=" . $row["vin"] . "'>DEL</a></td>";
        echo "</tr>";
    }
  }
  else
     die($mysqli->error);
?>
</table>

<button onclick="window.location='menu.htm';">Menu</button>
