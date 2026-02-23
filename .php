<?php
echo '<table width="270px" cellspacing="0px" cellpadding="0px" border="1">';

for ($row = 1; $row <= 8; $row++) {
    echo "<tr>";
    for ($col = 1; $col <= 8; $col++) {
        $color = (($row + $col) % 2 == 0) ? "white" : "black";
        echo "<td style='width:30px;height:30px;background:$color'></td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
