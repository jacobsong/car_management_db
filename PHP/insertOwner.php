<?php
/*
  This file inserts new owners or edits old owners into the 'owners' table.
 */

include "header.php";

// Get the info from the HTML form.
$id = $_REQUEST["id"];
$fname = $_REQUEST["fname"];
$lname = $_REQUEST["lname"];
$phone = $_REQUEST["phone"];
$submitted = $_REQUEST["submitted"];

// Check if the form was submitted.
if ($submitted == "true")
{
	// Check if the fname field is empty.
	if(strlen($fname) > 0) {
		// If the fname already has an ID then it needs to be updated.
		if(strlen($id) > 0) {
			$sql = "update owner set fname='$fname',lname = '$lname',phone='$phone' where id = $id;";
		}
		// If it doesn't have an ID then it needs to be inserted.
		else
			$sql = "insert into owner (fname,lname,phone) Values ('" . $fname . "','" . $lname . "','" . $phone .  "');";
	$mysqli->query($sql);
	echo "<script>window.location='listOwners.php';</script>";
	}
}
?>

<form>
<input type="hidden" name="id" value= "<?php echo $id;?>" >
First name: <input type="text" name="fname" value= "<?php echo $fname;?>" required></br>
Last name: <input type="text" name="lname" value= "<?php echo $lname;?>" required></br>
Phone: <input type="text" name="phone" value= "<?php echo $phone;?>" required></br>
<input type="hidden" name="submitted" value= "true">
<input type="submit" value="Submit">
</form>
<button onclick="window.location='menu.htm';">Menu</button>