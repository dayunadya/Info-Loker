<div class="d-flex ms-auto p-3">
    <i class="fa-solid fa-chevron-left mt-1 me-2" style="color: #0000ff;" width="100"></i>
    <a href="<?= BASEURL; ?>/home/loker" style="color: #0000ff; text-decoration: none; color:">Kembali</a>
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