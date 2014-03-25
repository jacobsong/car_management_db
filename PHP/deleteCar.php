<?php
include "header.php";

$vin = $_REQUEST["vin"];

$sql = "delete from car where vin = '$vin'";
$mysqli->query($sql);
?>

<script>
window.location='listCars.php';
</script>