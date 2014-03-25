<?php
include "header.php";

$oldVin = $_REQUEST["oldVin"];
$newVin = $_REQUEST["newVin"];
$make = $_REQUEST["make"];
$model = $_REQUEST["model"];
$year = $_REQUEST["year"];
$miles = $_REQUEST["miles"];
$submitted = $_REQUEST["submitted"];

if ($submitted == "true") {
	$sql = "update car set vin='$newVin', make='$make', model='$model', year='$year', miles='$miles' where vin = '$oldVin';";
	$query = $mysqli->query($sql);
	$oldVin = $newVin;
	if($query) {
		echo "<script>window.location='listCars.php';</script>";
	}
	else
		echo "<script>alert('VIN already exists');</script>";
}
?>

<form>
VIN: <input type="text" name="newVin" value= "<?php echo $oldVin;?>" maxlength="17" required></br>
<input type="hidden" name="oldVin" value= "<?php echo $oldVin;?>">
Make: <input type="text" name="make" value= "<?php echo $make;?>" required></br>
Model: <input type="text" name="model" value= "<?php echo $model;?>" required></br>
Year: <input type="text" name="year" value= "<?php echo $year;?>" maxlength="4" required></br>
Miles: <input type="text" name="miles" value= "<?php echo $miles;?>" required></br>
<input type="hidden" name="submitted" value= "true">
<input type="submit" value="Submit">
</form>

<button onclick="window.location='menu.htm';">Menu</button>