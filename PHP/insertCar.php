<?php
include "header.php";

$vin = $_REQUEST["vin"];
$make = $_REQUEST["make"];
$model = $_REQUEST["model"];
$year = $_REQUEST["year"];
$miles = $_REQUEST["miles"];
$owner_id = $_REQUEST["owner_id"];

if(strlen($vin) > 0) {
	$sql = "insert into car (vin,make,model,year,miles,owner_id) Values ('" . $vin . "','" . $make . 
			"','" . $model . "','" . $year . "','" . $miles . "','" . $owner_id . "');";
	$query = $mysqli->query($sql);
	if($query) {
		echo "<script>window.location='listCars.php';</script>";
	}
	else
		echo "<script>alert('VIN already exists');</script>";
}
?>

<form>
VIN: <input type="text" name="vin" value= "<?php echo $vin;?>" maxlength="17" required></br>
Make: <input type="text" name="make" value= "<?php echo $make;?>" required></br>
Model: <input type="text" name="model" value= "<?php echo $model;?>" required></br>
Year: <input type="text" name="year" value= "<?php echo $year;?>" maxlength="4" required></br>
Miles: <input type="text" name="miles" value= "<?php echo $miles;?>" required></br>
<input type="hidden" name="owner_id" value= "<?php echo $owner_id;?>" >
<input type="submit" value="Submit">
</form>

<button onclick="window.location='menu.htm';">Menu</button>