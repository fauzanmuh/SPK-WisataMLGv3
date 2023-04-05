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
		$querykriteria = mysqli_query($db, "SELECT * FROM kriteria_fuzzy WHERE id_kriteria_fuzzy = '$_POST[id_kriteria_fuzzy]'");
		$datakriteria = mysqli_fetch_array($querykriteria);
					
		$nilai=$_POST['nilai'];
		
		$bt_bawah=$datakriteria['batas_bawah'];
		$bt_tengah=$datakriteria['batas_tengah'];
		$bt_atas=$datakriteria['batas_atas'];
		
		if ($nilai <= $bt_bawah){
			$bawah=1;
		}else if ($nilai >= $bt_tengah){
			$bawah=0;
		}else{
			$bawah=($bt_tengah - $nilai)/($bt_tengah - $bt_bawah);
		}
		
		if (($bt_bawah <= $nilai) AND ($nilai <= $bt_tengah)){
			$tengah=($nilai - $bt_bawah)/($bt_tengah - $bt_bawah);
		}else if (($bt_tengah <= $nilai) AND ($nilai <= $bt_atas)){
			$tengah=($bt_atas - $nilai)/($bt_atas - $bt_tengah);
		}else{
			$tengah=0;
		}
		
		if ($nilai <= $bt_tengah){
			$atas=0;
		}else if ($nilai >= $bt_atas){
			$atas=1;
		}else{
			$atas=($nilai - $bt_tengah)/($bt_atas - $bt_tengah);
		}
		
		mysqli_query($db, "UPDATE nilai_fuzzy SET id_alternatif='$_POST[id_alternatif]', id_kriteria_fuzzy='$_POST[id_kriteria_fuzzy]', nilai='$_POST[nilai]', bawah='$bawah', tengah='$tengah', atas='$atas' WHERE id_nilai_fuzzy = '$_POST[id_nilai_fuzzy]'");
		header("location:nilai-fuzzy.php");
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
      <strong>Edit Data Nilai Fuzzy</strong><br />
      <br />
      <?php
			$querynilai = mysqli_query($db, "SELECT * FROM nilai_fuzzy WHERE id_nilai_fuzzy = '$_GET[id_nilai_fuzzy]'");
			$datanilai = mysqli_fetch_array($querynilai);
		?>
      <form id="form1" name="form1" method="post" action="">
        <table width="400" border="0" cellpadding="5" cellspacing="1" bgcolor="#000099">
          <tr>
            <td bgcolor="#FFFFFF">ID Nilai Fuzzy</td>
            <td bgcolor="#FFFFFF"><input type="text" name="id_nilai_fuzzy" id="id_nilai_fuzzy" readonly value="<?php echo $datanilai['id_nilai_fuzzy']; ?>" /></td>
          </tr>
          <tr>
            <td width="141" bgcolor="#FFFFFF"> Alternatif</td>
            <td width="236" bgcolor="#FFFFFF"><select name="id_alternatif" id="id_alternatif">
              <option value=""></option>
              <?php
					$queryalternatif = mysqli_query($db, "SELECT * FROM alternatif ORDER BY id_alternatif");
					while ($dataalternatif = mysqli_fetch_array($queryalternatif))
					{
				?>
              <option value="<?php echo $dataalternatif['id_alternatif']; ?>" <?php if ($datanilai['id_alternatif'] == $dataalternatif['id_alternatif']) { echo " selected"; } ?>><?php echo $dataalternatif['nama_alternatif']; ?></option>
              <?php
					}
				?>
            </select></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF">Kriteria Fuzzy</td>
            <td width="249" bgcolor="#FFFFFF"><select name="id_kriteria_fuzzy" id="id_kriteria_fuzzy">
                <option value=""></option>
                <?php
					$querykriteria = mysqli_query($db, "SELECT * FROM kriteria_fuzzy ORDER BY id_kriteria_fuzzy");
					while ($datakriteria = mysqli_fetch_array($querykriteria))
					{
				?>
                <option value="<?php echo $datakriteria['id_kriteria_fuzzy']; ?>" <?php if ($datanilai['id_kriteria_fuzzy'] == $datakriteria['id_kriteria_fuzzy']) { echo " selected"; } ?>><?php echo $datakriteria['nama_kriteria_fuzzy']; ?></option>
                <?php
					}
				?>
            </select></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF">Nilai</td>
            <td bgcolor="#FFFFFF"><input type="text" name="nilai" id="nilai" value="<?php echo $datanilai['nilai']; ?>" /></td>
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
