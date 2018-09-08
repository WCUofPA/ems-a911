<?php

$from = "test@piscitello.org";
$to = "frank@piscitello.org";
$subject = "Testing Email";
$message = "CALL: " . $_POST["CallType"];
$message = $message . "PLACE: Public Safety";
$message = $message . "ADDR: 690 S Church St";
$message = $message . "CITY: West Chester";
$message = $message . "ID: 2018-FJP-011";
$message = $message . "PRI: TEST Message";
$message = $message . "INFO: Pt states the back of his eye hurts when he urinates. M/44. No resp. Conscious. Needs more psych meds. Prefers John's Hopkins ER. Not that CCH stuff.";

$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Message sent.";

?>
