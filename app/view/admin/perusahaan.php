
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
                <!-- new end -->
                <div class="container mt-3">
                    <div class="row">
                        <div class="col-log-6">
                            <?php Flasher::flash(); ?>
                        </div>
                    </div>
                    <div class="row">
            <div class="col-lg">
            <!-- <div class="row"> -->
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: 0;msFilter:0;"><path d="M4.5 8.552c0 1.995 1.505 3.5 3.5 3.5s3.5-1.505 3.5-3.5-1.505-3.5-3.5-3.5-3.5 1.505-3.5 3.5zM19 8h-2v3h-3v2h3v3h2v-3h3v-2h-3zM4 19h10v-1c0-2.757-2.243-5-5-5H7c-2.757 0-5 2.243-5 5v1h2z"></path></svg>
        Tambah Perusahaan
            </button>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                
                <div class="row align-items-center mt-5 fw-bold">
                  
                    <div class="col">
                        <p class="mb-0">Nama</p>
                    </div>
                    <div class="col">
                        <p class="mb-0">Deskripsi</p>
                    </div>
                    <div class="col">
                        <p class="mb-0">Alamat</p>
                    </div>
                    <div class="col">
                        <p class="mb-0">Email</p>
                    </div>
                    <div class="col">
                        <p class="mb-0">Telepon</p>
                    </div>
                    <div class="col">
                        <p class="mb-0">Action</p>
                    </div>
                    
                </div>
                <hr>
                <?php foreach( $data['prs'] as $prs ): ?>
                <div class="row align-items-center mt-5">
                    
                    <div class="col">
                        <p class="mb-0"><?= $prs['nama']; ?></p>
                    </div>
                    <div class="col">
                        <p class="mb-0"><?= $prs['deskripsi']; ?></p>
                    </div>
                    <div class="col">
                        <p class="mb-0"><?= $prs['alamat']; ?></p>
                    </div>
                    <div class="col">
                        <p class="mb-0"><?= $prs['email']; ?></p>
                    </div>
                    <div class="col">
                        <p class="mb-0"><?= $prs['telepon']; ?></p>
                    </div>
                    <div class="col">
                        <p class="mb-0"><a href="<?= BASEURL; ?>/admin/ubah/<?= $msr['id'];?>" class="badge bg-success tampilModalUbah float-right ml-1" data-bs-toggle="modal" data-bs-target="#formModal"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m18.988 2.012 3 3L19.701 7.3l-3-3zM8 16h3l7.287-7.287-3-3L8 13z"></path><path d="M19 19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .896-2 2v14c0 1.104.897 2 2 2h14a2 2 0 0 0 2-2v-8.668l-2 2V19z"></path></svg></a> <a href="<?= BASEURL; ?>/muser/hapus/<?= $msr['id'];?>" class="badge bg-danger float-right ml-1" onclick="return confirm('yyakin dek?');"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm4 12H8v-9h2v9zm6 0h-2v-9h2v9zm.618-15L15 2H9L7.382 4H3v2h18V4z"></path></svg></a> </p>
                    </div>
                    <div class="col-auto">
                        <i class='bx bxs-pencil bx-xs'></i>
                        <i class='bx bxs-trash bx-xs'></i>
                    </div>
                </div>
                <?php endforeach; ?>
                <hr>

            </main>
            </div>
            
        </div>
    </div>
    <div class="modal fade" id="formModal4" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="formModalLabel">Tambah Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form action="<?= BASEURL; ?>/admin/perusahaan/tambah" method="post">
                                    <input type="hidden" name="id" id="id">
                                  
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_kelamin">deskripsi</label>
                                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" autocomplete="off" required>
                                    </div>


                                    <div class="form-group">
                                        <label for="telepon">telepon</label>
                                        <input type="number" class="form-control" id="telepon" name="telepon" required>
                                    </div>
                                    


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Tambah Data PeruSsahaan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            </main>
