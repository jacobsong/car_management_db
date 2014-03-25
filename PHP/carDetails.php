<?php
  include "header.php";
  $year = $_REQUEST["year"];
  $make = $_REQUEST["make"];
  $model = $_REQUEST["model"];
  echo "<font size=12>$year $make $model</font>";
?>

<table border="1">
<tr>
  <th>Owner ID</th><th>First Name</th><th>Last Name</th><th>Phone</th><th>VIN</th>
  <th>Miles</th>
</tr>

<?php
  $vin = $_REQUEST["vin"];
  $sql = "select * from details where vin = '$vin';";
  $mysqli->query($sql);
  if($results = $mysqli->query($sql)) {
    while ($row = $results->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td>";
        echo "<td>" . $row["fname"] . "</td>";
        echo "<td>" . $row["lname"] . "</td>";
        echo "<td width=100>" . $row["phone"] . "</td>";
        echo "<td>" . $row["vin"] . "</td>";
        echo "<td>" . $row["miles"] . "</td>";
        echo "</tr></table></br>";
        echo "<font size=12>Detailed Information</font>";
        echo "<table border=1><tr>
        <th>Body Type</th><th>Color</th><th>Displacement</th><th>Configuration</th>
        <th>Fuel System</th><th>Transmission Type</th><th>Gearbox</th><th>Drivetrain</th>
        <th>Brake Type</th><th>Brake Brand</th><th>Tire Brand</th><th>Tire Season</th></tr>";
        echo "<tr><td>" . $row["bodyType"] . "</td>";
        echo "<td>" . $row["color"] . "</td>";
        echo "<td>" . $row["displacement"] . "</td>";
        echo "<td>" . $row["configuration"] . "</td>";
        echo "<td>" . $row["fuelSystem"] . "</td>";
        echo "<td>" . $row["transmissionType"] . "</td>";
        echo "<td>" . $row["gearbox"] . "</td>";
        echo "<td>" . $row["drivetrain"] . "</td>";
        echo "<td>" . $row["brakesType"] . "</td>";
        echo "<td>" . $row["brakesBrand"] . "</td>";
        echo "<td>" . $row["tiresBrand"] . "</td>";
        echo "<td>" . $row["season"] . "</td>";
        echo "</tr></table>";
        $link = "editDetails.php?vin=" . $row["vin"] . "&bodyType=" . $row["bodyType"] . 
        "&color=" . $row["color"] . "&displacement=" . $row["displacement"] . "&configuration=" . $row["configuration"] . 
        "&fuelSystem=" . $row["fuelSystem"] . "&transmissionType=" . $row["transmissionType"] . "&gearbox=" . $row["gearbox"] . 
        "&drivetrain=" . $row["drivetrain"] . "&brakesType=" . $row["brakesType"] . "&brakesBrand=" . $row["brakesBrand"] . 
        "&tiresBrand=" . $row["tiresBrand"] . "&tireSeason=" . $row["season"];
    }
  }
  else
     die($mysqli->error);
?>

<button onclick="window.location='<?php echo $link;?>';">Add/Edit Details</button></br></br>
<button onclick="window.location='menu.htm';">Menu</button>