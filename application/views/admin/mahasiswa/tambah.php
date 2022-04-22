<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Tambah Mahasiswa</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="<?= base_url('admin/mahasiswa'); ?>">Mahasiswa</a></li>
						<li class="breadcrumb-item active">Tambah Mahasiswa</li>
					</ol>
				</div>
			</div>
		</div>
	</section>

	<section class="content">
		<div class="container-fluid">

			<div class="card">
				<?= form_open_multipart(); ?>
				<div class="card-body">
					<div class="row">
						<div class="form-group col-6">
							<label for="nim">NIM</label>
							<input type="text" class="form-control" id="nim" name="nim"
								value="<?= set_value('nim'); ?>">
							<small class="form-text text-danger mt-0"><?= form_error('nim'); ?></small>
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
								value="<?= set_value('nama'); ?>">
							<small class="form-text text-danger mt-0"><?= form_error('nama'); ?></small>
						</div>

						<div class="form-group col-6">
							<label for="jurusan">Jurusan</label>
							<input type="text" class="form-control" id="jurusan" name="jurusan"
								value="<?= set_value('jurusan'); ?>">
						</div>

						<div class="form-group col-6">
							<label for="jk">Jenis Kelamin</label>
							<select class="form-control" name="jk" id="jk" required>
								<option value="Laki-Laki">Laki-Laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>
						</div>

						<div class="form-group col-6">
							<label for="ttl">Tempat, Tanggal Lahir</label>
							<input type="text" class="form-control" id="ttl" name="ttl"
								value="<?= set_value('ttl'); ?>">
						</div>

						<div class="form-group col-6">
							<label for="telepon">Telepon</label>
							<input type="text" class="form-control" id="telepon" name="telepon"
								value="<?= set_value('telepon'); ?>">
						</div>

						<div class="form-group col-6">
							<label for="alamat">Alamat</label>
							<input type="text" class="form-control" id="alamat" name="alamat"
								value="<?= set_value('alamat'); ?>">
						</div>

						<div class="form-group col-6">
							<label for="email">Email</label>
							<input type="text" class="form-control" id="email" name="email"
								value="<?= set_value('email'); ?>">
							<small class="form-text text-danger mt-0"><?= form_error('email'); ?></small>
						</div>

						<div class="form-group col-6">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password" name="password"
								value="<?= set_value('password'); ?>">
							<small class="form-text text-danger mt-0"><?= form_error('password'); ?></small>
						</div>
					</div>
				</div>

				<div class="card-footer bg-white">
					<a href="<?= base_url('mahasiswa'); ?>"><button type="button"
							class="btn btn-secondary col-2">Kembali</button></a>
					<button type="submit" class="btn btn-success col-2 float-right">Tambah</button>
				</div>
				<?= form_close(); ?>
			</div>
		</div>
	</section>
</div>
