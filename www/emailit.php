<?php

$from = "test@piscitello.org";
$to = "frank@piscitello.org";
$subject = "Testing Email";
$message = "CALL: " . $_POST["CallType"];
$message = "PLACE: Public Safety";
$message = "ADDR: 690 S Church St";
$message = "CITY: West Chester";
$message = "ID: 2018-FJP-011";
$message = "PRI: TEST Message";
$message = "INFO: Pt states the back of his eye hurts when he urinates. M/44. No resp. Conscious. Needs more psych meds. Prefers John's Hopkins ER. Not that CCH stuff.";

$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Message sent.";

?>
