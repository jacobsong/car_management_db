<?php
include "header.php";

$id = $_REQUEST["id"];

$sql = "delete from owner where id = $id";
$mysqli->query($sql);  
?>

<script>
window.location='listOwners.php';
</script>