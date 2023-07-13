<?php
	session_start();
	include("koneksi.php");
	if (@$_SESSION['userlogin'] == "") {
		header("location:login.php?pesan=Belum Login");
		exit;
	}
	mysqli_query($db, "DELETE FROM wisata WHERE id_wisata = '$_GET[id_wisata]'");
	$_SESSION["sukses"] = 'Data Berhasil Dihapus';
	echo "<script>alert('data berhasil dihapus.');window.location='wisatagis.php';</script>";
?>