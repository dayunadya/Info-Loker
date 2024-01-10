<!-- foto dan username -->
<div class="container">
    <div class="p-4 text-center">
    <?php foreach( $data['user'] as $user ) : ?>
      <img src="<?= BASEURL; ?>/img/iconamoon_profile-circle-fill.png" alt="" width="200">
      <div class="text-center">
        <h1><?= $user['nama_lengkap']; ?></h1>
        <label for="email">@usernone</label>
    <?php endforeach; ?>
      </div>
    </div>
  </div>
<!-- foto dan username -->

<!-- icon edit -->
<div class="container p-3">
  <?php Flasher::flash(); ?>
  <i class="fa-solid fa-pen-to-square fs-3 d-flex justify-content-end" style="color: #3F64C6; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#edit" data-id="<?= $user['id_user']; ?>"></i>
</div>

<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Informasi Pengguna</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form action="<?= BASEURL; ?>/user/ubah" method="post">
      <input type="hidden" name="id_user" id="id_user">
        <div class="mb-5 text-center">
          <label for="tentang_saya" class="form-label h4">Tentang Saya</label>
          <textarea type="input" class="form-control" id="tentang_saya" name="tentang_saya"></textarea>
        </div>
        <div class="mb-3 text-center">
          <label for="datadiri" class="form-label h4">Data Diri</label>
        </div>
        <div class="mb-3">
          <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
        </div>
        <div class="mb-3">
          <label for="nama_panggilan" class="form-label">Nama Panggilan</label>
          <input type="text" class="form-control" id="nama_panggilan" name="nama_panggilan">
        </div>
        <div class="mb-3">
          <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
          <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
        </div>
        <div class="mb-3">
          <label for="no_telp" class="form-label">No. Telepon</label>
          <input type="number" class="form-control" id="no_telp" name="no_telp">
        </div>
        <div class="mb-5">
          <label for="alamat" class="form-label">Lokasi saat ini</label>
          <input type="text" class="form-control" id="alamat" name="alamat">
        </div>
        <div class="mb-3 text-center">
          <label for="CV" class="form-label h4">CV</label>
        </div>
        <div class="mb-3">
        <input type="file" class="custom-file-input" id="CV" name="CV">
        </div>
      </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kosongkan</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
<!-- icon edit -->

<!-- Tentang Saya -->
<div class="container p-3">
  <div class="form-group rounded-3 p-3" style="background-color: #3F64C6;">
    <h4 style="color: white;">Tentang Saya</h4>
  </div>

  <div class="form-group p-5">
  <?php foreach( $data['user'] as $user ) : ?>
    <p><?= $user['tentang_saya']; ?></p>
  </div>
</div>
<!-- Tentang Saya -->

<!-- Data Diri -->
<div class="container p-3">
  <div class="form-group rounded-3 p-3" style="background-color: #3F64C6;">
    <h4 style="color: white;">Data Diri</h4>
  </div>

  <form class="form-group p-4">
    <div class="mb-3">
    <label for="NamaLengkap">Nama Lengkap</label>
    <p><?= $user['nama_lengkap']; ?></p>
    </div>
    <div class="mb-3">
    <label for="NamaPanggilan">Nama Panggilan</label>
    <p><?= $user['nama_panggilan']; ?></p>
    </div>
    <div class="mb-3">
    <label for="TanggalLahir">Tanggal Lahir</label>
    <p><?= $user['tgl_lahir']; ?></p>
    </div>
    <div class="mb-3">
    <label for="NoTelepon">No Telepon</label>
    <p><?= $user['no_telp']; ?></p>
    </div>
    <div class="mb-3">
    <label for="Lokasisaatini">Lokasi saat ini</label>
    <p><?= $user['alamat']; ?></p>
    </div>
</form>
</div>
<!-- Data Diri -->

<!-- CV -->
<div class="container p-3">
  <div class="form-group rounded-3 p-3" style="background-color: #3F64C6;">
    <h4 style="color: white;">CV</h4>
  <?php endforeach; ?>
  </div>

  <div class="form-group p-5">
  <form action="proses-upload.php" method="post" enctype="multipart/form-data">
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="fileInput" name="file">
                </div>
            </div>
        </form>
  </div>
</div>
<!-- CV -->