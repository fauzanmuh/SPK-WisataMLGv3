<?php
	session_start();
	include("koneksi.php");
	if (@$_SESSION['userlogin'] == "")
	{
		header("location:login.php?pesan=Belum Login");
		exit;
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
    <td height="35" bgcolor="#F0F8FF"><span class="style2"><a href="admin.php">Home</a> | <a href="alternatif.php">Wisata</a> | <a href="#">Kriteria Fuzzy</a> | <a href="#">Nilai Fuzzy</a> | <a href="wisatagis.php">GIS</a> | <a href="logout.php">Logout</a></span></td>
  </tr>
  <tr>
    <td align="center" valign="top" bgcolor="#F0FFFF"><br />
      <strong>Data Lokasi Wisata</strong><br />
      <br />
      <table width="700" border="0" cellpadding="5" cellspacing="1" bgcolor="#000099">
        <tr>
          <td width="115" bgcolor="#FFFFFF" align="center">ID Wisata</td>
          <td width="202" bgcolor="#FFFFFF" align="center">Nama Wisata</td>
          <td width="261" bgcolor="#FFFFFF" align="center">Website</td>
          <td width="261" bgcolor="#FFFFFF" align="center">Alamat</td>
          <td width="261" bgcolor="#FFFFFF" align="center">Latitude</td>
          <td width="261" bgcolor="#FFFFFF" align="center">Longitude</td>
          <td width="77" bgcolor="#FFFFFF" align="center"><a href="add-gis.php">Tambah</a></td>
        </tr>
        <?php
			$querygis = mysqli_query($db, "SELECT * FROM wisata ORDER BY id_wisata");
			while ($datagis = mysqli_fetch_array($querygis))
			{
		?>
        <tr>
          <td bgcolor="#FFFFFF" align="center"><?php echo $datagis['id_wisata']; ?></td>
          <td bgcolor="#FFFFFF"><?php echo $datagis['nama_wisata']; ?></td>
          <td bgcolor="#FFFFFF"><?php echo $datagis['website']; ?></td>
          <td bgcolor="#FFFFFF"><?php echo $datagis['alamat']; ?></td>
          <td bgcolor="#FFFFFF"><?php echo $datagis['latitude']; ?></td>
          <td bgcolor="#FFFFFF"><?php echo $datagis['longitude']; ?></td>
          <td bgcolor="#FFFFFF"><a href="edit-gis.php?id_wisata=<?php echo $datagis['id_wisata']; ?>">Edit</a> 
          <a href="del-gis.php?id_wisata=<?php echo $datagis['id_wisata']; ?>">Hapus</a></td>
        </tr>
        <?php
			}
		?>
      </table>
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
