<?php
$matrix = [
[1.1,2.3,3.1,4.0,5.0],
[6.2,7.7,8.8,9.5,1.2],
[4.6,1.9,3.6,8.9,1.5],
[1.6,1.7,1.8,1.9,2.0]
];

// Max
$max = $matrix[0][0];
foreach($matrix as $row){
foreach($row as $val){
if($val > $max) $max = $val;
}
}
echo "Max: $max<br>";

// Min
$min = $matrix[0][0];
foreach($matrix as $row){
foreach($row as $val){
if($val < $min) $min = $val;
}
}
echo "Min: $min<br>";

// Tổng
$sum = 0;
foreach($matrix as $row){
foreach($row as $val){
$sum += $val;
}
}
echo "Tổng: $sum<br>";

// In ma trận
echo "<table border='1'>";
foreach($matrix as $row){
echo "<tr>";
foreach($row as $val){
echo "<td>$val</td>";
}
echo "</tr>";
}
echo "</table>";
?>