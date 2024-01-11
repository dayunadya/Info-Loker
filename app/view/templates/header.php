<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $data['judul']?></title>
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">

  <!-- CSS Bootstrap -->
  <link href="<?= BASEURL; ?>/css/bootstrap.css" rel="stylesheet">

  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

  <!-- navbar -->
  <nav class="navbar">
    <div class="container">
      <a class="navbar-brand mx-auto" href="#">
        <img src="<?= BASEURL;?>/img/logo.png" alt="Bootstrap" width="200" height="50">
      </a>
      <!-- <li class="nav-item d-flex">
                <a href="nav-link">
                    <i class="fa-solid fa-user fa-xl" style="color: #ffffff;"></i>
                </a>
            </li> -->
    </div>
  </nav>

  <nav class="nav nav-pills nav-fill pb-2" style="cursor: pointer;">
    <div class="nav-item">
      <i class="fas fa-home nav-icon"></i>
      <a href="<?= BASEURL; ?>/home" class="span" style="text-decoration: none; color: white;">Beranda</a>
    </div>
    <div class="nav-item">
      <i class="fa-solid fa-briefcase"></i>
      <a href="<?= BASEURL; ?>/home/loker" class="span" style="text-decoration: none; color: white;">Loker</a>
    </div>
    <!-- <div class="nav-item">
      <i class="fas fa-book nav-icon"></i>
      <a href="" class="span" style="text-decoration: none; color: white;">Koleksi</a>
    </div>
    <div class="nav-item">
      <i class="fas fa-bell nav-icon"></i>
      <a href="" class="span" style="text-decoration: none; color: white;">Notifikasi</a>
    </div>
    <div class="nav-item">
      <i class="fas fa-user nav-icon"></i>
      <a href="<?= BASEURL; ?>/user" class="span" style="text-decoration: none; color: white;"  >Pengguna</a>
    </div> -->
    <div class="nav-item">
      <i class="fa-solid fa-arrow-right-from-bracket" style="color: #ffffff;"></i>
      <a href="<?= BASEURL; ?>/welcome/prosesLogout" class="span" style="text-decoration: none; color: white;"  >Logout</a>
    </div>
  </nav>
  <!-- navbar -->