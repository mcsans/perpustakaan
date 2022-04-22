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
					<h1>Daftar Pinjaman </h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
						<li class="breadcrumb-item active">Pinjaman</li>
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
						<!-- <a href="<?= base_url('pinjaman/tambah'); ?>"><button type="button"
								class="btn btn-primary col-2 float-right mb-2">Tambah Pinjaman</button></a> -->
						<table id="tableAwesome1"
							class="table table-responsive table-bordered table-striped table-head-fixed text-nowrap">
							<thead>
								<tr>
									<th>No</th>
									<th>Mahasiswa</th>
									<th>Buku</th>
									<th>Tanggal Pinjam</th>
									<th>Tanggal Kadaluarsa</th>
									<th>Status Pengembalian</th>
									<th>Denda (2500/hari)</th>
									<th width="100%">Aksi</th>
								</tr>
							</thead>
							<tbody>

								<?php $no=1; ?>
								<?php foreach( $pinjaman as $pjm ) : ?>
								<?php $denda = $this->Pinjaman_model->denda($pjm['id']); ?>
								<?php $bk = $this->Buku_model->getById($pjm['id_buku']); ?>
								<?php $mhs = $this->Mahasiswa_model->getByNIM($pjm['nim_mahasiswa']); ?>
								<tr>
									<td width="5%"><?= $no++; ?></td>
									<td>
										<?= $mhs['nim']. ' - '. $mhs['nama'];?>
									</td>
									<td>
										<button type="button" class="btn btn-info btn-sm" data-toggle="modal"
											data-target="#info-buku-<?= $pjm['id']; ?>">
											<i class="fas fa-search"></i>
										</button>
										<?= $bk['judul']; ?>
									</td>
									<td><?= $pjm['tanggal_pinjam']; ?></td>
									<td><?= $pjm['tanggal_kadaluarsa']; ?></td>
									<td><?= $pjm['status_pengembalian']; ?></td>
									<td>Rp. <?= $denda; ?></td>
									<?php if( $pjm['status_pengembalian'] == 'sudah' ) : ?>
									<td></td>
									<?php else : ?>
									<td align="center">
										<div class="btn-group btn-group-sm">
											<a href="<?= base_url('pinjaman/pengembalian/'). $pjm['id']; ?>"
												class="btn btn-success text-white" title="Ubah Data"
												onclick="return confirm('Ubah status pengembalian?');">
												Sudah dikembalikan
											</a>
										</div>
									</td>
									<?php endif; ?>
								</tr>

								<div class="modal fade" id="info-buku-<?= $pjm['id']; ?>">
									<div class="modal-dialog modal-xl">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title">Informasi Buku</h4>
												<button type="button" class="close" data-dismiss="modal"
													aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<section class="content">

													<div class="card card-solid">
														<div class="card-body">
															<div class="row">
																<div class="col-12 col-sm-4">
																	<h3 class="d-inline-block d-sm-none">
																		<?= $bk['judul']; ?></h3>
																	<div class="col-12">
																		<img src="<?= base_url(); ?>assets/img/cover_buku/<?= $bk['gambar']; ?>"
																			class="product-image" alt="Product Image">
																	</div>
																</div>
																<div class="col-12 col-sm-8">
																	<h3 class="mt-1 text-center"><?= $bk['judul']; ?>
																	</h3>
																	<hr>

																	<h5 class="d-inline-block ml-3"><small>Pengarang :
																		</small></h5>
																	<h6
																		class="d-inline-block text-secondary float-right mr-3">
																		<?= $bk['pengarang']; ?></h6>
																	<hr>

																	<h5 class="d-inline-block ml-3"><small>Penerbit :
																		</small></h5>
																	<h6
																		class="d-inline-block text-secondary float-right mr-3">
																		<?= $bk['penerbit']; ?></h6>
																	<hr>

																	<h5 class="d-inline-block ml-3"><small>Tahun Terbit
																			: </small></h5>
																	<h6
																		class="d-inline-block text-secondary float-right mr-3">
																		<?= $bk['tahun_terbit']; ?></h6>
																	<hr>

																	<h5 class="d-inline-block ml-3"><small>Jumlah
																			Halaman : </small></h5>
																	<h6
																		class="d-inline-block text-secondary float-right mr-3">
																		<?= $bk['jumlah_halaman']; ?></h6>
																	<hr>

																	<h5 class="d-inline-block ml-3"><small>ISBN :
																		</small></h5>
																	<h6
																		class="d-inline-block text-secondary float-right mr-3">
																		<?= $bk['isbn']; ?></h6>
																	<hr>

																	<h5 class="d-inline-block ml-3"><small>Stok :
																		</small></h5>
																	<h6
																		class="d-inline-block text-secondary float-right mr-3">
																		<?= $bk['stok']; ?></h6>
																	<hr>
																</div>
															</div>
														</div>
													</div>
												</section>
											</div>
										</div>
									</div>
								</div>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
