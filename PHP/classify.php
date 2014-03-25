<form>
Year: <input type="text" name="year" maxlength="4" required></br>
<input type="submit" value="Submit">
</form>
<button onclick="window.location='menu.htm';">Menu</button></br>

<?php
include "header.php";

$year = $_REQUEST["year"];

if(strlen($year) > 0) 
{
  $sql = "select classify($year) as result;";
  $mysqli->query($sql);
  if($results = $mysqli->query($sql)) 
  {
    while ($row = $results->fetch_assoc()) 
    {
      echo "<font size=12>Your car is " . $row["result"] . "</font>";
    }
  }
  else
     die($mysqli->error);
}
?>