<?php
include "header.php";

$vin = $_REQUEST["vin"];
$bodyType = $_REQUEST["bodyType"];
$color = $_REQUEST["color"];
$displacement = $_REQUEST["displacement"];
$configuration = $_REQUEST["configuration"];
$fuelSystem = $_REQUEST["fuelSystem"];
$transmissionType = $_REQUEST["transmissionType"];
$gearbox = $_REQUEST["gearbox"];
$drivetrain = $_REQUEST["drivetrain"];
$brakesType = $_REQUEST["brakesType"];
$brakesBrand = $_REQUEST["brakesBrand"];
$tiresBrand = $_REQUEST["tiresBrand"];
$tireSeason = $_REQUEST["tireSeason"];
$submitted = $_REQUEST["submitted"];

if ($submitted == "true")
{
		$mysqli->query("update body set type='$bodyType', color='$color' where car_vin='$vin';");
		$mysqli->query("update engine set displacement='$displacement', configuration='$configuration', fuelSystem='$fuelSystem' where car_vin='$vin';");
		$mysqli->query("update transmission set type='$transmissionType', gearbox='$gearbox', drivetrain='$drivetrain' where car_vin='$vin';");
		$mysqli->query("update brakes set type='$brakesType', brand='$brakesBrand' where car_vin='$vin';");
		$mysqli->query("update tires set brand='$tiresBrand', season='$tireSeason' where car_vin='$vin';");
		echo "<script>window.location='listCars.php';</script>";
}
?>

<form>
<input type="hidden" name="vin" value= "<?php echo $vin;?>">
Body Type: <input type="text" name="bodyType" value= "<?php echo $bodyType;?>"> </br>
Color: <input type="text" name="color" value= "<?php echo $color;?>"> </br>
Displacement: <input type="text" name="displacement" value= "<?php echo $displacement;?>"> </br>
Configuration: <input type="text" name="configuration" value= "<?php echo $configuration;?>"> </br>
Fuel System: <input type="text" name="fuelSystem" value= "<?php echo $fuelSystem;?>"> </br>
Transmission Type: <input type="text" name="transmissionType" value= "<?php echo $transmissionType;?>"> </br>
Gearbox: <input type="text" name="gearbox" value= "<?php echo $gearbox;?>"> </br>
Drivetrain: <input type="text" name="drivetrain" value= "<?php echo $drivetrain;?>"> </br>
Brake Type: <input type="text" name="brakesType" value= "<?php echo $brakesType;?>"> </br>
Brake Brand: <input type="text" name="brakesBrand" value= "<?php echo $brakesBrand;?>"> </br>
Tire Brand: <input type="text" name="tiresBrand" value= "<?php echo $tiresBrand;?>"> </br>
Tire Season: <input type="text" name="tireSeason" value= "<?php echo $tireSeason;?>"> </br>
<input type="hidden" name="submitted" value= "true">
<input type="submit" value="Submit">
</form>

<button onclick="window.location='menu.htm';">Menu</button>