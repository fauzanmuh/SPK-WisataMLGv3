<?php
	session_start();
	include("koneksi.php");
	if (@$_SESSION['userlogin'] == "") {
		header("location:login.php?pesan=Belum Login");
		exit;
	}
	if (isset($_POST['submit'])) {

		$id_kriteria_fuzzy=$_POST['id_kriteria_fuzzy'];
		
		$querykriteria = mysqli_query($db, "SELECT * FROM kriteria_fuzzy WHERE id_kriteria_fuzzy = '$_POST[id_kriteria_fuzzy]'");
		$datakriteria = mysqli_fetch_array($querykriteria);
					
		$nilai = $_POST['nilai'];
		
		$bt_bawah = $datakriteria['batas_bawah'];
		$bt_tengah = $datakriteria['batas_tengah'];
		$bt_atas = $datakriteria['batas_atas'];
		
		if ($nilai <= $bt_bawah) {
			$bawah = 1;
		}
        else if ($nilai >= $bt_tengah) {
			$bawah = 0;
		}
        else {
			$bawah = ($bt_tengah - $nilai)/($bt_tengah - $bt_bawah);
		}
		
		if (($bt_bawah <= $nilai) AND ($nilai <= $bt_tengah)) {
			$tengah = ($nilai - $bt_bawah) / ($bt_tengah - $bt_bawah);
		}
        else if (($bt_tengah <= $nilai) AND ($nilai <= $bt_atas)) {
			$tengah = ($bt_atas - $nilai) / ($bt_atas - $bt_tengah);
		}
        else {
			$tengah = 0;
		}
		
		if ($nilai <= $bt_tengah) {
			$atas = 0;
		}
        else if ($nilai >= $bt_atas) {
			$atas = 1;
		}
        else {
			$atas = ($nilai - $bt_tengah) / ($bt_atas - $bt_tengah);
		}
		
		mysqli_query($db, "UPDATE nilai_fuzzy SET id_alternatif = '$_POST[id_alternatif]', id_kriteria_fuzzy = '$_POST[id_kriteria_fuzzy]', 
        nilai = '$_POST[nilai]', bawah = '$bawah', tengah='$tengah', atas='$atas' WHERE id_nilai_fuzzy = '$_POST[id_nilai_fuzzy]'");
		echo "<script>alert('Data berhasil diedit.');window.location='nilai-fuzzy.php';</script>";
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Database SPK Pemilihan Objek Wisata Malang Raya</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="admin.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <li class="nav-item active">
                <a class="nav-link" href="alternatif.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Alternatif</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="kriteria-fuzzy.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Kriteria Fuzzy</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="nilai-fuzzy.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Nilai Fuzzy</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="wisatagis.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>GIS</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle" src="assets/art.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="logout.php" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tabel Nilai Fuzzy</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Nilai Fuzzy</h6>
                        </div>
                        <div class="container col-md-6 mt-4">
                            <div class="card">
                                <div class="card-body">
                                    <form action="" method="post" role="form">
                                        <?php
			$querynilai = mysqli_query($db, "SELECT * FROM nilai_fuzzy WHERE id_nilai_fuzzy = '$_GET[id_nilai_fuzzy]'");
			$datanilai = mysqli_fetch_array($querynilai);
		?>
                                        <div class="form-group">
                                            <label>ID Nilai Fuzzy</label>
                                            <input type="text" name="id_nilai_fuzzy" readonly
                                                value="<?php echo $datanilai['id_nilai_fuzzy']; ?>"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Wisata</label>
                                            <select name="id_alternatif" required="" class="form-control">
                                                <option value=""></option>
                                                <?php
					$queryalternatif = mysqli_query($db, "SELECT * FROM alternatif ORDER BY id_alternatif");
					while ($dataalternatif = mysqli_fetch_array($queryalternatif)) {
				?>
                                                <option value="<?php echo $dataalternatif['id_alternatif']; ?>"
                                                    <?php if ($datanilai['id_alternatif'] == $dataalternatif['id_alternatif']) { echo " selected"; } ?>>
                                                    <?php echo $dataalternatif['nama_alternatif']; ?></option>
                                                <?php
					}
				?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Kriteria Fuzzy</label>
                                            <select name="id_kriteria_fuzzy" required="" class="form-control">
                                                <option value=""></option>
                                                <?php
					$querykriteria = mysqli_query($db, "SELECT * FROM kriteria_fuzzy ORDER BY id_kriteria_fuzzy");
					while ($datakriteria = mysqli_fetch_array($querykriteria)) {
				?>
                                                <option value="<?php echo $datakriteria['id_kriteria_fuzzy']; ?>"
                                                    <?php if ($datanilai['id_kriteria_fuzzy'] == $datakriteria['id_kriteria_fuzzy']) { echo " selected"; } ?>>
                                                    <?php echo $datakriteria['nama_kriteria_fuzzy']; ?></option>
                                                <?php
					}
				?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nilai</label>
                                            <input type="text" name="nilai" value="<?php echo $datanilai['nilai']; ?>"
                                                class="form-control">
                                        </div>

                                        <button type="submit" class="btn btn-primary" name="submit"
                                            value="simpan">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Muhammad Fauzan 2023</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/datatables-demo.js"></script>
</body>

</html>