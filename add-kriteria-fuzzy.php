<?php
	session_start();
	include("koneksi.php");
	if (@$_SESSION['userlogin'] == "") {
		header("location:login.php?pesan=Belum Login");
		exit;
	}
	if (isset($_POST['submit'])) {
		mysqli_query($db, "INSERT INTO kriteria_fuzzy(id_kriteria_fuzzy, nama_kriteria_fuzzy, batas_bawah, batas_tengah, batas_atas, nama_bawah, nama_tengah, nama_atas) 
        VALUES('$_POST[id_kriteria_fuzzy]', '$_POST[nama_kriteria_fuzzy]', '$_POST[batas_bawah]', '$_POST[batas_tengah]', '$_POST[batas_atas]', '$_POST[nama_bawah]', '$_POST[nama_tengah]', '$_POST[nama_atas]')");
		echo "<script>alert('Data berhasil disimpan.');window.location='kriteria-fuzzy.php';</script>";
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
                    <h1 class="h3 mb-2 text-gray-800">Tabel Kriteria Fuzzy</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Kriteria</h6>
                        </div>
                        <div class="container col-md-6 mt-4">
                            <div class="card">
                                <div class="card-body">
                                    <form action="" method="post" role="form">
                                        <div class="form-group">
                                            <label>ID Kriteria Fuzzy</label>
                                            <input type="text" name="id_kriteria_fuzzy" required="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Kriteria Fuzzy</label>
                                            <input type="text" name="nama_kriteria_fuzzy" required="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Batas Bawah</label>
                                            <input type="text" name="batas_bawah" required="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Batas Tengah</label>
                                            <input type="text" name="batas_tengah" required="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Batas Atas</label>
                                            <input type="text" name="batas_atas" id="website" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Bawah</label>
                                            <input type="text" name="nama_bawah" required="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Tengah</label>
                                            <input type="text" name="nama_tengah" required="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Atas</label>
                                            <input type="text" name="nama_atas" required="" class="form-control">
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