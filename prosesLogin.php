<!DOCTYPE html>
<html>
<head>
    <title>Proses Login</title>
</head>
<body>
<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin" && $password == "admin") {
    echo "<font size='6'><b>Login berhasil!</b></font><br>";
    echo "<font size='5'>Selamat datang, <font color='blue'><b>admin</b></font>.</font><br>";
    echo "<a href='login.html'><font color='purple'>kembali ke halaman login</font></a>";
} else {
    echo "<font color='red'><b>Username : $username Tidak Terdaftar!</b></font><br>";
    echo "<a href='login.html'><font color='blue'>kembali ke halaman login</font></a>";
}
?>
</body>
</html>
