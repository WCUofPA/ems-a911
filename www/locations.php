<?php
foreach ($locations as $buildingCode => $BuildingName)
{
    echo "<option value=\"";
    echo $buildingCode;
    echo "\">";
    echo key($buildingName);
    echo "</option>";
  }
}
?>
