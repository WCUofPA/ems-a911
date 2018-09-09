<?php
$locations = array(
	"ALG" => array("ALG","Allegheny Hall","120 University Ave"),
	"PEO" => array("PEO","Peoples Building","690 S Church St"),
	"SSS" => array("SSS","Schmucker South","750 S Church St")
	);
$buildingCode = $_POST["location"];

$from = "test@piscitello.org";
$to = "frank@piscitello.org";
$subject = "Testing Email";
$message = "CALL: " . $_POST["CallType"] . "\n";
$message = $message . "PLACE: " . $locations[$buildingCode][0] . "\n";
$message = $message . "ADDR: ". $locations[$buildingCode][1] . "\n";
$message = $message . "CITY: West Chester" . "\n";
$message = $message . "ID: 2018-FJP-011" . "\n";
$message = $message . "PRI: TEST Message" . "\n";
$message = $message . "ROOM: " . $_POST["room"] . "\n";
$message = $message . "INFO: ";
$message = $message . "Age: " . $_POST["age"] . "\n";
$message = $message . "AVPU: " . $_POST["alertness"] . "\n";
$message = $message . $_POST["notes"] . "\n";

$headers = "From:" . $from;
#mail($to,$subject,$message,$headers);
echo $message;
echo "Message sent.";

?>
