<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Dashboard</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<section class="content">
		<div class="container-fluid">

			<div class="row">
				<div class="col-lg-3 col-6">

					<div class="small-box bg-info">
						<div class="inner">
							<h3><?= $buku <= 9 ? '0'. $buku : $buku; ?></h3>

							<p>Buku</p>
						</div>
						<div class="icon">
							<i class="ion ion-bag"></i>
						</div>
						<a href="<?= base_url('admin/buku'); ?>" class="small-box-footer">More info <i
								class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>

				<div class="col-lg-3 col-6">

					<div class="small-box bg-success">
						<div class="inner">
							<h3><?= $pinjaman <= 9 ? '0'. $pinjaman : $pinjaman; ?></h3>

							<p>Pinjaman</p>
						</div>
						<div class="icon">
							<i class="ion ion-stats-bars"></i>
						</div>
						<a href="<?= base_url('admin/pinjaman'); ?>" class="small-box-footer">More info <i
								class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>

				<div class="col-lg-3 col-6">

					<div class="small-box bg-warning">
						<div class="inner">
							<h3><?= $mahasiswa <= 9 ? '0'. $mahasiswa : $mahasiswa; ?></h3>

							<p>Mahasiswa</p>
						</div>
						<div class="icon">
							<i class="ion ion-person-add"></i>
						</div>
						<a href="<?= base_url('admin/mahasiswa'); ?>" class="small-box-footer">More info <i
								class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>

				<div class="col-lg-3 col-6">

					<div class="small-box bg-danger">
						<div class="inner">
							<h3><?= $petugas <= 9 ? '0'. $petugas : $petugas; ?></h3>

							<p>Petugas</p>
						</div>
						<div class="icon">
							<i class="ion ion-person-add"></i>
						</div>
						<a href="<?= base_url('admin/petugas'); ?>" class="small-box-footer">More info <i
								class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>

			</div>
		</div>
	</section>
</div>
