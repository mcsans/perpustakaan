<div class="content-wrapper">

	<?php if( $this->session->flashdata('notification') ) : ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		Data petugas berhasil <strong><?= $this->session->flashdata('notification'); ?></strong>.
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<?php endif; ?>

	<section class="content-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<h1>Daftar Petugas </h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
						<li class="breadcrumb-item active">Petugas</li>
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
						<a href="<?= base_url('petugas/tambah'); ?>"><button type="button"
								class="btn btn-primary col-2 float-right mb-2">Tambah Petugas</button></a>
						<table id="tableAwesome1"
							class="table table-responsive table-bordered table-striped table-head-fixed text-nowrap">
							<thead>
								<tr>
									<th>No</th>
									<th>Aksi</th>
									<th>Picture</th>
									<th>NIP</th>
									<th>Nama</th>
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
								<?php foreach( $petugas as $ptg ) : ?>
								<tr>
									<td width="5%"><?= $no++; ?></td>
									<td align="center">
										<div class="btn-group btn-group-sm">
											<a href="<?= base_url('petugas/ubah/'). $ptg['nip']; ?>"
												class="btn btn-success text-white" title="Ubah Data">
												<i class="fas fa-edit"></i>
											</a>
											<a href="<?= base_url('petugas/hapus/'). $ptg['nip']; ?>"
												class="btn btn-danger text-white" title="Hapus Data"
												onclick="return confirm('Yakin?');">
												<i class="fas fa-trash"></i>
											</a>
										</div>
									</td>
									<td align="center">
										<img src="<?= base_url(); ?>assets/img/profil/<?= $ptg['gambar']; ?>"
											width="35px" height="35px">
									</td>
									<td><?= $ptg['nip']; ?></td>
									<td><?= $ptg['nama']; ?></td>
									<td><?= $ptg['jk']; ?></td>
									<td><?= $ptg['ttl']; ?></td>
									<td><?= $ptg['telepon']; ?></td>
									<td><?= $ptg['alamat']; ?></td>
									<td><?= $ptg['email']; ?></td>
									<td><?= $ptg['tanggal_dibuat']; ?></td>
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
