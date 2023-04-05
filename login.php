<?php
include("koneksi.php");
if (isset($_POST['button'])) {
  $querylogin = mysqli_query($db, "SELECT * FROM login WHERE username = '$_POST[username]' AND password = '$_POST[password]'");
  if ($datalogin = mysqli_fetch_array($querylogin)) {
    session_start();
    $_SESSION['userlogin'] = $datalogin['username'];
    header("location:admin.php");
  } else {
    header("location:login.php?pesan=Login Gagal");
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>SPK Destinasi Wisata Metode Fuzzy Database</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- UNICONS -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/solid.css">
  <link rel="icon" href="https://www.pinclipart.com/picdir/big/7-75302_clip-art-transparent-library-world-png-jokingart-com.png">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="assets/style_item.css">
  <!---<title> Responsive Our Team Section | CodingLab </title>---->
  <link rel="stylesheet" href="card_profile/style.css" />
  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>
  <div class="mt-5">
    <div class="row">
      <h3 class="text-center my-3">Log in</h3>
      <div class="col col-sm-1 col-lg-4"></div>
      <div class="col col-sm-10 col-lg-4">
        <form id="form1" name="form1" method="post" action="">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" name="username" id="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" id="exampleInputPassword1">
          </div>
          <input type="submit" class="btn btn-primary" name="button" id="button" value="Login" />
          <a href="index.php" class="btn btn-outline-primary rounded-3">Cancel</a>
        </form>
      </div>
      <div class="col col-sm-1 col-lg-4"></div>
    </div>
  </div>
</body>

</html>