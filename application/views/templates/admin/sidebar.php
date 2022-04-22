<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<a href="<?= base_url(); ?>admin/" class="brand-link text-center">
		<span class="brand-text font-weight-light">PERPUSTAKAAN</span>
	</a>

	<div class="sidebar">

		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?= base_url(); ?>assets/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
					alt="User Image">
			</div>
			<div class="info">
				<a href="<?= base_url(); ?>admin/" class="d-block"><?= $userdata['nama']; ?></a>
			</div>
		</div>

		<div class="form-inline">
			<div class="input-group" data-widget="sidebar-search">
				<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
				<div class="input-group-append">
					<button class="btn btn-sidebar">
						<i class="fas fa-search fa-fw"></i>
					</button>
				</div>
			</div>
		</div>

		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-header">PAGES</li>
				<li class="nav-item">
					<a href="<?= base_url(); ?>admin/dashboard/"
						class="nav-link <?= $this->uri->segment(2) == 'dashboard' ? 'active' : ''; ?>">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>

				<li class="nav-header">MANAGE USER</li>
				<li class="nav-item">
					<a href="<?= base_url(); ?>admin/petugas/"
						class="nav-link <?= $this->uri->segment(2) == 'petugas' || $this->uri->segment(1) == 'petugas' ? 'active' : ''; ?>">
						<i class="nav-icon fas fa-user"></i>
						<p>
							Petugas
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url(); ?>admin/mahasiswa/"
						class="nav-link <?= $this->uri->segment(2) == 'mahasiswa' || $this->uri->segment(1) == 'mahasiswa' ? 'active' : ''; ?>">
						<i class="nav-icon fas fa-users"></i>
						<p>
							Mahasiswa
						</p>
					</a>
				</li>

				<li class="nav-header">MANAGE DATA</li>
				<li class="nav-item">
					<a href="<?= base_url(); ?>admin/buku/"
						class="nav-link <?= $this->uri->segment(2) == 'buku' || $this->uri->segment(1) == 'buku' ? 'active' : ''; ?>">
						<i class="nav-icon fas fa-book"></i>
						<p>
							Buku
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url(); ?>admin/pinjaman/"
						class="nav-link <?= $this->uri->segment(2) == 'pinjaman' || $this->uri->segment(1) == 'pinjaman' ? 'active' : ''; ?>">
						<i class="nav-icon fas fa-hand-holding-usd"></i>
						<p>
							Pinjaman
						</p>
					</a>
				</li>

				<li class="nav-header">ACCOUNT</li>
				<li class="nav-item">
					<a href="<?= base_url('logout'); ?>" class="nav-link">
						<i class="nav-icon fas fa-sign-out-alt"></i>
						<p>
							Logout
						</p>
					</a>
				</li>
			</ul>
		</nav>
	</div>
</aside>
