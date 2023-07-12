<?php 
$id = $_GET['id'];
include_once "ambildata_id.php";
$obj = json_decode($data);
$titles = "";
$ids = "";
$web = "";
$alamat = "";
$lat = "";
$long = "";
foreach($obj->results as $item){
  $titles.=$item->nama_wisata;
  $web.=$item->website;
  $alamat.=$item->alamat;
  $lat.=$item->latitude;
  $long.=$item->longitude;
}

$title = "Detail dan Lokasi : ".$titles;
//include_once "header.php"; ?>

<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDs835teuMFEjpu4Dxnv90gnPFQZiVMn_g"></script>

<script>

function initialize() {
  var myLatlng = new google.maps.LatLng(<?php echo $lat ?>,<?php echo $long ?>);
  var mapOptions = {
    zoom: 13,
    center: myLatlng
  };

  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading"><?php echo $titles ?></h1>'+
      '<div id="bodyContent">'+
      '<p><?php echo $alamat ?></p>'+
      '</div>'+
      '</div>';

  var infowindow = new google.maps.InfoWindow({
      content: contentString
  });

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Maps Info',
      icon:'img/marker.png'
  });
  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- UNICONS -->
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/solid.css">
	<title>Uklam-Uklam App</title>
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="assets/style_item.css">
	<link rel="stylesheet" href="style_db.css">
	<!---<title> Responsive Our Team Section | CodingLab </title>---->
	<link rel="stylesheet" href="card_profile/style.css" />
	<!-- Fontawesome CDN Link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
	<link rel="icon" href="https://www.pinclipart.com/picdir/big/7-75302_clip-art-transparent-library-world-png-jokingart-com.png">
	<!--  -->
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-white">
		<div class="container navbar">
			<a class="navbar-brand text-decoration-none mb-0 brandd text-primary" href="index.php">
				<i class="uil uil-bus-school fs-5" width="30px"></i>
				<strong>Uklam-Uklam</strong>
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link text-decoration-none active" href="index.php">Home</a>
					</li>
          <li class="nav-item">
						<a class="nav-link text-decoration-none active" href="peta.php">Kembali</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

  <div class="container" style="padding-top: 120px;">
      <div class="row">
        <div class="col-md-7" data-aos="fade-up" data-aos-delay="200">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong>Informasi Wisata </strong></h4>
            </div>
            <div class="panel-body">
             <table class="table">
               <tr>
                 <!-- <th>Item</th> -->
                 <th>Detail</th>
               </tr>
               <tr>
                 <td>Nama Wisata</td>
                 <td><h5><?php echo $titles ?></h5></td>
               </tr>
               <tr>
                 <td>Lokasi</td>
                 <td><h5><?php echo $alamat ?></h5></td>
               </tr>
               <tr>
               <td>Website</td>
                 <td><h5><a href="<?php echo $web ?>"><?php echo $web ?></a></h5></td>
               </tr>
             </table>
            </div>
            </div>
          </div>
          
        <div class="col-md-5" data-aos="zoom-in">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong>Lokasi</strong></h4>
            </div>
            <div class="panel-body">
              <div id="map-canvas" style="width:100%;height:380px;"></div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-hover-dropdown.js"></script>
<script src="js/script.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/datatable-bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>