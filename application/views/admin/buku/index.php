<div class="content-wrapper">

	<?php if( $this->session->flashdata('notification') ) : ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		Data buku berhasil <strong><?= $this->session->flashdata('notification'); ?></strong>.
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<?php endif; ?>

	<section class="content-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<h1>Daftar Buku </h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
						<li class="breadcrumb-item active">Buku</li>
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
						<a href="<?= base_url('buku/tambah'); ?>"><button type="button"
								class="btn btn-primary col-2 float-right mb-2">Tambah Buku</button></a>
						<table id="tableAwesome1"
							class="table table-responsive table-bordered table-striped table-head-fixed text-nowrap">
							<thead>
								<tr>
									<th>No</th>
									<th>Aksi</th>
									<th>Picture</th>
									<th>Judul</th>
									<th>Pengarang</th>
									<th>Penerbit</th>
									<th>Tahun Terbit</th>
									<th>Jumlah Halaman</th>
									<th>ISBN</th>
									<th width="100%">Stok</th>
								</tr>
							</thead>
							<tbody>

								<?php $no=1; ?>
								<?php foreach( $buku as $bk ) : ?>
								<tr>
									<td width="5%"><?= $no++; ?></td>
									<td align="center">
										<div class="btn-group btn-group-sm">
											<a href="<?= base_url('buku/ubah/'). $bk['id']; ?>"
												class="btn btn-success text-white" title="Ubah Data">
												<i class="fas fa-edit"></i>
											</a>
											<a href="<?= base_url('buku/hapus/'). $bk['id']; ?>"
												class="btn btn-danger text-white" title="Hapus Data"
												onclick="return confirm('Yakin?');">
												<i class="fas fa-trash"></i>
											</a>
										</div>
									</td>
									<td align="center">
										<img src="<?= base_url(); ?>assets/img/cover_buku/<?= $bk['gambar']; ?>"
											width="30px" height="40px">
									</td>
									<td><?= $bk['judul']; ?></td>
									<td><?= $bk['pengarang']; ?></td>
									<td><?= $bk['penerbit']; ?></td>
									<td><?= $bk['tahun_terbit']; ?></td>
									<td><?= $bk['jumlah_halaman']; ?></td>
									<td><?= $bk['isbn']; ?></td>
									<td><?= $bk['stok']; ?></td>
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
