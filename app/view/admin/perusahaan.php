

            <?php
            // Set sesi 'role' sesuai dengan peran pengguna saat login
            $_SESSION['role'] = 'admin'; // atau 'user' sesuai dengan peran pengguna
            ?>


            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="container mt-5">

                    <h3 class="fw-bold text-center">Data perusahaan</h3>
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                            Flasher::flashperu();
                            ?>
                        </div>
                    </div>


                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btnTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                        Tambah Data Perusahaan
                    </button>



                    <table class="table table-bordered mt-3" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <th>Nama Perusahaan</th>
                            <th>Deskripsi</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th>Alamat</th>
                            <th>Action</th>

                        </tr>
                        <?php $i = 1; ?>
                        <?php foreach ($data['Prs'] as $Prs) : ?>
                            <tr>
                                <td><?= $Prs['nama']; ?></td>
                                <td><?= $Prs['deskripsi']; ?></td>
                                <td><?= $Prs['email']; ?></td>
                                <td><?= $Prs['no_telp']; ?></td>
                                <td><?= $Prs['alamat']; ?></td>
                                <td>
                                    <a href="<?= BASEURL; ?>/admin/detail/<?= $Prs['id'] ?>" class="btn btn-success badge badge-primary badge-pill">Detail</a>
                                    <a href="<?= BASEURL; ?>/admin/edit/<?= $Prs['id'] ?>" class="btn btn-warning badge badge-primary tampilModalUbah badge-pill " data-id="<?= $Prs['id']; ?>">Ubah</a>
                                    <a href="<?= BASEURL; ?>/admin/hapusprs/<?= $Prs['id'] ?>" class="btn btn-danger badge badge-primary badge-pill" onclick="return confirm('yakin?');">Hapus</a>
                        </td>
                            </tr>
                            <?php $i++ ?>
                        <?php endforeach; ?>
                    </table>

                    <!-- Modal -->
                    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="FormModal" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="FormModal">Tambah Data Perusahaan</h1>
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
            </main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?= BASEURL; ?>/js/bootstrap.js"></script>
<script src="<?= BASEURL; ?>/js/script.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>