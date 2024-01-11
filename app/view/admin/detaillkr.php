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


<!-- konten -->
<div class="d-flex ms-auto p-3">
    <i class="fa-solid fa-chevron-left mt-1 me-2" style="color: #0000ff;" width="100"></i>
    <a href="<?= BASEURL; ?>/admin/loker" style="color: #0000ff; text-decoration: none; color:">Kembali</a>
</div>

<div class="container my-5">

    <div class="heading text-center">
        <h1><?= $data['loker']['posisi_loker']; ?></h1>
        <hr>
        <h5><?= $data['loker']['nama_perusahaan']; ?></h5>
    </div>
    <br>
    <div class="body fw-bold m-5">
        <h3>Deskripsi</h3>
        <p><?= $data['loker']['deskripsi_loker']; ?></p>
    </div>

    <div class="body fw-bold m-5">
        <h3>Syarat</h3>
        <p><?= $data['loker']['syarat_loker']; ?></p>
    </div>

    <div class="row m-5 fw-bold text-center border p-3 shadow">
        <div class="col-6">
            <h5>Lokasi</h5>
            <p><?= $data['loker']['lokasi']; ?></p>
        </div>
        <div class="col-6">
            <h5>Gaji</h5>
            <p><?= $data['loker']['gaji']; ?></p>
        </div>
    </div>

    <div class="footer body-secondary m-5 text-center">
        <span><?= $data['loker']['nama_perusahaan']; ?>, <?= $data['loker']['tanggal_post']; ?></span>
    </div>

</div>


  <!-- Js Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

  <script src="<?= BASEURL; ?>/js/bootstrap.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="<?= BASEURL; ?> /js/script.js"></script>
</body>

</html>