<main class="full-page">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-5">
                <div class="card shadow rounded-4">
                    <div class="card-body">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 text-center mb-4" id="FormModal">Ubah Data Perusahaan</h1>
                                    <hr />
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?= BASEURL; ?>/admin/updatePerusahaan" method="POST">
                                        <input type="hidden" name="id_prs" id="id_prs" value="<?= $data['Prs']['id_prs'] ?>">
                                        <div class="form-group">
                                            <label for="name">Nama Perusahaan</label>
                                            <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" value="<?= $data['Prs']['nama_perusahaan']; ?>">
                                            <div class="form-group mt-3">
                                                <label for="name">Deskripsi Perusahaan</label>
                                                <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $data['Prs']['deskripsi']; ?>">
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="email">Email</label>
                                                <input type="text" class="form-control" id="email" name="email" value="<?= $data['Prs']['email']; ?>">
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="job">Telepon</label>
                                                <input type="number" class="form-control" id="telepon" name="telepon" value="<?= $data['Prs']['telepon']; ?>">
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="address">Alamat</label>
                                                <textarea class="form-control" id="alamat" name="alamat" value="<?= $data['Prs']['alamat']; ?>"></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer d-flex justify-content-between">
                                            <input type="submit" value="Ubah Data" class="btn btn-success mt-2">
                                            <a href="<?= BASEURL; ?>/admin/perusahaan" class="btn btn-primary mt-2">Kembali</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>


<!-- Bootstrap JS (optional) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?= BASEURL; ?>/js/bootstrap.js"></script>
<script src="<?= BASEURL; ?>/js/script.js"></script>
<script src="<?= BASEURL; ?>/js/prs-admin.js"></script>