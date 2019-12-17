<option value="PEO">Peoples Building</option>
<option value="SSS">Schmucker Science South</option>
<option value="SSN">Schmucker Science North</option>
<?php
foreach ($locations as $building)
{
  print "<option value=\""
    print $building[0];
    print "\">";
    print $Building[1];
    print "</option>";
}
?>
