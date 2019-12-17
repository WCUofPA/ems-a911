<?php
foreach ($locations as $buildingCode => $buildingName)
{
    echo "<option value=\"";
    echo $buildingCode;
    echo "\">";
    echo $buildingName[0];
    echo "</option>";
}
?>
