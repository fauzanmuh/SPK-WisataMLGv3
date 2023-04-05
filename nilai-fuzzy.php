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
    <td height="35" bgcolor="#F0F8FF"><span class="style2"><a href="admin.php">Home</a> | <a href="alternatif.php">Alternatif</a> | <a href="kriteria-fuzzy.php">Kriteria Fuzzy</a> | <a href="nilai-fuzzy.php">Nilai Fuzzy</a> | <a href="logout.php">Logout</a></span></td>
  </tr>
  <tr>
    <td align="center" valign="top" bgcolor="#F0FFFF"><br />
      <strong>Data Nilai Fuzzy</strong><br />
      <br />
      <table width="900" border="0" cellpadding="5" cellspacing="1" bgcolor="#000099">
        <tr>
          <td width="189" bgcolor="#FFFFFF" align="center">ID Nilai Fuzzy</td>
          <td width="226" bgcolor="#FFFFFF" align="center">Nama Wisata</td>
          <td width="217" bgcolor="#FFFFFF" align="center">Nama Kriteria Fuzzy</td>
          <td width="126" bgcolor="#FFFFFF" align="center">Nilai</td>
		  <td width="126" bgcolor="#FFFFFF" align="center">Bawah</td>
		  <td width="126" bgcolor="#FFFFFF" align="center">Tengah</td>
		  <td width="126" bgcolor="#FFFFFF" align="center">Atas</td>
          <td width="86" bgcolor="#FFFFFF" align="center"><a href="add-nilai-fuzzy.php">Tambah</a></td>
        </tr>
        <?php
			$querynilai = mysqli_query($db, "SELECT * FROM nilai_fuzzy ORDER BY id_alternatif, id_kriteria_fuzzy");
			while ($datanilai = mysqli_fetch_array($querynilai))
			{
				$queryalternatif = mysqli_query($db, "SELECT * FROM alternatif WHERE id_alternatif = '$datanilai[id_alternatif]'");
				$dataalternatif = mysqli_fetch_array($queryalternatif);
				$querykriteria = mysqli_query($db, "SELECT * FROM kriteria_fuzzy WHERE id_kriteria_fuzzy = '$datanilai[id_kriteria_fuzzy]'");
				$datakriteria = mysqli_fetch_array($querykriteria);
		?>
        <tr>
          <td bgcolor="#FFFFFF" align="center"><?php echo $datanilai['id_nilai_fuzzy']; ?></td>
          <td bgcolor="#FFFFFF"><?php echo $dataalternatif['nama_alternatif']; ?></td>
          <td bgcolor="#FFFFFF"><?php echo $datakriteria['nama_kriteria_fuzzy']; ?></td>
          <td bgcolor="#FFFFFF"><?php echo $datanilai['nilai']; ?></td>
		  <td bgcolor="#FFFFFF"><?php echo $datanilai['bawah']; ?></td>
		  <td bgcolor="#FFFFFF"><?php echo $datanilai['tengah']; ?></td>
		  <td bgcolor="#FFFFFF"><?php echo $datanilai['atas']; ?></td>
          <td bgcolor="#FFFFFF" align="center"><a href="edit-nilai-fuzzy.php?id_nilai_fuzzy=<?php echo $datanilai['id_nilai_fuzzy']; ?>">Edit</a> 
          <a href="del-nilai-fuzzy.php?id_nilai_fuzzy=<?php echo $datanilai['id_nilai_fuzzy']; ?>">Hapus</a></td>
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
