<?php include "variables.php" ?>
<?php

$buildingCode = clean_data($_POST["location"]);
$city = clean_data("West Chester");
$callType = clean_data($_POST["CallType"]);
$ID = clean_data("2018-WCUEMS-1");
$PRI = clean_data("Test Message");
$Room = clean_data($_POST["room"]);
$Age = clean_data($_POST["age"]);
$AVPU = clean_data($_POST["alertness"]);
$Notes = clean_data($_POST["notes"]);


$from = "test@piscitello.org";
#$to = "frank@piscitello.org";
$to = "27576-Yz77em2hsQfTiCPv@alert.active911.com";
$subject = "WCUPA EMS DISPATCH";
$message = "CALL: " . $callType . "\n";
$message = $message . "PLACE: " . $locations[$buildingCode][BUILDINGNAME] . "\n";
$message = $message . "ADDR: ". $locations[$buildingCode][BUILDINGADDR] . "\n";
$message = $message . "CITY: ". $city . "\n";
$message = $message . "ID: ". $ID . "\n";
$message = $message . "PRI: ". $PRI . "\n";
$message = $message . "ROOM: " . $Room . "\n";
$message = $message . "INFO: ";
$message = $message . "Age: " . $Age . "\n";
$message = $message . "AVPU: " . $AVPU . "\n";
$message = $message . $Notes . "\n";

$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo $message;
echo "Message sent.";

function clean_data($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>
