<?php include "variables.php" ?>
<?php
require_once "Mail.php";

$buildingCode = clean_data($_POST["location"]);
$city = clean_data("West Chester");
$callType = clean_data($_POST["CallType"]);
$ID = clean_data($_POST["ID"]);
$PRI = clean_data("Test Message");
$Room = clean_data($_POST["room"]);
$Age = clean_data($_POST["age"]);
$AVPU = clean_data($_POST["alertness"]);
$Notes = clean_data($_POST["notes"]);


$from = "test@piscitello.org";
$to = "frank@piscitello.org";
#$to = "PZ27576-Yz77em2hsQfTiCPv@alert.active911.com";
$subject = "WCUPA EMS DISPATCH";
$message = "CALL: " . $callType . "\n";
$message = $message . "PLACE: " . $locations[$buildingCode][BUILDINGNAME] . "\n";
$message = $message . "ADDR: ". $locations[$buildingCode][BUILDINGADDR] . "\n";
$message = $message . "CITY: ". $city . "\n";
$message = $message . "ID: ". $ID . "\n";
$message = $message . "PRI: ". $PRI . "\n";
$message = $message . "ROOM: " . $Room . "\n";
$message = $message . "AGE: " . $Age . "\n";
$message = $message . "AVPU: " . $AVPU . "\n";
$message = $message . "INFO: " . $Notes . "\n";

#$headers = "From:" . $from;
#mail($to,$subject,$message,$headers);
echo $message;
#echo "Message sent.";

$headers = array ('From' => $from,
	'To' => $to,
	'Subject' => $subject);
$smtp = Mail::factory('smtp');
$mail = $smtp->send($to, $headers, $message);
if (PEAR::isError($mail)) {
	echo ("<p>" . $mail->getMessage() . "</p>");
}
else
{
echo ("<p>Message successfully sent!</p>");
}

function clean_data($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>
