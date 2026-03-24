form method="post">
Nhập mảng (vd: 1,2,3,4): 
<input type="text" name="arr">
<input type="submit" value="Xử lý">
</form>

<?php
if(isset($_POST['arr'])){
$arr = explode(",", $_POST['arr']);

echo "Mảng: ";
print_r($arr);

// Tổng chẵn
$sumChan = 0;
foreach($arr as $x){
if($x % 2 == 0) $sumChan += $x;
}
echo "<br>Tổng chẵn: $sumChan";

// Tổng lẻ
$sumLe = 0;
foreach($arr as $x){
if($x % 2 != 0) $sumLe += $x;
}
echo "<br>Tổng lẻ: $sumLe";

echo "<br>Max: ".max($arr);
echo "<br>Min: ".min($arr);

echo "<br>Đảo ngược: ";
print_r(array_reverse($arr));
}
?>