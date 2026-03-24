<?php
function uscln($a,$b){
while($b != 0){
$r = $a % $b;
$a = $b;
$b = $r;
}
return $a;
}

function bscnn($a,$b){
return ($a*$b)/uscln($a,$b);
}

$a = 12; $b = 18;
echo "USCLN: ".uscln($a,$b)."<br>";
echo "BSCNN: ".bscnn($a,$b);
?>