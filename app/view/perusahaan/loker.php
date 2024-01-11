<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/styleprs.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?= BASEURL ?>/js/lokerjs.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-rqO56EATt7i0z6flqQzRII5k9EodVrZJu7WrWl+UnZ9AtX2f8b3LX6d65DgVPdN" crossorigin="anonymous"></script>

</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- <script src="<?= BASEURL ?>/js/script.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg navy-dsbrd1 position-sticky">
        <div class="container-fluid">
            <span class="navbar-brand fw-bold text-light navy-dsbrd2">Management Loker</span>
            <div class="d-flex align-items-center">
                <div class="d-flex align-items-center">
                    <a href="<?= BASEURL; ?>/welcome/prosesLogout"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                            <path d="m2 12 5 4v-3h9v-2H7V8z"></path>
                            <path d="M13.001 2.999a8.938 8.938 0 0 0-6.364 2.637L8.051 7.05c1.322-1.322 3.08-2.051 4.95-2.051s3.628.729 4.95 2.051 2.051 3.08 2.051 4.95-.729 3.628-2.051 4.95-3.08 2.051-4.95 2.051-3.628-.729-4.95-2.051l-1.414 1.414c1.699 1.7 3.959 2.637 6.364 2.637s4.665-.937 6.364-2.637c1.7-1.699 2.637-3.959 2.637-6.364s-.937-4.665-2.637-6.364a8.938 8.938 0 0 0-6.364-2.637z"></path>
                        </svg></a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid font">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar sidebar-dsbrd1">
                <div class="position-sticky">
                    <div class="sidebar-logo text-center mt-3">
                        <img src="<?= BASEURL;?>/img/logo.png" alt="Logo" class="img-fluid">
                    </div>
                    <ul class="sidebar-menu mt-5 sidebar-dsbrd2">
                        <li>
                            <i class="fa-solid fa-house me-2" style="color: white;"></i>
                            <a href="<?= BASEURL; ?>/perusahaan" class="span" style="text-decoration: none; color: white;">Beranda</a>
                        </li>
                        <br></br>
                        <li>
                            <i class="fa-solid fa-book me-2" style="color: white;"></i>
                            <a href="<?= BASEURL; ?>/perusahaan/loker" class="span" style="text-decoration: none; color: white;">Loker</a>
                        </li>
                        <br></br>
                        <!-- <li><i class='bx bx-buildings text-light'></i>
                            <a href="<?= BASEURL; ?>/perusahaan/profile">Profile</a>
                        </li> -->
                        <br></br>
                    </ul>
                </div>
            </nav>

            <?php
            // Set sesi 'role' sesuai dengan peran pengguna saat login
            $_SESSION['role'] = 'admin'; // atau 'user' sesuai dengan peran pengguna
            ?>


            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                <h2 class="text-center p-3">Data Loker</h2>
                <!-- new end -->
                <div class="container mt-3">
                    <div class="row">
                        <div class="col-log-6">
                            <?php Flasher::flash(); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg">
                            <!-- <h3>Management User</h3> -->

                            <!-- Button trigger modal -->
                            
                            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: 0;msFilter:0;">
                                    <path d="M4.5 8.552c0 1.995 1.505 3.5 3.5 3.5s3.5-1.505 3.5-3.5-1.505-3.5-3.5-3.5-3.5 1.505-3.5 3.5zM19 8h-2v3h-3v2h3v3h2v-3h3v-2h-3zM4 19h10v-1c0-2.757-2.243-5-5-5H7c-2.757 0-5 2.243-5 5v1h2z"></path>
                                </svg>
                                Tambah Loker
                            </button>
                            <!-- new -->
                            <main class="table table-bordered mt-4">
                                <table class="table table-hover">

                                    <tr>
                                        <th>posisi_loker</th>
                                        <th>deskripsi_loker</th>
                                        <th>syarat_loker</th>
                                        <th>lokasi</th>
                                        <th>gaji</th>
                                        <th>tanggal_posting </th>
                                        
                                    </tr>
                                    <?php foreach ($data['loker'] as $loker) : ?>
                                        <tr>
                                            <td><?= $loker['posisi_loker']; ?></td>
                                            <td><?= $loker['deskripsi_loker']; ?></td>
                                            <td><?= $loker['syarat_loker']; ?></td>
                                            <td><?= $loker['lokasi']; ?></td>
                                            <td><?= $loker['gaji']; ?></td>
                                            <td><?= $loker['tanggal_post']; ?></td>
                                            <td>
                                                <a href="<?= BASEURL; ?>/perusahaan/ubah/<?= $loker['id_loker']; ?>" class="badge bg-success tampilModalUbah float-right ml-1" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $loker['id_loker']; ?>">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform:0 ;msFilter:0;">
                                                        <path d="m18.988 2.012 3 3L19.701 7.3l-3-3zM8 16h3l7.287-7.287-3-3L8 13z"></path>
                                                        <path d="M19 19H8.158c-.026 0- .053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .896-2 2v14c0 1.104.897 2 2 2h14a2 2 0 0 0 2-2v-8.668l-2 2V19z"></path>
                                                    </svg>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="<?= BASEURL; ?>/perusahaan/hapus/<?= $loker['id_loker']; ?>" class="badge bg-danger float-right ml-1" onclick="return confirm('yyakin dek?');">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform:0 ;msFilter:0;">
                                                        <path d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm4 12H8v-9h2v9zm6 0h-2v-9h2v9zm.618-15L15 2H9L7.382 4H3v2h18V4z"></path>
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>

                                </table>
                            </main>
                        </div>
                    </div>

                </div>

                <!-- Modal -->
                <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="formModalLabel">Tambah Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            

                                <form action="<?= BASEURL; ?>/perusahaan/tambah" method="post">
                                    <input type="hidden" name="id" id="id">
                                    <div class="form-group ">
                                        <label for="posisi_loker">posisi_loker</label>
                                        <input type="text" class="form-control" id="posisi_loker" name="posisi_loker" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi_loker">deskripsi_loker</label>
                                        <input type="text" class="form-control" id="deskripsi_loker" name="deskripsi_loker" autocomplete="off" required>
                                    </div>
                    
                                    <div class="form-group">
                                        <label for="syarat_loker">syarat_loker</label>
                                        <input type="text" class="form-control" id="syarat_loker" name="syarat_loker" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="lokasi">lokasi</label>
                                        <input type="location" class="form-control" id="lokasi" name="lokasi" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="gaji">gaji</label>
                                        <input type="text" class="form-control" id="gaji" name="gaji" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_posting">tanggal_posting</label>
                                        <input type="date" class="form-control" id="tanggal_posting" name="tanggal_posting">
                                    </div>
                                    
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Tambah Data</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            </main>


</body>