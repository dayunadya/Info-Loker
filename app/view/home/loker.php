<h1 class="mt-5 mb-4 text-center">Lowongan Kerja Tersedia!</h1>
<div class="container text-center">
    <hr>
</div>

<div class="container my-5">
  <div class="row d-flex justify-content-start">
    <?php foreach( $data['loker'] as $loker) :?>
        <div class="col-6 col-lg-4">
            <div class="card shadow-lg mb-5 rounded">
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
                    
                    <a href="<?= BASEURL; ?>/home/detail/<?= $loker['id_loker']; ?>" class="card-link d-flex justify-content-end" 
                    style="color: #003364;">Selengkapnya</a>
                </div>
                
                <div class="card-footer text-body-secondary">
                    <?= $loker['tanggal_post']; ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
  </div>
</div>


<!-- Modal
<div class="modal fade" id="detailLoker" tabindex="-1" aria-labelledby="modalTitle" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalTitle"></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer text-body-secondary">
          
        </div>
      </div>
  </div>
</div> -->


<!-- Navigation -->
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
</div>