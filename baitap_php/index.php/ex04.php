<form method="post">
Số 1: <input type="number" name="a"><br>
Số 2: <input type="number" name="b"><br>
<input type="submit" name="cong" value="Cộng">
<input type="submit" name="tru" value="Trừ">
<input type="submit" name="nhan" value="Nhân">
<input type="submit" name="chia" value="Chia">
</form>

<?php
if(isset($_POST['a']) && isset($_POST['b'])){
$a = $_POST['a'];
$b = $_POST['b'];

if(isset($_POST['cong'])) echo $a+$b;
if(isset($_POST['tru'])) echo $a-$b;
if(isset($_POST['nhan'])) echo $a*$b;
if(isset($_POST['chia'])) echo $a/$b;
}
?>