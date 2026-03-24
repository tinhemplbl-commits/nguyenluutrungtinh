<form method="post">
Email: <input type="text" name="email"><br>
Password: <input type="password" name="pass"><br>
Mã số: <input type="text" name="id"><br>
<input type="submit" value="Đăng nhập">
</form>

<?php
if(isset($_POST['email'])){
$email = $_POST['email'];
$pass = $_POST['pass'];

// giả lập
if($email == "admin@gmail.com" && $pass == "123"){
setcookie("login", $email, time()+180); // 3 phút
echo "Đăng nhập thành công";
}else{
echo "Sai thông tin";
}
}
?>
