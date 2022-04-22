<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Ubah Data Mahasiswa</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="<?= base_url('admin/mahasiswa'); ?>">Mahasiswa</a></li>
						<li class="breadcrumb-item active">Ubah Data</li>
					</ol>
				</div>
			</div>
		</div>
	</section>

	<section class="content">
		<div class="container-fluid">

			<div class="card">
				<?= form_open_multipart(); ?>
				<?= form_hidden('img', $mahasiswa['gambar']); ?>
				<div class="card-body">
					<div class="row">
						<div class="form-group col-6">
							<label for="nim">NIM</label>
							<input type="text" class="form-control" id="nim" name="nim"
								value="<?= $mahasiswa['nim']; ?>">
						</div>

						<div class="form-group col-6">
							<label for="gambar">Gambar</label>
							<div class="input-group">
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="gambar" name="gambar">
									<label class="custom-file-label" for="gambar">Pilih Gambar</label>
								</div>
							</div>
						</div>

						<div class="form-group col-6">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="nama" name="nama"
								value="<?= $mahasiswa['nama']; ?>">
						</div>

						<div class="form-group col-6">
							<label for="jurusan">Jurusan</label>
							<input type="text" class="form-control" id="jurusan" name="jurusan"
								value="<?= $mahasiswa['jurusan']; ?>">
						</div>

						<div class="form-group col-6">
							<label for="jk">Jenis Kelamin</label>
							<select class="form-control" name="jk" id="jk" required>
								<option value="Laki-Laki" <?= $mahasiswa['jk'] == 'Laki-Laki' ? 'selected' : ''; ?>>
									Laki-Laki</option>
								<option value="Perempuan" <?= $mahasiswa['jk'] == 'Wanita' ? 'selected' : ''; ?>>
									Perempuan</option>
							</select>
						</div>

						<div class="form-group col-6">
							<label for="ttl">Tempat, Tanggal Lahir</label>
							<input type="text" class="form-control" id="ttl" name="ttl"
								value="<?= $mahasiswa['ttl']; ?>">
						</div>

						<div class="form-group col-6">
							<label for="telepon">Telepon</label>
							<input type="text" class="form-control" id="telepon" name="telepon"
								value="<?= $mahasiswa['telepon']; ?>">
						</div>

						<div class="form-group col-6">
							<label for="email">Email</label>
							<input type="text" class="form-control" id="email" name="email"
								value="<?= $mahasiswa['email']; ?>">
						</div>

						<div class="form-group col-12">
							<label for="alamat">Alamat</label>
							<input type="text" class="form-control" id="alamat" name="alamat"
								value="<?= $mahasiswa['alamat']; ?>">
						</div>
					</div>
				</div>

				<div class="card-footer bg-white">
					<a href="<?= base_url('mahasiswa'); ?>"><button type="button"
							class="btn btn-secondary col-2">Kembali</button></a>
					<button type="submit" class="btn btn-success col-2 float-right">Ubah</button>
				</div>
				<?= form_close(); ?>
			</div>
		</div>
	</section>
</div>
