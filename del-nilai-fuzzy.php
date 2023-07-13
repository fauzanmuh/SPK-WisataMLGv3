<?php
	session_start();
	include("koneksi.php");
	if (@$_SESSION['userlogin'] == "") {
		header("location:login.php?pesan=Belum Login");
		exit;
	}
	mysqli_query($db, "DELETE FROM nilai_fuzzy WHERE id_nilai_fuzzy = '$_GET[id_nilai_fuzzy]'");
	echo "<script>alert('Data berhasil dihapus.');window.location='nilai-fuzzy.php';</script>";
?>