<?php
foreach ($locations as $buildingCode => $BuildingName)
{
  foreach ($BuildingName as $BldgName)
  {
  echo "<option value=\"";
    echo $buildingCode;
    echo "\">";
    echo $BldgName;
    echo "</option>";
}
?>
