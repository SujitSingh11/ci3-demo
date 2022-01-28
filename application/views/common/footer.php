<!-- footer content -->
<footer>
	<div class="pull-right">
		BeatO
	</div>
	<div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>

<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url() ?>assets/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.12.0/moment.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script src="<?php echo base_url() ?>assets/chainedjs/jquery.chained.selects.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<!-- Custom Theme Scripts -->
<script src="<?php echo base_url() ?>assets/build/js/custom.min.js"></script>

<!-- AJAX Form Validation -->
<script>
	$(document).ready(function() {
		// To style all selects
		$('select').selectpicker();

		$('.input-daterange').datepicker({
			format: 'yyyy-mm-dd',
			autoclose: true,
			calendarWeeks: false,
			todayBtn: "linked",
			clearBtn: true,
			disableTouchKeyboard: true
		});

		$("#userSearchForm").submit(function(event) {
			event.preventDefault();
			$("#tableRows").empty();
			var formData = {
				userid: $("#userid").val(),
				phoneno: $("#phoneno").val(),
				email: $("#email").val(),
				fname: $("#fname").val(),
				lname: $("#lname").val(),
				deviceid: $("#deviceid").val(),
				orderid: $("#orderid").val(),
				isAJAX: $("#isAJAX").val(),
				export: "0"
			};

			$.get('<?php echo base_url() ?>dashboard/get_user_data', formData, function(data) {
					console.log(JSON.parse(data));
					const tableData = JSON.parse(data);
					$("#tableRows").replaceWith(tableData.table);
				})
				.fail(function(data) {
					console.warn(data);
				});
		});

		// CSV
		$("#exportcsv").click(function(event) {
			event.preventDefault();
			$("#tableRows").empty();
			var formData = {
				userid: $("#userid").val(),
				phoneno: $("#phoneno").val(),
				email: $("#email").val(),
				fname: $("#fname").val(),
				lname: $("#lname").val(),
				deviceid: $("#deviceid").val(),
				orderid: $("#orderid").val(),
				isAJAX: $("#isAJAX").val(),
				export: $("#export").val()
			};

			$.get('<?php echo base_url() ?>dashboard/get_user_data', formData, function(data) {
					console.log(data);
					var blob = new Blob([data], {
						type: 'text/csv'
					});
					var downloadUrl = URL.createObjectURL(blob);
					var a = document.createElement("a");
					a.href = downloadUrl;
					a.download = "user_data_" + Date.now() + ".csv";
					document.body.appendChild(a);
					a.click();
				})
				.fail(function(data) {
					console.warn(data);
				});
		});

		$('#paginationajax').on('click', 'a', function(e) {
			e.preventDefault();
			var pageno = $(this).attr('data-ci-pagination-page');
			loadPagination(pageno);
		});

		function loadPagination(pagno) {
			var request = <?php if (isset($request)) {
								echo json_encode($request);
							} else {
								$request['isAJAX'] = "0";
								echo json_encode($request);
							} ?>;
			request['isAJAX'] = "1";
			$.ajax({
				url: '<?= base_url() ?>userorder/ordercallback/' + pagno,
				type: 'post',
				data: request,
				dataType: 'json',
				success: function(response) {
					$('.pagination').html(response.links);
					$('#table').replaceWith(response.tableRows);
					console.log(response);

				}
			});
		}
	});
</script>
</body>

</html>
