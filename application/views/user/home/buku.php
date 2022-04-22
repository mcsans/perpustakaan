<!-- Main content -->
<section class="content">

	<!-- Default box -->
	<div class="card card-solid">
		<div class="card-body">
			<div class="row">
				<div class="col-12 col-sm-4">
					<h3 class="d-inline-block d-sm-none"><?= $buku['judul']; ?></h3>
					<div class="col-12">
						<img src="<?= base_url(); ?>assets/img/cover_buku/<?= $buku['gambar']; ?>" class="product-image"
							alt="Product Image">
					</div>
				</div>
				<div class="col-12 col-sm-8">
					<h3 class="mt-1 text-center"><?= $buku['judul']; ?></h3>
					<hr>

					<h5 class="d-inline-block ml-3"><small>Pengarang : </small></h5>
					<h6 class="d-inline-block text-secondary float-right mr-3"><?= $buku['pengarang']; ?></h6>
					<hr>

					<h5 class="d-inline-block ml-3"><small>Penerbit : </small></h5>
					<h6 class="d-inline-block text-secondary float-right mr-3"><?= $buku['penerbit']; ?></h6>
					<hr>

					<h5 class="d-inline-block ml-3"><small>Tahun Terbit : </small></h5>
					<h6 class="d-inline-block text-secondary float-right mr-3"><?= $buku['tahun_terbit']; ?></h6>
					<hr>

					<h5 class="d-inline-block ml-3"><small>Jumlah Halaman : </small></h5>
					<h6 class="d-inline-block text-secondary float-right mr-3"><?= $buku['jumlah_halaman']; ?></h6>
					<hr>

					<h5 class="d-inline-block ml-3"><small>ISBN : </small></h5>
					<h6 class="d-inline-block text-secondary float-right mr-3"><?= $buku['isbn']; ?></h6>
					<hr>

					<h5 class="d-inline-block ml-3"><small>Stok : </small></h5>
					<h6 class="d-inline-block text-secondary float-right mr-3"><?= $buku['stok']; ?></h6>
					<hr>
					<?php if( !$stat ) : ?>
					<form action="" method="post">
						<?= form_hidden('id_buku', $buku['id']); ?>
						<?= form_hidden('stok', $buku['stok']); ?>
						<?= form_hidden('nim_mahasiswa', $userdata['nim']); ?>
						<div class="row mt-3 ml-2">
							<div class="form-group col-6">
								<label for="durasi">Durasi Pinjaman (Hari)</label>
								<input type="number" class="form-control" id="durasi" name="durasi"
									value="<?= set_value('durasi'); ?>">
								<small class="form-text text-danger mt-0"><?= form_error('durasi'); ?></small>
							</div>
							<div class="mt-4 col-6">
								<button type="submit" class="btn btn-primary btn-lg btn-flat">
									<i class="fas fa-cart-plus fa-lg mr-2"></i>
									Pinjam Buku
								</button>
								<a href="<?= base_url(); ?>" type="button" class="btn btn-secondary btn-lg btn-flat">
									Kembali
								</a>
							</div>
						</div>
					</form>
					<?php else : ?>
					<div class="bg-success py-2 px-3 mt-4">
						<h2 class="mb-0">
							BUKU INI SUDAH KAMU PINJAM
						</h2>
					</div>
					<div class="mt-2">
						<a href="<?= base_url(); ?>" type="button" class="btn btn-secondary">
							Kembali
						</a>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<!-- /.card-body -->
	</div>
	<!-- /.card -->

</section>
<!-- /.content -->
