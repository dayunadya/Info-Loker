
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/styleprs.css">
    <link rel="stylesheet" href="http://localhost/phpmvc/public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?= BASEURL ?>/js/script.js"></script>

</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- <script src="<?= BASEURL ?>/js/script.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <!-- <script src="<?= BASEURL ?>/js/script.js"></script> -->

    <nav class="navbar navbar-expand-lg navy-dsbrd1">
        <div class="container-fluid">
            <span class="navbar-brand fw-bold text-light navy-dsbrd2"><?= $data['judul']; ?></span>
            <div class="d-flex align-items-center">
                <div class="d-flex align-items-center">
                    <a href="<?= BASEURL; ?>/welcome/prosesLogout"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
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
                        <li><i class='bx bx-buildings text-light'></i>
                            <a href="<?= BASEURL; ?>/admin/admin">Admin</a>
                        </li>
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
                <!-- Konten Utama -->
                <div class="card kartu-profil-prs1 mt-4">
                    <div class="kartu-profil-prs mt-4" >
                        <div class="row g-0">
                            <div class="col-md-8">
                                <div class="kartu-body kartu-profil1">
                                    <li><i class='bx bx-buildings fw-bold fs-5'>
                                    <?= $msr['username']; ?></i></li>
                                    <h5><?= $msr['nama']; ?></h5>
                                    <h6><?= $msr['email']; ?></h6>
                                    <br>
                                    <li></i><i class='bx bxs-map'></i>Seoul, South Korea</li>
                                    <li></i><i class='bx bxs-phone'></i><?= $msr['telepon']; ?></li>
                                    
                                </div>
                            </div>
                            <div class="company-img col-md-4 prf-img">
                                <img src="<?= BASEURL; ?>/img/yg-entertaintment.jpeg" alt="yg-entertaintment">
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    
    