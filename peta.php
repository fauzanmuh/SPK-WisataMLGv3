<?php
include("koneksi2.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

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
				</ul>
			</div>
		</div>
	</nav>

    <section id="services" class="services section-bg">
      <div class="container">
          <div class="text-center" data-aos="zoom-in">
            <h3 style="font-weight: bold; text-transform: uppercase;">Peta</h3>
          </div>
        <div class="panel-body" style="align-content: center;">
          <div id="map" style="width:100%;height:480px;"></div>
            <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyA7zYQTZYNv0ytcpW9SQS2TvakBzscIuS8"></script>

              <script type="text/javascript">
                function initialize() {
                  
                  var mapOptions = {   
                      zoom: 12.5,
                      center: new google.maps.LatLng(-7.9022907, 112.5678666), 
                      disableDefaultUI: false
                  };

                  var mapElement = document.getElementById('map');

                  var map = new google.maps.Map(mapElement, mapOptions);

                  setMarkers(map, officeLocations);

              }

              var officeLocations = [
              <?php
              $data = file_get_contents('http://localhost/SPK-ObjekWisata-Mlg/ambildata.php');
                              $no=1;
                              if(json_decode($data,true)){
                                $obj = json_decode($data);
                                foreach($obj->results as $item){
              ?>
              [<?php echo $item->id_wisata ?>,'<?php echo $item->nama_wisata ?>','<?php echo $item->alamat ?>', <?php echo $item->longitude ?>, <?php echo $item->latitude ?>],
              <?php 
              }
              } 
              ?>    
              ];

              function setMarkers(map, locations)
              {
                  var globalPin = 'img/marker.png';

                  for (var i = 0; i < locations.length; i++) {
                     
                      var office = locations[i];
                      var myLatLng = new google.maps.LatLng(office[4], office[3]);
                      var infowindow = new google.maps.InfoWindow({content: contentString});
                       
                      var contentString = 
                          '<div id="content">'+
                          '<div id="siteNotice">'+
                          '</div>'+
                          '<h5 id="firstHeading" class="firstHeading">'+ office[1] + '</h5>'+
                          '<div id="bodyContent">'+ 
                          '<a href=detail.php?id='+office[0]+'>Info Detail</a>'+
                          '</div>'+
                          '</div>';

                      var marker = new google.maps.Marker({
                          position: myLatLng,
                          map: map,
                          title: office[1],
                          icon:'img/marker.png'
                      });

                      google.maps.event.addListener(marker, 'click', getInfoCallback(map, contentString));
                  }
              }

              function getInfoCallback(map, content) {
                  var infowindow = new google.maps.InfoWindow({content: content});
                  return function() {
                          infowindow.setContent(content); 
                          infowindow.open(map, this);
                      };
              }

              initialize();
              </script>
          </div>

      </div>
    </section>
            </body>
            </html>
