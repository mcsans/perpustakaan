<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Ubah Data Petugas</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="<?= base_url('admin/petugas'); ?>">Petugas</a></li>
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
				<?= form_hidden('img', $petugas['gambar']); ?>
				<div class="card-body">
					<div class="row">
						<div class="form-group col-6">
							<label for="nip">NIP</label>
							<input type="text" class="form-control" id="nip" name="nip" value="<?= $petugas['nip']; ?>">
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
								value="<?= $petugas['nama']; ?>">
						</div>

						<div class="form-group col-6">
							<label for="jk">Jenis Kelamin</label>
							<select class="form-control" name="jk" id="jk" required>
								<option value="Laki-Laki" <?= $petugas['jk'] == 'Laki-Laki' ? 'selected' : ''; ?>>
									Laki-Laki</option>
								<option value="Perempuan" <?= $petugas['jk'] == 'Wanita' ? 'selected' : ''; ?>>
									Perempuan</option>
							</select>
						</div>

						<div class="form-group col-6">
							<label for="ttl">Tempat, Tanggal Lahir</label>
							<input type="text" class="form-control" id="ttl" name="ttl" value="<?= $petugas['ttl']; ?>">
						</div>

						<div class="form-group col-6">
							<label for="telepon">Telepon</label>
							<input type="text" class="form-control" id="telepon" name="telepon"
								value="<?= $petugas['telepon']; ?>">
						</div>

						<div class="form-group col-6">
							<label for="alamat">Alamat</label>
							<input type="text" class="form-control" id="alamat" name="alamat"
								value="<?= $petugas['alamat']; ?>">
						</div>

						<div class="form-group col-6">
							<label for="email">Email</label>
							<input type="text" class="form-control" id="email" name="email"
								value="<?= $petugas['email']; ?>">
						</div>
					</div>
				</div>

				<div class="card-footer bg-white">
					<a href="<?= base_url('petugas'); ?>"><button type="button"
							class="btn btn-secondary col-2">Kembali</button></a>
					<button type="submit" class="btn btn-success col-2 float-right">Ubah</button>
				</div>
				<?= form_close(); ?>
			</div>
		</div>
	</section>
</div>
