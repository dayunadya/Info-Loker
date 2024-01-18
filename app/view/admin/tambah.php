<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Perusahaan </title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/admin.css">
</head>

<body>

    <!-- Modal -->
    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Perusahaan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="<?= BASEURL; ?>/admin/tambahprs" method="POST">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label for="username">username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="" value="">
                        </div>
                        <div class="form-group">
                            <label for="name">Nama Perusahaan</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="" value="">
                        </div>
                        <div class="form-group mt-3">
                            <label for="name">Deskripsi Perusahaan</label>
                            <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskripsi" value="">
                        </div>
                        <input type="hidden" class="form-control" name="jenis_kelamin" id="jenis_kelamin" placeholder="Deskripsi" value="">
                        <div class="form-group mt-3">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Masukkan Email Perusahaan" value="">
                        </div>
                        <div class="form-group mt-3">
                            <label for="job">Telepon</label>
                            <input type="number" class="form-control" name="no_telp" id="no_telpa" placeholder="Masukkan no telepon" value="">
                        </div>
                        <div class="form-group mt-3">
                            <label for="address">Alamat</label>
                            <textarea class="form-control" name="alamat" id="address" placeholder="Masukkan Alamat" value=""></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <label for="password">Password</label>
                            <textarea class="form-control" name="password" id="password" placeholder="Masukkan Alamat" value=""></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <label for="akses">akses</label>
                            <textarea class="form-control" name="akses" id="akses" placeholder="Masukkan akses" value=""></textarea>
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
    </div>
    </div>
    </main>


    <!-- Bootstrap JS (optional) -->
    <script src="<?= BASEURL; ?>/js/bootstrap.js"></script>
</body>