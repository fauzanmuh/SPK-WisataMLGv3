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
<title>SPK Destinasi Wisata Metode Fuzzy Database</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Georgia, Times New Roman, Times, serif;
	font-size: 13px;
	color: #333333;
}
.style1 {
	color: #000099;
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
<table width="1000" border="0" align="center" cellpadding="7" cellspacing="1" bgcolor="#000099">
  <tr>
    <td height="50" bgcolor="#FFFFFF" align="center"><span class="style1">SPK Destinasi Wisata Metode Fuzzy Database</span></td>
  </tr>
  <tr>
    <td height="35" bgcolor="#FFFFFF"><span class="style2"><a href="admin.php">Home</a> | <a href="alternatif.php">Alternatif</a> | <a href="kriteria-fuzzy.php">Kriteria Fuzzy</a> | <a href="nilai-fuzzy.php">Nilai Fuzzy</a> | <a href="logout.php">Logout</a></span></td>
  </tr>
  <tr>
    <td align="center" valign="top" bgcolor="#FFFFFF"><br />
      <strong>Data Kriteria Fuzzy</strong><br />
      <br />
      <table width="700" border="0" cellpadding="5" cellspacing="1" bgcolor="#000099">
        <tr>
          <td width="79" bgcolor="#FFFFFF">ID Kriteria Fuzzy</td>
          <td width="196" bgcolor="#FFFFFF">Nama Kriteria Fuzzy</td>
          <td width="129" bgcolor="#FFFFFF">Batas Bawah</td>
          <td width="129" bgcolor="#FFFFFF">Batas Tengah</td>
          <td width="129" bgcolor="#FFFFFF">Batas Atas</td>
          <td width="129" bgcolor="#FFFFFF">Nama Bawah</td>
          <td width="129" bgcolor="#FFFFFF">Nama Tengah</td>
          <td width="140" bgcolor="#FFFFFF">Nama Atas</td>
          <td width="100" bgcolor="#FFFFFF"><a href="add-kriteria-fuzzy.php">Add</a></td>
        </tr>
        <?php
			$querykriteria = mysqli_query($db, "SELECT * FROM kriteria_fuzzy ORDER BY id_kriteria_fuzzy");
			while ($datakriteria = mysqli_fetch_array($querykriteria))
			{
		?>
        <tr>
          <td bgcolor="#FFFFFF"><?php echo $datakriteria['id_kriteria_fuzzy']; ?></td>
          <td bgcolor="#FFFFFF"><?php echo $datakriteria['nama_kriteria_fuzzy']; ?></td>
          <td bgcolor="#FFFFFF"><?php echo $datakriteria['batas_bawah']; ?></td>
          <td bgcolor="#FFFFFF"><?php echo $datakriteria['batas_tengah']; ?></td>
          <td bgcolor="#FFFFFF"><?php echo $datakriteria['batas_atas']; ?></td>
          <td bgcolor="#FFFFFF"><?php echo $datakriteria['nama_bawah']; ?></td>
          <td bgcolor="#FFFFFF"><?php echo $datakriteria['nama_tengah']; ?></td>
          <td bgcolor="#FFFFFF"><?php echo $datakriteria['nama_atas']; ?></td>
          <td bgcolor="#FFFFFF"><a href="edit-kriteria-fuzzy.php?id_kriteria_fuzzy=<?php echo $datakriteria['id_kriteria_fuzzy']; ?>">Edit</a> <a href="del-kriteria-fuzzy.php?id_kriteria_fuzzy=<?php echo $datakriteria['id_kriteria_fuzzy']; ?>">Del</a></td>
        </tr>
        <?php
			}
		?>
      </table>
      <br />
    <br /></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
      <td width="47%" height="35" align="left"><strong>&copy; Kelompok 5</strong></td>
        <td width="53%" height="35" align="right"><strong> Logika Informatika 2021</td>
        </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
