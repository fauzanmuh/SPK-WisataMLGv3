<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "fuzzy-tahani";

$koneksi = mysqli_connect($host, $user, $pass, $name);
 if (mysqli_connect_errno()){
        echo "Koneksi database mysqli gagal!!! : " . mysqli_connect_error();
    }
//mysqli_select_db($name, $koneksi) or die("Tidak ada database yang dipilih!");
?>