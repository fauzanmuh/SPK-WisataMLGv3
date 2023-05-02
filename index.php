<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- UNICONS -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/solid.css">
  <title>Uklam-Uklam App</title>
  <link rel="icon" href="https://cdn.icon-icons.com/icons2/3565/PNG/512/summer_holiday_vacation_tourism_and_travel_icon_225375.png">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="assets/style_item.css">
  <!---<title> Responsive Our Team Section | CodingLab </title>---->
  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>
  <!-- NAVBAR -->
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
            <a class="nav-link text-decoration-none" href="#destination">Destinasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-decoration-none" href="#topic">Topik</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-decoration-none" href="#method">Metode</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-decoration-none" href="#parameter">Parameter & Algorithma</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
        </li>
          <li class="nav-item">
            <a href="peta.php" class="btn text-decoration-none rounded-pill btn-primary mx-lg-2">
              Cek Lokasi
            </a>
            <a href="#" class="btn text-decoration-none rounded-pill btn-primary mx-lg-2">
              Cari Wisata
            </a>
          </li>
          <li class="nav-item">
            <a class="btn text-decoration-none rounded-pill btn-outline-primary" href="login.php">Admin</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HOME -->
  <section>
    <div class="flex-container container mt-5">
      <div class="flex-item-left">
        <h1 class="display-3"><strong><strong>Uklam-Uklam</strong></strong></h1>
        <label class="home_subtitle mt-1 text-muted">Uklam-Uklam merupakan sistem pendukung keputusan pemilihan destinasi wisata di kawasan Malang Raya. Yuk Cari destinasi wisata mu disini berdasarkan kriteria kamu inginkan!</label> <br>
        <a href="#" class="btn text-decoration-none rounded btn-primary mt-3 py-3">
          Cari Wisata &nbsp;<i class="uil uil-location-arrow button_icon"></i>
        </a>
      </div>
      <div class="flex-item-right">
        <img src="assets/hiking.png" class="img-fluid rounded-3" alt="">
      </div>
    </div>
    <div class="container home_scroll-button mt-2">
      <a href="#destination">
        <label class="ms-4 text-muted"><i class="uil uil-mouse-alt h3"></i>Scroll Down</label>
      </a>
    </div>
  </section>

  <!-- ITEM Video -->
  <section class="container my-5" id="destination">
    <span class="text-primary d-flex justify-content-center"><small>Daftar</small></span>
    <h3 class="text-center mb-4">Objek Wisata</h3>
    <div class="body_item">
      <div class="wrapperr">
      <div class="card_destination">
          <img src="assets/wisata/eco green park.jpg"/>
          <div class="infoo">
            <h5>Eco Green Park</h5>
            <p><small><small>
                  Destinasi indah yang menawarkan aneka fauna dengan harga Rp. 55.000
                </small></small></p>
            <a target="_blank" href="https://www.google.com/maps/place/Eco+Green+Park/@-7.8886606,112.5276998,15z/data=!4m5!3m4!1s0x0:0x63c0ef9654873861!8m2!3d-7.8886606!4d112.5276998"><small><small>Cek Informasi </small><i class="uil uil-plane-departure"></i></small></a>
          </div>
        </div>
        <div class="card_destination">
          <img src="assets/wisata/coban putri.jpg" />
          <div class="infoo">
            <h5>Coban Putri</h5>
            <p><small><small>
                  Destinasi wisata alam air terjun dengan harga tiket Rp. 10.000
                </small></small></p>
            <a target="_blank" href="https://dolanyok.com/air-terjun-coban-putri/"><small><small>Cek Informasi </small><i class="uil uil-plane-departure"></i></small></a>
          </div>
        </div>
        <div class="card_destination">
          <img src="assets/wisata/watu ondo.jpg"/>
          <div class="infoo">
            <h5>Coban Watu Ondo</h5>
            <p><small><small>
                  Destinasi wisata alam air terjun dengan harga tiket terjangkau
                </small></small></p>
            <a target="_blank" href="https://www.pinhome.id/info-area/coban-kembar-watu-ondo/"><small><small>Cek Informasi </small><i class="uil uil-plane-departure"></i></small></a>
          </div>
        </div>
        <div class="card_destination">
          <img src="assets/wisata/coban talun.jpg"/>
          <div class="infoo">
            <h5>Coban Talun</h5>
            <p><small><small>
                  Destinasi wisata alam air terjun dengan harga tiket Rp. 12.000
                </small></small></p>
            <a target="_blank" href="https://salsawisata.com/air-terjun-coban-talun/"><small><small>Cek Informasi </small><i class="uil uil-plane-departure"></i></small></a>
          </div>
        </div>
        <div class="card_destination">
          <img src="assets/wisata/coban rondo.jpg"/>
          <div class="infoo">
            <h5>Coban Rondo</h5>
            <p><small><small>
                  Destinasi wisata alam air terjun dengan harga tiket Rp. 35.000
                </small></small></p>
            <a target="_blank" href="https://salsawisata.com/air-terjun-coban-rondo/"><small><small>Cek Informasi </small><i class="uil uil-plane-departure"></i></small></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- VIDEO -->
  <section>
      <div class="container">
        <span class="text-primary d-flex justify-content-center"><small>Jatim Park 1</small></span>
        <h3 class="text-center mb-2">Rekomendasi Wisata</h3>
      <div class="flex-container mt-2">
      <div class="flex-item-left">
          <h5 class="video_title">Inside the Sulfur Lakes of a Volcano in Bandung (Kawah Putih)</h5>
          <label class="text-muted"><small><small>178,008 views - Premiered Apr 1, 2021</small></small></label>
          <p class="video_p">"This white crater lake is composed of sulfur giving it a unique color and ominous feel like something out of a movie. This is a must see if you are visiting Bandung Indonesia!"</p>
          <a href="https://www.google.com/maps/place/Jawa+Timur+Park+1/@-7.884152,112.489808,14z/data=!4m10!1m2!2m1!1sjatim+park+1!3m6!1s0x2e78872ad61d07b9:0x59a848ad52479780!8m2!3d-7.884152!4d112.5248269!15sCgxqYXRpbSBwYXJrIDFaDiIMamF0aW0gcGFyayAxkgERcmVjcmVhdGlvbl9jZW50ZXLgAQA!16s%2Fg%2F1q5bkzmkt" target="_blank" class="btn text-decoration-none rounded-pill btn-primary mt-2 py-3">
            Visit &nbsp;<i class="uil uil-map-pin-alt button_icon"></i>
          </a>
      </div>
      <div class="flex-item-right">
        <a href="https://youtu.be/OoSinKtNLVc" target="_blank">
            <img class="img-fluid rounded-3" src="assets/wisata/jatimpark1.jpg" alt=""/>
        </a>
      </div>
    </div>
      <div class="container">
      <div class="video_row">
        <div class="video_item">
          <h5>Fasilitas</h5>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
              Kategori Lengkap <br> <label class="text-muted"><small><small>Memperoleh Nilai 85</small></small></label>
            </label>
          </div>
        </div>
        <div class="video_item">
          <h5>Harga</h5>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
              Kategori Mahal <br> <label class="text-muted"><small><small>Rp. 100.000</small></small></label>
            </label>
          </div>
        </div>
        <div class="video_item">
          <h5>Jarak dari Kota Malang</h5>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
              Kategori Jauh <br> <label class="text-muted"><small><small>45 KM</small></small></label>
            </label>
          </div>
        </div>
        <div class="video_item">
          <h5>Lahan Parkir</h5>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
              Kategori Luas <br> <label class="text-muted"><small><small>Memperoleh Nilai 85</small></small></label>
            </label>
          </div>
        </div>
        <div class="video_item">
          <h5>Spot Foto</h5>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
              Kategori Keren <br> <label class="text-muted"><small><small>Memperoleh Nilai 85</small></small></label>
            </label>
          </div>
        </div>
      </div>
      </div>
    </div>
  </section>

  <!-- TOPIC -->
  <section class="container my-5" id="topic">
    <div class="row justify-content-md-center">
      <div class="col-lg-1 topic_1"></div>
      <div class="col-lg-5 topic_3">
        <img src="assets/sea.jpg" class="img-fluid rounded-3 mb-3" alt="">
      </div>
      <div class="col-lg-5 fuzzy_component topic_2">
        <span class="text-primary"><small>Topik</small></span>
        <h3>Studi Kasus Yang Diangkat</h3>
        <p class="topic_p mt-3 text-dark">
          Luasnya wilayah Malang Raya dan banyaknya objek wisata yang ada belum dapat dimaksimalkan
          karena <strong>terbatasnya informasi objek wisata</strong> yang ada di Kawasan Malang Raya. </p>
        </p>
        <div class="mt-4">
          <a href="" class="text-decoration-none">
            <i class="uil uil-image-search fs-3"></i>
            <label class="h6 button--flex button--small button--link services_button">
              Lihat Destinasi
              <i class="uil uil-arrow-right button_icon"></i>
            </label>
          </a>
        </div>
      </div>
      <div class="col-lg-1 topic_4"></div>
    </div>
    </div>
  </section>

  <!--  Problem Solving -->
  <section class="container my-5" id="solusi">
    <div class="row justify-content-md-center">
      <div class="col-lg-1 topic_1"></div>
      <div class="col-lg-5 fuzzy_component topic_2">
        <span class="text-primary"><small>Ide Tim Petualang</small></span>
        <h3>Problem Solving</h3>
        <p class="topic_p mt-3 text-dark">
          Membuat Website untuk Sistem Pendukung Keputusan Destinasi Wisata di Kawasan Bandung Raya.
          Dengan menggunakan <strong>metode Fuzzy Logic</strong>
        <div class="mt-4">
          <a href="" class="text-decoration-none">
            <i class="uil uil-image-search fs-3"></i>
            <label class="h6 button--flex button--small button--link services_button">
              Lihat Destinasi
              <i class="uil uil-arrow-right button_icon"></i>
            </label>
          </a>
        </div>
      </div>
      <div class="col-lg-5 topic_3">
        <img src="assets/solvee.png" class="img-fluid rounded-3 solve_img" alt="">
      </div>
      <div class="col-lg-1 topic_4"></div>
    </div>
    </div>
  </section>

  <!-- FUZZY -->
  <div class="container my-5" id="method">
    <div class="row justify-content-md-center">
      <div class="col-lg-1"></div>
      <div class="col-lg-5">
        <img src="assets/question.jpg" class="img-fluid rounded-3 mb-3" alt="">
      </div>
      <div class="col-lg-5 fuzzy_component">
        <span class="text-primary"><small>Metode Fuzzy Tahani</small></span>
        <h4>Kenapa Memilih Metode Fuzzy Tahani ?</h4>
        <span class="text-muted"><small>Logika Fuzzy adalah suatu cara yang tepat untuk memetakan suatu ruang input ke dalam ruang output.
          </small></span>
        <div class="row p-2 shadow-sm bg-body rounded ms-1 mt-4">
          <div class="col-2 fuzzy_component">
            <a href="#">
              <i class="uil uil-star fs-1 warning"></i>
            </a>
          </div>
          <div class="col">
            <label><strong>Mudah</strong></label><br>
            <span class="text-muted"><small>Konsep logika Fuzzy mudah dimengerti</small></span>
          </div>
        </div>
        <div class="row p-2 shadow-sm bg-body rounded ms-1 mt-3">
          <div class="col-2 fuzzy_component">
            <a href="#">
              <i class="uil uil-check-circle fs-1 warning"></i>
            </a>
          </div>
          <div class="col">
            <label><strong>Fleksibel</strong></label><br>
            <span class="text-muted"><small>Implementasi Fuzzy tak terbatas</small></span>
          </div>
        </div>
        <div class="row p-2 shadow-sm bg-body rounded ms-1 mt-3">
          <div class="col-2 fuzzy_component">
            <a href="#">
              <i class="uil uil-border-alt fs-1 warning"></i>
            </a>
          </div>
          <div class="col">
            <label><strong>Toleransi</strong></label><br>
            <span class="text-muted"><small>Toleransi terhadap data yang tidak akurat</small></span>
          </div>
        </div>
      </div>
      <div class="col-lg-1"></div>
    </div>
  </div>

  <!-- PARAMETERS -->
  <center>
    <div class="container" id="parameter">
      <div class="parameter_img">
        <div>
          <span><small>Parameter</small></span>
          <h4>Parameter Yang Digunakan</h4>
        </div>
        <div class="parameter_text">
          <h5 class="parameter4"><i class="uil uil-star"> </i> Fasilitas</h5>
          <h5 class="parameter2"><i class="uil uil-bill"> </i> Harga</h5>
          <h5 class="parameter1"><i class="uil uil-map-pin-alt"> </i> Jarak</h5>
          <h5 class="parameter5"><i class="uil uil-sign-alt"> </i> Parkiran</h5>
          <h5 class="parameter3"><i class="uil uil-camera-plus"> </i> Spot Foto</h5>
        </div>
      </div>
    </div>
  </center>

  <!-- Alghoritma -->
  <div class="container my-5">
    <span class="text-primary d-flex justify-content-center"><small>Perhitungan</small></span>
    <h3 class="text-center mb-4">Alghoritma Parameter</h3>
    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Parameter Fasilitas
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="row">
              <div class="col">
                <img src="assets/fuzzy/Fungsi Keanggotaan Fasilitas.PNG" class="img-fluid" alt="">
              </div>
              <div class="col">
                <img src="assets/fuzzy/Rumus Fungsi Keanggotaan Fasilitas.PNG" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Parameter Harga
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="row">
              <div class="col">
                <img src="assets/fuzzy/Fungsi Keanggotaan Harga.PNG" class="img-fluid" alt="">
              </div>
              <div class="col">
                <img src="assets/fuzzy/Rumus Fungsi Keanggotaan Harga.PNG" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Parameter Jarak
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="row">
              <div class="col">
                <img src="assets/fuzzy/Fungsi Keanggotaan Jarak.PNG" class="img-fluid" alt="">
              </div>
              <div class="col">
                <img src="assets/fuzzy/Rumus Fungsi Keanggotaan Jarak.PNG" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            Parameter Luas Parkir
          </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="row">
              <div class="col">
                <img src="assets/fuzzy/Fungsi Keanggotaan Parkiran.PNG" class="img-fluid" alt="">
              </div>
              <div class="col">
                <img src="assets/fuzzy/Rumus Fungsi Keanggotaan Parkiran.PNG" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFive">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
            Parameter Spot Foto
          </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="row">
              <div class="col">
                <img src="assets/fuzzy/Fungsi Keanggotaan Spot Foto.PNG" class="img-fluid" alt="">
              </div>
              <div class="col">
                <img src="assets/fuzzy/Rumus Fungsi Keanggotaan Spot Foto.PNG" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer-distributed">

  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

			<div class="footer-left">
				<h3>About<span>Application</span></h3>

				<p class="footer-links">
					<a href="index.php">Home</a>
					|
					<a href="#destination">Destinasi</a>
					|
					<a href="#topic">Topik</a>
					|
					<a href="#method">Metode</a>
          |
					<a href="#parameter">Parameter</a>
				</p>

				<p class="footer-company-name">© 2023 Muhammad Fauzan</p>
			</div>

			<div class="footer-center">
				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:mufauzan18@gmail.com">mufauzan18@gmail.com</a></p>
				</div>
			</div>
			<div class="footer-right">
				<p class="footer-company-about">
					<span>How To Reach Me</span>
					</p>
				<div class="footer-icons">
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
				</div>
			</div>
		</footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
