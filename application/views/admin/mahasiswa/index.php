<div class="content-wrapper">

	<?php if( $this->session->flashdata('notification') ) : ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		Data mahasiswa berhasil <strong><?= $this->session->flashdata('notification'); ?></strong>.
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<?php endif; ?>

	<section class="content-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<h1>Daftar Mahasiswa </h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
						<li class="breadcrumb-item active">Mahasiswa</li>
					</ol>
				</div>
			</div>
		</div>
	</section>

	<section class="content-header">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<a href="<?= base_url('mahasiswa/tambah'); ?>"><button type="button"
								class="btn btn-primary col-2 float-right mb-2">Tambah Mahasiswa</button></a>
						<table id="tableAwesome1"
							class="table table-responsive table-bordered table-striped table-head-fixed text-nowrap">
							<thead>
								<tr>
									<th>No</th>
									<th>Aksi</th>
									<th>Picture</th>
									<th>NIM</th>
									<th>Nama</th>
									<th>Jurusan</th>
									<th>Jenis Kelamin</th>
									<th>TTL</th>
									<th>Telepon</th>
									<th>Alamat</th>
									<th>Email</th>
									<th>Tgl Dibuat</th>
								</tr>
							</thead>
							<tbody>

								<?php $no=1; ?>
								<?php foreach( $mahasiswa as $mhs ) : ?>
								<tr>
									<td width="5%"><?= $no++; ?></td>
									<td align="center">
										<div class="btn-group btn-group-sm">
											<a href="<?= base_url('mahasiswa/ubah/'). $mhs['nim']; ?>"
												class="btn btn-success text-white" title="Ubah Data">
												<i class="fas fa-edit"></i>
											</a>
											<a href="<?= base_url('mahasiswa/hapus/'). $mhs['nim']; ?>"
												class="btn btn-danger text-white" title="Hapus Data"
												onclick="return confirm('Yakin?');">
												<i class="fas fa-trash"></i>
											</a>
										</div>
									</td>
									<td align="center">
										<img src="<?= base_url(); ?>assets/img/profil/<?= $mhs['gambar']; ?>"
											width="35px" height="35px">
									</td>
									<td><?= $mhs['nim']; ?></td>
									<td><?= $mhs['nama']; ?></td>
									<td><?= $mhs['jurusan']; ?></td>
									<td><?= $mhs['jk']; ?></td>
									<td><?= $mhs['ttl']; ?></td>
									<td><?= $mhs['telepon']; ?></td>
									<td><?= $mhs['alamat']; ?></td>
									<td><?= $mhs['email']; ?></td>
									<td><?= $mhs['tanggal_dibuat']; ?></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
