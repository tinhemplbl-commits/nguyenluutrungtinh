<?php
$s = "TRUONG DAI HOC BAC LIEU";
$arr = explode(" ", $s);

$max = "";
foreach($arr as $w){
if(strlen($w) > strlen($max)){
$max = $w;
}
}
echo $max;
?>