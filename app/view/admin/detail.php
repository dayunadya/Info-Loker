<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">	
	<div class="container mt-5 align-items-center">
		<div class="card text-center" style="width:18rem;">
			<div class="card-body">
				<h5 class="card-title"><?= $data['Prs']['nama']; ?></h5>
				<p class="card-text"><?= $data['Prs']['deskripsi']; ?></p>
				<br>
				<p class="card-text"><?= $data['Prs']['email']; ?></p>
				<br>
				<p class="card-text"><?= $data['Prs']['no_telp']; ?></p>
				<br>
				<p class="card-text"><?= $data['Prs']['alamat']; ?></p>
				<br>
				<a href="<?= BASEURL; ?>/admin/perusahaan" class="btn btn-primary">Kembali</a>
			</div>
		</div>
	</div>
</main>