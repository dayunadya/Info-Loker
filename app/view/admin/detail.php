<div class="container mt-3">
	<div class="card text-center" style="width: 18rem;">
		<div class="card-body">
			<h5 class="card-title"><?= $data['Prs']['nama_perusahaan']; ?></h5>
			<p class="card-text"><?= $data['Prs']['deskripsi']; ?></p>
            <p class="card-text"><?= $data['Prs']['email']; ?></p>
            <p class="card-text"><?= $data['Prs']['telepon']; ?></p>
            <p class="card-text"><?= $data['Prs']['alamat']; ?></p>
			<a href="<?= BASEURL; ?>/admin/perusahaan" class="btn btn-primary">Kembali</a>
		</div>
	</div>
</div>