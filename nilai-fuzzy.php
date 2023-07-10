<?php
	session_start();
	include("koneksi.php");
	if (@$_SESSION['userlogin'] == "") {
		header("location:login.php?pesan=Belum Login");
		exit;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
    <td height="35" bgcolor="#F0F8FF"><span class="style2"><a href="admin.php">Home</a> | <a href="alternatif.php">Wisata</a> | <a href="kriteria-fuzzy.php">Kriteria Fuzzy</a> | 
    <a href="nilai-fuzzy.php">Nilai Fuzzy</a> | <a href="wisatagis.php">GIS</a> | <a href="logout.php">Logout</a></span></td>
  </tr>
  <tr>
    <td align="center" valign="top" bgcolor="#F0FFFF"><br />
      <strong>Data Nilai Fuzzy</strong><br />
      <br />
      <table width="700" border="2" cellpadding="5" cellspacing="1" bgcolor="#000099">
        <tr>
          <td width="226" bgcolor="#FFFFFF">Nama Alternatif</td>
          <td width="217" bgcolor="#FFFFFF">Nama Kriteria Fuzzy</td>
          <td width="126" bgcolor="#FFFFFF">Nilai</td>
		      <td width="126" bgcolor="#FFFFFF">Bawah</td>
		      <td width="126" bgcolor="#FFFFFF">Tengah</td>
		      <td width="126" bgcolor="#FFFFFF">Atas</td>
          <td width="86" bgcolor="#FFFFFF"><a href="add-nilai-fuzzy.php"><button class="btn btn-success btn-sm">Tambah</button></a></td>
        </tr>
        <?php
        $page = (isset($_GET['page']))? $_GET['page'] : 1;
        $limit = 10; 
        $limit_start = ($page - 1) * $limit;
        $no = $limit_start + 1;

			  $querynilai = "SELECT * FROM nilai_fuzzy ORDER BY id_alternatif, id_kriteria_fuzzy ASC LIMIT $limit_start, $limit";
        $hal = $db->prepare($querynilai);
      $hal->execute();
      $res1 = $hal->get_result();
        while ($datanilai = $res1->fetch_assoc()) {
				$queryalternatif = mysqli_query($db, "SELECT * FROM alternatif WHERE id_alternatif = '$datanilai[id_alternatif]'");
				$dataalternatif = mysqli_fetch_array($queryalternatif);
				$querykriteria = mysqli_query($db, "SELECT * FROM kriteria_fuzzy WHERE id_kriteria_fuzzy = '$datanilai[id_kriteria_fuzzy]'");
				$datakriteria = mysqli_fetch_array($querykriteria);
		?>
        <tr>
          <td bgcolor="#FFFFFF"><?php echo $dataalternatif['nama_alternatif']; ?></td>
          <td bgcolor="#FFFFFF"><?php echo $datakriteria['nama_kriteria_fuzzy']; ?></td>
          <td bgcolor="#FFFFFF"><?php echo $datanilai['nilai']; ?></td>
		      <td bgcolor="#FFFFFF"><?php echo number_format ($datanilai['bawah'],2); ?></td>
		      <td bgcolor="#FFFFFF"><?php echo number_format ($datanilai['tengah'],2); ?></td>
		      <td bgcolor="#FFFFFF"><?php echo number_format ($datanilai['atas'],2); ?></td>
          <td bgcolor="#FFFFFF"><a href="edit-nilai-fuzzy.php?id_nilai_fuzzy=<?php echo $datanilai['id_nilai_fuzzy']; ?>"><button class="btn btn-primary btn-sm">Edit</button></a> 
          <a href="del-nilai-fuzzy.php?id_nilai_fuzzy=<?php echo $datanilai['id_nilai_fuzzy']; ?>"><button class="btn btn-danger btn-sm" type="submit" onclick="alert('Hapus?');">Hapus</button></a></td>
        </tr>
        <?php
			}
		?>
      </table>
      <br />
      <?php
  $query_jumlah = "SELECT count(*) AS jumlah FROM nilai_fuzzy";
  $hal = $db->prepare($query_jumlah);
  $hal->execute();
  $res1 = $hal->get_result();
  $querynilai = $res1->fetch_assoc();
  $total_records = $querynilai['jumlah'];
?>
<p>Total baris : <?php echo $total_records; ?></p>
<nav class="mb-5">
  <ul class="pagination justify-content-end">
    <?php
      $jumlah_page = ceil($total_records / $limit);
      $jumlah_number = 1; //jumlah halaman ke kanan dan kiri dari halaman yang aktif
      $start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1;
      $end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page;
      
      if($page == 1){
        echo '<li class="page-item disabled"><a class="page-link" href="#">First</a></li>';
        echo '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
      } else {
        $link_prev = ($page > 1)? $page - 1 : 1;
        echo '<li class="page-item"><a class="page-link" href="?page=1">First</a></li>';
        echo '<li class="page-item"><a class="page-link" href="?page='.$link_prev.'" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
      }
 
      for($i = $start_number; $i <= $end_number; $i++){
        $link_active = ($page == $i)? ' active' : '';
        echo '<li class="page-item '.$link_active.'"><a class="page-link" href="?page='.$i.'">'.$i.'</a></li>';
      }
 
      if($page == $jumlah_page){
        echo '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
        echo '<li class="page-item disabled"><a class="page-link" href="#">Last</a></li>';
      } else {
        $link_next = ($page < $jumlah_page)? $page + 1 : $jumlah_page;
        echo '<li class="page-item"><a class="page-link" href="?page='.$link_next.'" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';
        echo '<li class="page-item"><a class="page-link" href="?page='.$jumlah_page.'">Last</a></li>';
      }
    ?>
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