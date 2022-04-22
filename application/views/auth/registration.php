<body class="hold-transition">
	<div class="register-box">
		<div class="card">
			<div class="card-body register-card-body">
				<p class="login-box-msg">DAFTAR AKUN</p>

				<form action="<?= base_url('registration'); ?>" method="post">
					<div class="input-group">
						<input type="number" class="form-control" placeholder="NIM" name="nim"
							value="<?= set_value('nim'); ?>">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-key"></span>
							</div>
						</div>
					</div>
					<small class="form-text text-danger mt-0"><?= form_error('nim'); ?></small>

					<div class="input-group mt-3">
						<input type="text" class="form-control" placeholder="Nama Lengkap" name="nama"
							value="<?= set_value('nama'); ?>">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-user"></span>
							</div>
						</div>
					</div>
					<small class="form-text text-danger mt-0"><?= form_error('nama'); ?></small>

					<div class="input-group mt-3">
						<input type="text" class="form-control" placeholder="Email" name="email"
							value="<?= set_value('email'); ?>">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
					</div>
					<small class="form-text text-danger mt-0"><?= form_error('email'); ?></small>

					<div class="input-group mt-3">
						<input type="password" class="form-control" placeholder="Password" name="password1">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<small class="form-text text-danger mt-0"><?= form_error('password1'); ?></small>

					<div class="input-group mt-3">
						<input type="password" class="form-control" placeholder="Konfirmasi Password" name="password2">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<small class="form-text text-danger mt-0"><?= form_error('password2'); ?></small>

					<div class="row mt-3 mb-2">
						<div class="col-8">
							<div class="icheck-primary">
								<input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
								<label for="agreeTerms">
									Setujui <a href="#">Persyaratan</a>
								</label>
							</div>
						</div>
						<div class="col-4">
							<button type="submit" class="btn btn-primary btn-block btn-flat">Daftar</button>
						</div>
					</div>
				</form>

				<small><a href="<?= base_url('login'); ?>" class="text-center">Sudah punya akun? Masuk</a></small>
			</div>
		</div>
	</div>
