<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/styleprs.css">
    <link rel="stylesheet" href="http://localhost/JobVacancy/public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?= BASEURL ?>/js/script.js"></script>

</head>

<body>

    <!-- <script src="<?= BASEURL ?>/js/script.js"></script> -->

    <nav class="navbar navbar-expand-lg navy-dsbrd1">
        <div class="container-fluid">
            <span class="navbar-brand fw-bold text-light navy-dsbrd2">Management Loker</span>
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
                        <img src="<?= BASEURL;?>/img/logo.png" alt="Logo" class="img-fluid">
                    </div>
                    <ul class="sidebar-menu mt-5 sidebar-dsbrd2">
                        <li><i class='bx bxs-home text-light'></i>
                            <a href="<?= BASEURL; ?>/perusahaan">Beranda</a>
                        </li>
                        <br></br>
                        <li><i class='bx bxs-home text-light'></i>
                            <a href="<?= BASEURL; ?>/perusahaan/loker">Loker</a>
                        </li>
                        <br></br>
                        <!-- <li><i class='bx bx-buildings text-light'></i>
                            <a href="<?= BASEURL; ?>/perusahaan/profile">Profile</a>
                        </li> -->
                        <br></br>
                    </ul>
                </div>
            </nav>


        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <!-- Konten Utama -->
        <div class="container mt-5">
                <div class="title text-center">
                    <h1>Selamat Datang, Perusahaan!</h1>
                </div>
                        <div class="card col-3">
                            <div class="card-body text-center">
                                <h4>Jumlah Loker</h4>
                                <div class="icon-container d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="95" height="95" viewBox="0 0 245 245">
                                        <path d="M12.4598 180.465C4.54943 164.577 0.453319 147.06 0.500403 129.307V129.306C0.500403 68.0935 48.1952 18.0629 108.389 14.1435V68.018C77.7292 71.6482 53.9448 97.6223 53.9448 129.306C53.9448 137.925 55.6637 146.153 58.9757 153.599L12.4598 180.465ZM176.983 136.611H230.855C229.666 154.323 224.424 171.527 215.529 186.895C206.634 202.263 194.327 215.38 179.561 225.234L152.692 178.714C165.834 168.91 174.972 153.834 176.983 136.611ZM172.976 72.0243C163.178 62.2261 150.365 56.0217 136.611 54.4064V0.532355C194.462 4.29428 240.706 50.5377 244.468 108.389H190.594C188.978 94.6354 182.774 81.8225 172.976 72.0243ZM115.695 244.5C75.6316 244.5 40.4051 224.362 19.7651 193.173L66.2855 166.304C71.9642 173.945 79.345 180.161 87.845 184.458C96.4786 188.823 106.022 191.083 115.696 191.056C124.315 191.055 132.543 189.336 139.988 186.025L166.855 232.541C151.391 240.25 134.075 244.5 115.695 244.5Z" fill="#0000FF" stroke="#0000FF"/>
                                    </svg>
                                    <div class="ms-5">
                                        <h1 class="mt-1 fw-bold"><?= count($data['recordCount']); ?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>
        <div class="container mt-5">
                        <div class="card col-3">
                            <div class="card-body text-center">
                                <h4>Jumlah Pelamar</h4>
                                <div class="icon-container d-flex align-items-center mt-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="95" height="95" viewBox="0 0 245 245" fill="none">
                                        <path d="M12.4598 180.465C4.54943 164.577 0.453319 147.06 0.500403 129.307V129.306C0.500403 68.0935 48.1952 18.0629 108.389 14.1435V68.018C77.7292 71.6482 53.9448 97.6223 53.9448 129.306C53.9448 137.925 55.6637 146.153 58.9757 153.599L12.4598 180.465ZM176.983 136.611H230.855C229.666 154.323 224.424 171.527 215.529 186.895C206.634 202.263 194.327 215.38 179.561 225.234L152.692 178.714C165.834 168.91 174.972 153.834 176.983 136.611ZM172.976 72.0243C163.178 62.2261 150.365 56.0217 136.611 54.4064V0.532355C194.462 4.29428 240.706 50.5377 244.468 108.389H190.594C188.978 94.6354 182.774 81.8225 172.976 72.0243ZM115.695 244.5C75.6316 244.5 40.4051 224.362 19.7651 193.173L66.2855 166.304C71.9642 173.945 79.345 180.161 87.845 184.458C96.4786 188.823 106.022 191.083 115.696 191.056C124.315 191.055 132.543 189.336 139.988 186.025L166.855 232.541C151.391 240.25 134.075 244.5 115.695 244.5Z" fill="#87CEEB" stroke="#87CEEB"/>
                                    </svg>
                                    <div class="ms-5">
                                        <h1 class="mt-1 fw-bold"><?= count($data['recordCount2']); ?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                

        </main>
    </div>
    