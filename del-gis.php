<?php
	session_start();
	include("koneksi.php");
	if (@$_SESSION['userlogin'] == "")
	{
		header("location:login.php?pesan=Belum Login");
		exit;
	}
	mysqli_query($db, "DELETE FROM wisata WHERE id_wisata = '$_GET[id_wisata]'");
	header("location:wisatagis.php");
?>