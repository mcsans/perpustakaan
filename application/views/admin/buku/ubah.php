<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Ubah Data Buku</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="<?= base_url('admin/buku'); ?>">Buku</a></li>
						<li class="breadcrumb-item active">Ubah Data Buku</li>
					</ol>
				</div>
			</div>
		</div>
	</section>

	<section class="content">
		<div class="container-fluid">

			<div class="card">
				<?= form_open_multipart(); ?>
				<?= form_hidden('img', $buku['gambar']); ?>
				<?= form_hidden('id', $buku['id']); ?>
				<div class="card-body">
					<div class="row">
						<div class="form-group col-6">
							<label for="stok">Stok</label>
							<input type="text" class="form-control" id="stok" name="stok" value="<?= $buku['stok']; ?>">
							<small class="form-text text-danger mt-0"><?= form_error('stok'); ?></small>
						</div>

						<div class="form-group col-6">
							<label for="gambar">Gambar (.jpg/.jpeg/.png)</label>
							<div class="input-group">
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="gambar" name="gambar">
									<label class="custom-file-label" for="gambar">Pilih Gambar</label>
								</div>
							</div>
						</div>

						<div class="form-group col-6">
							<label for="judul">Judul</label>
							<input type="text" class="form-control" id="judul" name="judul"
								value="<?= $buku['judul']; ?>">
							<small class="form-text text-danger mt-0"><?= form_error('judul'); ?></small>
						</div>

						<div class="form-group col-6">
							<label for="pengarang">Pengarang</label>
							<input type="text" class="form-control" id="pengarang" name="pengarang"
								value="<?= $buku['pengarang']; ?>">
						</div>

						<div class="form-group col-6">
							<label for="penerbit">Penerbit</label>
							<input type="text" class="form-control" id="penerbit" name="penerbit"
								value="<?= $buku['penerbit']; ?>">
						</div>

						<div class="form-group col-6">
							<label for="tahun_terbit">Tahun Terbit</label>
							<input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit"
								value="<?= $buku['tahun_terbit']; ?>">
						</div>

						<div class="form-group col-6">
							<label for="jumlah_halaman">Jumlah Halaman</label>
							<input type="number" class="form-control" id="jumlah_halaman" name="jumlah_halaman"
								value="<?= $buku['jumlah_halaman']; ?>">
							<small class="form-text text-danger mt-0"><?= form_error('jumlah_halaman'); ?></small>
						</div>

						<div class="form-group col-6">
							<label for="isbn">ISBN</label>
							<input type="text" class="form-control" id="isbn" name="isbn" value="<?= $buku['isbn']; ?>">
						</div>
					</div>
				</div>

				<div class="card-footer bg-white">
					<a href="<?= base_url('buku'); ?>"><button type="button"
							class="btn btn-secondary col-2">Kembali</button></a>
					<button type="submit" class="btn btn-success col-2 float-right">Ubah</button>
				</div>
				<?= form_close(); ?>
			</div>
		</div>
	</section>
</div>
