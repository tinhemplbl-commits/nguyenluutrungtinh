<?php
echo "Chào bạn<br>";

if(isset($_COOKIE['time'])){
echo "Lần trước: ".date("d/m/Y H:i:s", $_COOKIE['time']);
}

setcookie("time", time(), time()+600);
?>