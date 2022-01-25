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
	<!-- <link href="<?php echo base_url() ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
	<!-- Bootstrap -->
	<link href="<?php echo base_url() ?>assets/vendors/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
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

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

	<!-- Custom Theme Style -->
	<link href="<?php echo base_url() ?>assets/build/css/custom.min.css" rel="stylesheet">

	<style>
		.form-control-feedback {
			margin-top: 0px !important;
		}

		li {
			list-style-type: none;
			padding: 0px;
			margin: 0px;
		}

		.canvas_class {
			max-width: 80%;
		}

		.max_width {
			visibility: hidden;
		}

		ul.bar_tabs>li a {
			padding: 0 !important;
		}

		ul.bar_tabs>li {
			margin-left: 4px;
		}

		ul.bar_tabs {
			padding-left: 0px;
		}

		ul.bar_tabs>li {
			font-size: 12px;
		}

		.tag-editor {
			height: 100px;
			width: auto;
			border-color: rgb(169, 169, 169);
			overflow-y: scroll;
		}

		.ui-widget-content {
			height: 400px;
			width: 200px;
			background-color: #fff;
			overflow-y: scroll !important;
		}

		.ui-widget-content li:hover {
			background: #e0eaf1 !important;
		}

		#loader {
			border: 16px solid #f3f3f3;
			border-radius: 50%;
			border-top: 16px solid #3498db;
			width: 120px;
			height: 120px;
			-webkit-animation: spin 2s linear infinite;
			/* Safari */
			animation: spin 2s linear infinite;
		}

		/* Safari */
		@-webkit-keyframes spin {
			0% {
				-webkit-transform: rotate(0deg);
			}

			100% {
				-webkit-transform: rotate(360deg);
			}
		}

		@keyframes spin {
			0% {
				transform: rotate(0deg);
			}

			100% {
				transform: rotate(360deg);
			}
		}

		.user-details-form label {
			text-align: left !important;
		}

		form strong {
			font-size: 16px;
		}

		input[type='checkbox'] {
			vertical-align: -2PX;
		}

		.seperate_box {
			margin-top: 5px;
		}

		#loading {
			text-align: center;
			background: url('<?php echo base_url(); ?>assets/img/loader.gif') no-repeat center;
			height: 356px;
		}

		.pagination {
			margin: 0;
		}

		.x_content {
			padding: 0 5px 6px;
		}

		.seperate_box {
			margin-top: 5px;
		}

		.seperate_box .x_title {
			background: #e9e4f7;
			border-radius: 10px;
		}

		.x_title strong {
			display: inline-block;
			padding-top: 8px;
			padding-left: 8px;
			font-size: 16px;
		}

		input[type=radio] {
			vertical-align: text-bottom;
		}

		.toggle {
			padding-top: 2em;
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
									<a href="<?= base_url() ?>userorder">
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
					<nav>
						<div class="nav toggle">
							<a id="menu_toggle"><i class="fa fa-bars"></i></a>
						</div>
						<ul class="nav navbar-nav navbar-right">
							<li class="">
								<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<img src="<?php echo base_url() ?>assets/img/user.png" alt="">
									Hello Sujitkumar
									<span class=" fa fa-angle-down"></span>
								</a>
								<ul class="dropdown-menu dropdown-usermenu pull-right" style="Z-index: 9999999;">
									<li><a href="#">Profile</a></li>
									<li><a href="#"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- /top navigation -->
