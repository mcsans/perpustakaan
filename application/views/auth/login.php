<div class="login-box mt-4">
	<div class="card">
		<div class="card-body login-card-body">
			<h5 class="login-box-msg b mb-1">LOGIN</h5>

			<?php if( $this->session->flashdata('message') ) { echo $this->session->flashdata('message'); } ?>

			<form action="<?= base_url('login'); ?>" method="post">
				<div class="input-group">
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
					<input type="password" class="form-control" placeholder="Password" name="password">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>
				<small class="form-text text-danger mt-0"><?= form_error('password'); ?></small>

				<div class="row mt-3">
					<div class="col-12">
						<button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
					</div>
				</div>
			</form>

			<p class="mt-3 mb-0">
				<a href="<?= base_url('registration'); ?>" class="text-center"><small>Belum Punya Akun?
						Daftar</small></a>
			</p>
		</div>
	</div>
</div>
