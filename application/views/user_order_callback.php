<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="icon" href="https://beatoapp.com/favicon.ico">

	<title>BeatO</title>

	<!-- Normalize CSS -->
	<link href="<?php echo base_url() ?>assets/vendors/normalize-css/normalize.css" rel="stylesheet" />
	<!-- Bootstrap -->
	<link href="<?php echo base_url() ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="<?php echo base_url() ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="<?php echo base_url() ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/vendors/Ionicons/css/ionicons.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/vendors/AdminLTE/AdminLTE.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/vendors/AdminLTE/_all-skins.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/vendors/AdminLTE/select2.min.css" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="<?php echo base_url() ?>assets/build/css/custom.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" rel="stylesheet">
	<link href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/favicon.ico" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css">


	<style>
		/* Chrome, Safari, Edge, Opera */
		input::-webkit-outer-spin-button,
		input::-webkit-inner-spin-button {
			-webkit-appearance: none;
			margin: 0;
		}

		/* Firefox */
		input[type=number] {
			-moz-appearance: textfield;
		}

		.table>tbody>tr>td,
		.table>tbody>tr>th,
		.table>tfoot>tr>td,
		.table>tfoot>tr>th,
		.table>thead>tr>td,
		.table>thead>tr>th {
			padding: 11px;
		}

		/* LOADER 4 */
		#loader-4 span {
			display: inline-block;
			width: 20px;
			height: 20px;
			border-radius: 100%;
			background-color: #3498db;
			margin: 35px 5px;
			opacity: 0;
		}

		#loader-4 span:nth-child(1) {
			animation: opacitychange 1s ease-in-out infinite;
		}

		#loader-4 span:nth-child(2) {
			animation: opacitychange 1s ease-in-out 0.33s infinite;
		}

		#loader-4 span:nth-child(3) {
			animation: opacitychange 1s ease-in-out 0.66s infinite;
		}

		@keyframes opacitychange {

			0%,
			100% {
				opacity: 0;
			}

			60% {
				opacity: 1;
			}
		}
	</style>
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<!--BeatO Logo-->
					<div class="navbar nav_title" style="border: 0;text-align:center">
						<a href="<?php echo base_url(); ?>" class="site_title">
							<span>
								<img src="https://beatoapp.com/wp-content/uploads/2017/12/LOGO.png" style="width:120px">
							</span>
						</a>
					</div>
					<div class="clearfix"></div>
					<br />
					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<ul class="nav side-menu">
								<li>
									<a href="<?= base_url() ?>">
										<i class="fa fa-home"></i>
										User Search
										<span class="fa fa-chevron-right"></span>
									</a>
								</li>
								<li>
									<a href="<?= base_url() ?>userordercallback">
										<i class="fa fa-cubes"></i>
										Order Callback
										<span class="fa fa-chevron-right"></span>
									</a>
								</li>
								<li>
									<a><i class="fa fa-sort-amount-asc"></i> Marketing
										<span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="javascript:;">Subitem 1</a></li>
										<li>
											<a href="javascript:;">Subitem 2</a>
										</li>
									</ul>
								</li>
								<li>
									<a><i class="fa fa-tags"></i> Inbound Leads
										<span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="javascript:;">Subitem 3</a></li>
										<li>
											<a href="javascript:;">Subitem 4</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<!-- /sidebar menu -->
				</div>
			</div>

			<!-- top navigation -->
			<div class="top_nav">
				<div class="nav_menu">
					<div class="nav toggle">
						<a id="menu_toggle"><i class="fa fa-bars"></i></a>
					</div>
					<nav class="nav navbar-nav">
						<ul class="navbar-right">
							<li class="nav-item dropdown open" style="padding-left: 15px">
								<a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
									<img src="<?php echo base_url() ?>assets/img/user.png" alt="profile" />Sujitkumar Singh
								</a>
								<div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="javascript:;"> Profile</a>
									<a class="dropdown-item" href="javascript:;"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
								</div>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- /top navigation -->
			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>User Order Callback Filter</h3>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>Callback Filter</h2>
									<ul class="nav navbar-right panel_toolbox">
										<li>
											<a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<form class="form-label-left input_mask" action="<?= base_url() ?>userorder/ordercallback" method="get" autocomplete="off">
										<div class="input-daterange">
											<div class="col-md-3 col-sm-3 col-xs-12 ">
												<div>
													<input type="text" name="calender_app_startdate" id="calender_app_startdate" class="form-control" style="text-align:left" placeholder="Enter Start Date">
												</div>
											</div>
											<div class="col-md-3 col-sm-3 col-xs-12">
												<div>
													<input type="text" name="calender_app_enddate" id="calender_app_enddate" class="form-control" style="text-align:left" placeholder="Enter End Date">
												</div>
											</div>
											<div class="form-group">
												<div class='input-group date' id='myDatepicker'>
													<input type='text' class="form-control" />
													<span class="input-group-addon">
														<span class="glyphicon glyphicon-calendar"></span>
													</span>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

					<!-- Table -->
					<div class="clearfix"></div>


				</div>
			</div>
			<!-- /page content -->

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
	<!-- Moment -->
	<script src="<?php echo base_url() ?>assets/vendors/bower_components/moment/min/moment.min.js"></script>
	<!-- Custom Theme Scripts -->
	<script src="<?php echo base_url() ?>assets/build/js/custom.min.js"></script>

	<!-- AJAX Form Validation -->
	<script>
		$(document).ready(function() {
			$('.input-daterange').datepicker({
				format: 'yyyy-mm-dd',
				autoclose: true,
				calendarWeeks: false,
				todayBtn: "linked",
				clearBtn: true,
				disableTouchKeyboard: true
			});
		});
	</script>
</body>

</html>
