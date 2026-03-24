<?php
$arr = [5,2,9,1,7];

echo "Max: ".max($arr)."<br>";
echo "Min: ".min($arr)."<br>";

echo "Số chính phương: ";
foreach($arr as $x){
if(sqrt($x) == floor(sqrt($x))) echo "$x ";
}

echo "<br>Số chẵn: ";
foreach($arr as $x){
if($x%2==0) echo "$x ";
}

echo "<br>Số lẻ: ";
foreach($arr as $x){
if($x%2!=0) echo "$x ";
}

sort($arr);
echo "<br>Sắp xếp tăng: ";
print_r($arr);
?>