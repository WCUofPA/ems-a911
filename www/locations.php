<?php
foreach ($locations as $buildingCode => $BuildingName)
{
    echo "<option value=\"";
    echo $buildingCode;
    echo "\">";
    echo $buildingName[0];
    echo "</option>";
}
?>
