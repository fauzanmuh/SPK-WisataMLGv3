<?php
	session_start();
	include("koneksi.php");
	if (@$_SESSION['userlogin'] == "")
	{
		header("location:login.php?pesan=Belum Login");
		exit;
	}
	if (isset($_POST['button']))
	{
		mysqli_query($db, "INSERT INTO wisata(id_wisata, nama_wisata, website, alamat, latitude, longitude) VALUES('$_POST[id_wisata]', '$_POST[nama_wisata]', '$_POST[website]', 
        '$_POST[alamat]', '$_POST[latitude]', '$_POST[longitude]')");
		header("location:wisatagis.php");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Database SPK Pemilihan Objek Wisata Malang Raya</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Georgia, Times New Roman, Times, serif;
	font-size: 13px;
	color: #008B8B;
}
.style1 {
	color: #556B2F;
	font-size: 24px;
}
a:link {
	text-decoration: none;
	color: #333333;
}
a:visited {
	text-decoration: none;
	color: #333333;
}
a:hover {
	text-decoration: underline;
	color: #FF0000;
}
a:active {
	text-decoration: none;
	color: #333333;
}
.style2 {font-weight: bold}
-->
</style></head>

<body>
<table width="1000" border="0" align="center" cellpadding="7" cellspacing="1" bgcolor="#FFFFF0">
  <tr>
    <td height="50" bgcolor="#F0F8FF" align="center"><span class="style1">Database SPK Pemilihan Objek Wisata Malang Raya</span></td>
  </tr>
  <tr>
  <td height="35" bgcolor="#F0F8FF"><span class="style2"><a href="admin.php">Home</a> | <a href="alternatif.php">Wisata</a> | <a href="#">Kriteria Fuzzy</a> | <a href="#">Nilai Fuzzy</a> | 
  <a href="wisatagis.php">GIS</a> | <a href="logout.php">Logout</a></span></td>
  </tr>
  <tr>
    <td align="center" valign="top" bgcolor="#F0FFFF"><br />
      <strong>Tambah Data Lokasi Wisata</strong><br />
      <br />
      <form id="form1" name="form1" method="post" action="">
        <table width="450" border="0" cellpadding="5" cellspacing="1" bgcolor="#000099">
          <tr>
            <td width="159" bgcolor="#FFFFFF">Nama Wisata</td>
            <td width="218" bgcolor="#FFFFFF"><input type="text" name="nama_wisata" id="nama_wisata" /></td>
          </tr>
          <tr>
            <td width="159" bgcolor="#FFFFFF">Website</td>
            <td width="218" bgcolor="#FFFFFF"><input type="text" name="website" id="website" /></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF">Alamat</td>
            <td bgcolor="#FFFFFF"><textarea name="alamat" cols="30" rows="4" id="alamat"></textarea></td>
          </tr>
          <tr>
            <td width="159" bgcolor="#FFFFFF">Latitude</td>
            <td width="218" bgcolor="#FFFFFF"><input type="text" name="latitude" id="latitude" /></td>
          </tr>
          <tr>
            <td width="159" bgcolor="#FFFFFF">Longitude</td>
            <td width="218" bgcolor="#FFFFFF"><input type="text" name="longitude" id="longitude" /></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF">&nbsp;</td>
            <td bgcolor="#FFFFFF"><input type="submit" name="button" id="button" value="Simpan" /></td>
          </tr>
        </table>
      </form>
      <br />
    <br /></td>
  </tr>
  <tr>
  <td bgcolor="#F0F8FF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
      <td width="47%" height="35" align="left"><strong>&copy; Muhammad Fauzan</strong></td>
        <td width="53%" height="35" align="right"><strong> POLINEMA 2023</td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>