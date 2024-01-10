<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $data['judul']?></title>
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">

  <!-- CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
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
    </div>
  </nav>
<!-- navbar -->

<!-- main -->
<main id="login" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(../public/img/home-bg.jpg); background-size: cover; background-position: center; width: 100%; height: 100vh; display: flex; flex-direction: column; justify-content: center; align-items: center;">
    <div class="container text-center text-light">
        <h1 style="font-size: 3.5rem;">Info Loker</h1>
        <p style="font-size: 1.5rem;">Gudang Informasi Lowongan Kerja Lengkap!</p>
    </div>
    <div class="d-flex justify-content-center pt-4">
        <a class="btn me-3" style="background-color: #2555FF; color: white;" href="<?= BASEURL ?>/welcome/login">Masuk</a>
        <a class="btn" style="background-color: #2555FF; color: white;" href="<?= BASEURL ?>/welcome/register">Daftar</a>
    </div>
</main>

<!-- main -->