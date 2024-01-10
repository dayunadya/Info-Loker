<!-- banner -->
<main style="
  background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(<?= BASEURL; ?>/img/home-bg.jpg);
  background-size: cover;
  color: white;">
<div class="container" style="height: 50vh;">
    <div class="text-center p-5 pt-5">
        <h1>Selamat Datang di Info Loker!</h1>
        <p>Temukan lowongan pekerjaan yang sesuai dengan Anda di sini</p>
    </div>

    <form class="text-center d-flex" action="<?= BASEURL; ?>/home/cari" method="post">
        <input class="form-control me-2" placeholder="Cari pekerjaan..." name="keyword" id="keyword" autocomplete="off">
        <button class="btn btn-outline-light" type="submit" id="tombolCari">Cari</button>
    </form>
</div>
</main>
<!-- banner -->


<!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f3f4f5" fill-opacity="1" d="M0,128L60,144C120,160,240,192,360,224C480,256,600,288,720,272C840,256,960,192,1080,154.7C1200,117,1320,107,1380,101.3L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></svg> -->


<!-- butuh segera -->
<div class="container px-5 my-5">
    <div class="heading d-flex">
        <h3>Butuh Segera!</h3>
        <div class="d-flex ms-auto">
            <a href="<?= BASEURL; ?>/home/loker" class="me-2" style="color: #0000ff; text-decoration: none; color:">Lihat Semua</a>
            <i class="fa-solid fa-chevron-right mt-1" style="color: #0000ff;" width="100"></i>
        </div>
    </div>
    

    <div class="container mt-4">
    <div class="row d-flex">
        <?php foreach( $data['loker'] as $loker) :?>
            <div class="col-6 col-lg-4">
                <div class="card shadow-lg mb-5 rounded h-70" style="width: 18rem;">
                    <div class="card-body">
                        <h4 class="card-title">
                            <?= $loker['posisi_loker']; ?>
                        </h4>
                        <h6 class="card-subtitle mb-2 text-body-secondary">
                            <?= $loker['nama_perusahaan']; ?>
                        </h6>
                        <hr>
                        <p class="card-text">
                            <?= $loker['lokasi']; ?>
                            <br>
                            <?= $loker['gaji']; ?>
                        </p>
                    </div>

                    <div class="card-footer text-body-secondary">
                        <?= $loker['tanggal_post']; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    </div>
</div>



<!-- butuh segera -->