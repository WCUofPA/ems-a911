<?php
foreach ($locations as $buildingCode => $buildingName)
{
    echo "<option value=\"";
    echo $buildingCode;
    echo "\">";
    echo $buildingName[1];
    echo "</option>";
}
?>
