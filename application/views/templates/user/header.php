<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $title; ?></title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/AdminLTE/plugins/fontawesome-free/css/all.min.css">
	<!-- Ekko Lightbox -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/AdminLTE/plugins/ekko-lightbox/ekko-lightbox.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/AdminLTE/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-collapse">
	<div class="wrapper">
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">

			<ul class="navbar-nav">
				<li class="nav-item">
					<h3><a class="nav-link" href="<?= base_url(); ?>">PERPUSTAKAAN</a></h3>
				</li>
			</ul>


			<ul class="navbar-nav ml-auto">
				<li class="nav-item d-none d-sm-inline-block">
					<a href="<?= base_url('home'); ?>" class="nav-link">Home</a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="<?= base_url('logout'); ?>" class="nav-link">Logout</a>
				</li>
			</ul>
		</nav>
