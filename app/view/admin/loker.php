
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/styleprs.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- <script src="<?= BASEURL ?>/js/script.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <!-- <script src="<?= BASEURL ?>/js/script.js"></script> -->

    <nav class="navbar navbar-expand-lg navy-dsbrd1 position-sticky">
        <div class="container-fluid">
            <span class="navbar-brand fw-bold text-light navy-dsbrd2"><?= $data['judul']; ?></span>
            <div class="d-flex align-items-center">
                <div class="d-flex align-items-center">
                    <a href="<?= BASEURL; ?>/welcome/prosesLogout">
                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1); transform: ; msFilter:;">
                            <path d="m2 12 5 4v-3h9v-2H7V8z"></path>
                            <path d="M13.001 2.999a8.938 8.938 0 0 0-6.364 2.637L8.051 7.05c1.322-1.322 3.08-2.051 4.95-2.051s3.628.729 4.95 2.051 2.051 3.08 2.051 4.95-.729 3.628-2.051 4.95-3.08 2.051-4.95 2.051-3.628-.729-4.95-2.051l-1.414 1.414c1.699 1.7 3.959 2.637 6.364 2.637s4.665-.937 6.364-2.637c1.7-1.699 2.637-3.959 2.637-6.364s-.937-4.665-2.637-6.364a8.938 8.938 0 0 0-6.364-2.637z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid font">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar sidebar-dsbrd1">
                <div class="position-sticky">
                    <div class="sidebar-logo text-center mt-3">
                        <img src="<?= BASEURL ?>/img/logo.png" alt="Logo" class="img-fluid">
                    </div>
                    <ul class="sidebar-menu mt-5 sidebar-dsbrd2">
                        <li><i class='bx bxs-home text-light'></i>
                            <a href="<?= BASEURL; ?>/admin">Beranda</a>
                        </li>
                        <br></br>
                        <li><i class='bx bxs-home text-light'></i>
                            <a href="<?= BASEURL; ?>/admin/pengguna">Pengguna</a>
                        </li>
                        <br></br>
                        <li><i class='bx bx-file text-light'></i>
                            <a href="<?= BASEURL; ?>/admin/perusahaan">Perusahaan</a>
                        </li>
                        <br></br>
                        <li><i class='bx bx-file text-light'></i>
                            <a href="<?= BASEURL; ?>/admin/loker">Lowongan Kerja</a>
                        </li>
                        <br></br>
                        <!-- <li><i class='bx bx-buildings text-light'></i>
                            <a href="<?= BASEURL; ?>/admin/admin">Admin</a>
                        </li> -->
                        <br></br>
                        <!-- <li style="list-style: none;"><i class='bx bx-buildings text-light'></i>
                            <a href="<?= BASEURL; ?>/muser/user">user</a>
                        </li> -->
                    </ul>
                </div>
            </nav>

            <?php
            // Set sesi 'role' sesuai dengan peran pengguna saat login
            $_SESSION['role'] = 'admin'; // atau 'user' sesuai dengan peran pengguna
            ?>


            

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="text-heading text-center mt-4 mb-5">
            <h2>Data Lowongan Kerja</h2>
            </div>

            <div class="container">
                <a class="btn d-flex fa-solid fa-plus fs-5 gap-2 tombolTambahData" href="#" role="button" data-bs-toggle="modal" data-bs-target="#formModal" style="color: #003364;">
                    <span>Tambah Data Loker</span>
                </a>
                <div class="row mt-3 text-center">
                    <?php Flasher::flash(); ?>
                </div> 
            </div>

            <div class="container mb-3">
            <div class="text-center">
                <form action="<?= BASEURL; ?>/admin/loker" method="post">
                    <div class="input-group mt-3">
                    <input type="text" class="form-control" placeholder="Cari posisi..." name="keyword" id="keyword" autocomplete="off">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                    </div>
                </form>
                </div>
            </div>


            <div class="container">
            <div class="card my-4">
                <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Posisi</th>
                        <th scope="col">Perusahaan</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Syarat</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Gaji</th>
                        <th scope="col">Tanggal diunggah</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; ?>
                    <?php foreach( $data['loker'] as $loker) :?>
                    <tr>
                        <th scope="row"><?= $i;?></th>
                        <td><?= $loker['posisi_loker']; ?></td>
                        <td><?= $loker['nama_perusahaan']; ?></td>
                        <td><?= $loker['deskripsi_loker']; ?></td>
                        <td><?= $loker['syarat_loker']; ?></td>
                        <td><?= $loker['lokasi']; ?></td>
                        <td><?= $loker['gaji']; ?></td>
                        <td><?= $loker['tanggal_post']; ?></td>
                        <td>
                        <a href="<?= BASEURL; ?>/admin/detaillkr/<?= $loker['id_loker']; ?>" class="badge text-bg-primary ml-1">detail</a>
                        <a href="<?= BASEURL; ?>/admin/ubahlkr/<?= $loker['id_loker']; ?>" class="badge text-bg-success ml-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $loker['id_loker']; ?>">ubah</a>
                        <a href="<?= BASEURL; ?>/admin/hapuslkr/<?= $loker['id_loker']; ?>" class="badge text-bg-danger ml-1" onclick="return confirm('yakin?');">hapus</a></td>
                    </tr>
                    </tbody>
                    <?php $i++ ?>
                    <?php endforeach; ?>
                </table>
                </div>
            </div>
            </div>
        </main>


        <!-- modal -->
        <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Tambah Data Loker</h1>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/admin/tambahlkr" method="post">
                <input type="hidden" name="id_loker" id="id_loker">
                <div class="form-group mb-3">
                    <label for="nama_perusahaan">Perusahaan</label>
                    <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan">
                </div>
                <div class="form-group mb-3">
                    <label for="posisi_loker">Posisi</label>
                    <input type="text" class="form-control" id="posisi_loker" name="posisi_loker">
                </div>
                <div class="form-group mb-3">
                    <label for="deskripsi_loker">Deskripsi</label>
                    <textarea type="text" class="form-control" id="deskripsi_loker" name="deskripsi_loker"></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="syarat_loker">Syarat</label>
                    <textarea type="text" class="form-control" id="syarat_loker" name="syarat_loker"></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="lokasi">Lokasi</label>
                    <textarea type="text" class="form-control" id="lokasi" name="lokasi"></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="gaji">Gaji</label>
                    <input type="text" class="form-control" id="gaji" name="gaji">
                </div>
                <div class="form-group mb-3">
                    <label for="tanggal_post">Tanggal diunggah</label>
                    <input type="date" class="form-control" id="tanggal_post" name="tanggal_post">
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
            </div>
        </div>
        </div>


  <!-- Js Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

  <script src="<?= BASEURL; ?>/js/bootstrap.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="<?= BASEURL; ?>/js/script2.js"></script>
</body>

</html>