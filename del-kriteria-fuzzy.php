<?php
	session_start();
	include("koneksi.php");
	if (@$_SESSION['userlogin'] == "") {
		header("location:login.php?pesan=Belum Login");
		exit;
	}
	mysqli_query($db, "DELETE FROM kriteria_fuzzy WHERE id_kriteria_fuzzy = '$_GET[id_kriteria_fuzzy]'");
	echo "<script>alert('Data berhasil dihapus.');window.location='kriteria-fuzzy.php';</script>";
?>