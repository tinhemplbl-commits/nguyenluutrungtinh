<table border="1" cellspacing="0">
<?php
for($i=0;$i<8;$i++){
echo "<tr>";
for($j=0;$j<8;$j++){
$color = (($i+$j)%2==0) ? "white" : "black";
echo "<td width='40' height='40' bgcolor='$color'></td>";
}
echo "</tr>";
}
?>
</table>