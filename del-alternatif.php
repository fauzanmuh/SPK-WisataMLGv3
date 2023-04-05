<?php
	session_start();
	include("koneksi.php");
	if (@$_SESSION['userlogin'] == "")
	{
		header("location:login.php?pesan=Belum Login");
		exit;
	}
	mysqli_query($db, "DELETE FROM alternatif WHERE id_alternatif = '$_GET[id_alternatif]'");
	header("location:alternatif.php");
?>