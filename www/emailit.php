<?php
 
$locations = array( 
	"ALG" => array("ALG","Allegheny Hall","120 University Ave"),
	"BRN" => array("BRN","Brandywine Hall",""),
	"COL" => array("COL","College Arms",""),
	"CWH" => array("CWH","Commonwealth Hall",""),
	"GOS" => array("GOS","Goshen Hall",""),
	"KIL" => array("KIL","Killinger Hall",""),
	"LAW" => array("LAW","Lawrence Hall",""),
	"SMT" => array("SMT","Schmidt Hall",""),
	"SYK" => array("SYK","Sykes Hall",""),
	"TYS" => array("TYS","Tyson Hall",""),
	"UNH" => array("UNH","University Hall",""),
	"ADV" => array("ADV","13/15 University Ave","13 University Ave"),
	"DBS" => array("DBS","RamShop","20 Linden St"),
	"UNA" => array("UNA","25 University Ave","25 University Ave"),
	"VIS" => array("VIS","30 W. Rosedale Ave","30 W. Rosedale Ave"),
	"SWK" => array("SWK","114 W. Rosedale Ave","114 W. Rosedale Ave"),
	"ALM" => array("ALM","101 Norfolk Ave","101 Norfolk Ave"),
	"CAR" => array("CAR","201 Carter Dr","201 Carter Dr"),
	"LIT" => array("LIT","210 E Rosedale Ave","210 E Rosedale Ave"),
	"EQN" => array("EQN","220 E Rosedale Ave","220 E Rosedale Ave"),
	"SIX" => array("SIX","Veterans Center","624 S High St"),
	"FLX" => array("FLX","701 S. High St","701 S. High St"),
	"BAY" => array("BAY","703 S. High St","703 S. High St"),
	"PLN" => array("PLN","809 Roslyn Ave","809 Roslyn Ave"),
	"WHS" => array("WHS","Warehouse","821 S. Matlack St"),
	"HGH" => array("HGH","823 S. High St","823 S. High St"),
	"ATH" => array("ATH","850 S. New St","850 S. New St"),
	"MAT" => array("MAT","887 S. Matlack St","887 S. Matlack St"),
	"AND" => array("AND","Anderson Hall",""),
	"BPC" => array("BPC","Business and Public Mgmt Cntr",""),
	"CSB" => array("CSB","Chemical Storage Shed",""),
	"EHG" => array("EHG","Ehinger Gym",""),
	"EOA" => array("EOA","Ehinger Annex",""),
	"EOB" => array("EOB","EO Bull Center",""),
	"FAR" => array("FAR","Farrell Stadium",""),
	"FIL" => array("FIL","Filano Hall",""),
	"LB1" => array("LB1","FHG Library",""),
	"GBC" => array("GBC","Graduate Business Center","1160 McDermott Dr"),
	"HOL" => array("HOL","Holinger Gym",""),
	"MNH" => array("MNH","Main Hall",""),
	"MCB" => array("MNB","McCoy Barn",""),
	"MCF" => array("MCF","McCoy House",""),
	"MCG" => array("MCG","McCoy Garrison",""),
	"MCK" => array("MCK","McKelvie Hall","102 E. Rosedale Ave"),
	"MER" => array("MER","Merion Hall",""),
	"MES" => array("MES","Messikomer Hall",""),
	"MIT" => array("MIT","Mitchell Hall",""),
	"UNI" => array("UNI","Montemuro House",""),
	"OLD" => array("OLD","Old Library",""),
	"PEO" => array("PEO","Peoples Building",""),
	"PHL" => array("PHL","Philips Memorial Building",""),
	"REC" => array("REC","Recitation Hall",""),
	"REY" => array("REY","Reynolds Hall",""),
	"RUB" => array("RUB","Ruby Jones Hall",""),
	"SRC" => array("SRC","Student Rec Center",""),
	"SMB" => array("SMB","Swope Music Building",""),
	"SSN" => array("SSN","Schmucker North",""),
	"SSS" => array("SSS","Schmucker South",""),
	"SSL" => array("SSL","Schmucker Link",""),
	"HSC" => array("HSC","Sturzebecker Health Science Center",""),
	"TWD" => array("TWD","Tanglewood",""),
	"WAY" => array("WAY","Wayne Hall",""),
	"GEC" => array("GEC","Glen Echo Carriage House",""),
	"GEH" => array("GEH","Glen Echo House",""),
	"ZZZ" => array("ZZZ","Other Campus Location","")
	);
constant(BUILDINGCODE,0);
constant(BUILDINGNAME,1);
constant(BUILDINGADDR,2);

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
$to = "frank@piscitello.org";
$subject = "Testing Email";
$message = "CALL: " . $callType . "\n";
$message = $message . "PLACE: " . $locations[$buildingCode][BUILDINGNAME] . "\n";
$message = $message . "ADDR: ". $locations[$buildingCode][BUILDINGADDR] . "\n";
$message = $message . "CITY: ". $city . "\n";
$message = $message . "ID: ". $ID . "\n";
$message = $message . "PRI: ". $PRI . "\n";
$message = $message . "ROOM: " . $room . "\n";
$message = $message . "INFO: ";
$message = $message . "Age: " . $Age . "\n";
$message = $message . "AVPU: " . $AVPU . "\n";
$message = $message . $Notes . "\n";

$headers = "From:" . $from;
#mail($to,$subject,$message,$headers);
echo $message;
echo "Message sent.";

function clean_data($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>
