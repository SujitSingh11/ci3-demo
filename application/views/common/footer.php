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
<script src="<?php echo base_url() ?>assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>assets/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?php echo base_url() ?>assets/vendors/nprogress/nprogress.js"></script>

<!-- Custom Theme Scripts -->
<script src="<?php echo base_url() ?>assets/build/js/custom.min.js"></script>

<!-- AJAX Form Validation -->
<script>
	$(document).ready(function() {
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
		})
	});
</script>
</body>

</html>
