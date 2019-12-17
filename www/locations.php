<option value="PEO">Peoples Building</option>
<option value="SSS">Schmucker Science South</option>
<option value="SSN">Schmucker Science North</option>
<?php
foreach ($locations as $building)
{
  echo "<option value=\""
    echo $building[0];
    echo "\">";
    echo $Building[1];
    echo "</option>";
}
?>
