<!-- footer -->
<div class="container-fluid">
	<div class="footer">
		<p>Copyright © 2018 Designed by html.design. All rights reserved.<br>
		</p>
	</div>
</div>
</div>
<!-- end dashboard inner -->
</div>
</div>
</div>
<!-- jQuery -->
<script src="<?= base_url() ?>backend/js/jquery.min.js"></script>
<script src="<?= base_url() ?>backend/js/popper.min.js"></script>
<script src="<?= base_url() ?>backend/js/bootstrap.min.js"></script>
<!-- wow animation -->
<script src="<?= base_url() ?>backend/js/animate.js"></script>
<!-- select country -->
<script src="<?= base_url() ?>backend/js/bootstrap-select.js"></script>
<!-- owl carousel -->
<script src="<?= base_url() ?>backend/js/owl.carousel.js"></script>
<!-- chart js -->
<script src="<?= base_url() ?>backend/js/Chart.min.js"></script>
<script src="<?= base_url() ?>backend/js/Chart.bundle.min.js"></script>
<script src="<?= base_url() ?>backend/js/utils.js"></script>
<script src="<?= base_url() ?>backend/js/analyser.js"></script>
<!-- nice scrollbar -->
<script src="<?= base_url() ?>backend/js/perfect-scrollbar.min.js"></script>
<script>
	var ps = new PerfectScrollbar('#sidebar');
</script>
<!-- custom js -->
<script src="<?= base_url() ?>backend/js/custom.js"></script>
<script src="<?= base_url() ?>backend/js/chart_custom_style1.js"></script>

<!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.js"></script> -->
<script>
	function bacaGambar(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				$('#gambar_load').attr('src', e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}

	$("#preview_gambar").change(function() {
		bacaGambar(this);
	});
</script>

<script>
	$(function() {
		$("#example1").DataTable({
			"responsive": true,
			"autoWidth": false,
		});
		$('#example2').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"responsive": true,
		});
	});
</script>

</body>

</html>