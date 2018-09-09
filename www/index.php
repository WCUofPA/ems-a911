<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="a911.css">
    <title>QRS-58 Active 911 Dispatch</title>
</head>
    <body>
        <h1>QRS-58 Active 911 Dispatch</h1>
	<form method="Post" action="emailit.php">
        <table width=25%>
            <tr>
                <td>Cody #</td>
                <td><input type="text" value="WC-2018-"></td>
            </tr>
            <tr>
                <td>Call Type</td>
                <td><select name="CallType">
			<?php include "calltypes.php" ?>
                </select></td>
            </tr>
            <tr>
                <td>Location</td>
                <td><select name="location">
			<?php include "locations.php" ?>
                </select></td>
            </tr>
            <tr>
                <td>Room/Area</td>
                <td><input type="text" name="room"></td>
            </tr>
            <tr>
                <td colspan=2>
                    <hr>
                </td>
            </tr>
            <tr>
                <td>Alertness:</td>
                <td><input type="radio" name="alertness">Responsive<input type=radio name="alertness">Unresponsive </td>
            </tr>
            <tr>
                <td>Age:</td>
                <td><input type="number" name="age" min=0 max=99 value=0 size=2></td>
            </tr>
            <tr>
                <td>Notes</td>
                <td> </td>
            </tr>
            <tr>
                <td colspan=2><textarea name="notes" id="" cols="40" rows="10"></textarea></td>
            </tr>
        </table>
	<input type=submit value="submit">
</form>
    </body>
