<!DOCTYPE html>
<html>
<head>
    <title>Hasil Input</title>
    <style>
        .kotak {
            border: 1px solid gray;
            padding: 15px;
            width: 300px;
            box-shadow: 5px 5px 10px #888888;
            font-family: Arial, sans-serif;
        }
        .judul {
            background-color: #ddd;
            padding: 5px;
            margin-bottom: 10px;
        }
        .label {
            width: 80px;
            display: inline-block;
        }
        .kembali {
            color: purple;
            text-decoration: none;
        }
        .kembali:hover::after {
            content: "";
            color: orange;
        }
    </style>
</head>
<body>
<?php
$nama = $_POST['nama'];
$posisi = $_POST['posisi'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];

$pesan = "";

if ($nama == "") {
    $pesan .= "1. Input Nama belum di isi!<br>";
}
if ($password == "") {
    $pesan .= "2. Input Password belum di isi!<br>";
}
if ($confirm == "") {
    $pesan .= "3. Input Confirm Password belum di isi!<br>";
}
if ($password != "" && $confirm != "" && $password != $confirm) {
    $pesan .= "4. Password dan Confirm Password tidak sama!<br>";
}

if ($pesan != "") {
    echo "<font color='red'><b>$pesan</b></font>";
    echo "<br><a href='form.html'>Back</a>";
} else {
    echo "<div class='kotak'>";
    echo "<div class='judul'>Data yang Anda Masukkan!</div>";
    echo "<div><span class='label'>Name</span>: $nama</div>";
    echo "<div><span class='label'>Position</span>: $posisi</div><br>";
    echo "<a class='kembali' href='form.html'>back</a>";
    echo "</div>";
}
?>
</body>
</html>
