<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url(); ?>assets/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= base_url(); ?>assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Ekko Lightbox -->
<script src="<?= base_url(); ?>assets/AdminLTE/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>assets/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- Filterizr-->
<script src="<?= base_url(); ?>assets/AdminLTE/plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url(); ?>assets/AdminLTE/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
	$(function () {
		$(document).on('click', '[data-toggle="lightbox"]', function (event) {
			event.preventDefault();
			$(this).ekkoLightbox({
				alwaysShowClose: true
			});
		});

		$('.filter-container').filterizr({
			gutterPixels: 3
		});
		$('.btn[data-filter]').on('click', function () {
			$('.btn[data-filter]').removeClass('active');
			$(this).addClass('active');
		});
	})

</script>
</body>

</html>
