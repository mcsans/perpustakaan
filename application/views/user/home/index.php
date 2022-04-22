<div class="content-wrapper">
	<?php if( $this->session->flashdata('notification') ) : ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		Buku berhasil <strong><?= $this->session->flashdata('notification'); ?></strong>.
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<?php endif; ?>

	<div class="row"></div>
	<h2 class="text-center display-4 mt-2">Cari Buku</h2>
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<form action="" method="post">
				<div class="input-group">
					<input type="search" class="form-control form-control-lg" name="keyword"
						placeholder="Cari berdasarkan judul, pengarang, dan penerbit">
					<div class="input-group-append">
						<button type="submit" class="btn btn-lg btn-default">
							<i class="fa fa-search"></i>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>

	<section class="content-header"></section>

	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card card-primary">
						<!-- <div class="card-header">
							<h4 class="card-title">Ekko Lightbox</h4>
						</div> -->
						<div class="card-body">
							<div class="row">
								<?php foreach( $buku as $bk ) : ?>
								<div class="col-sm-2">
									<a href="<?= base_url(); ?>home/buku/<?= $bk['id'] ?>">
										<img src="<?= base_url(); ?>assets/img/cover_buku/<?= $bk['gambar'] ?>"
											class="img-fluid mb-2" alt="black sample" title="<?= $bk['judul'] ?>" />
									</a>
									<div class="mb-2"><?= $bk['judul'] ?></div>
								</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
