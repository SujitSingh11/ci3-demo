<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<title>BeatO</title>

	<!-- Normalize CSS -->
	<link href="<?php echo base_url() ?>assets/vendors/normalize-css/normalize.css" rel="stylesheet" />
	<!-- Bootstrap -->
	<link href="<?php echo base_url() ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
	<!-- Font Awesome -->
	<link href="<?php echo base_url() ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<!-- NProgress -->
	<link href="<?php echo base_url() ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet" />
	<!-- Custom Theme Style -->
	<link href="<?php echo base_url() ?>assets/build/css/custom.min.css" rel="stylesheet" />

	<link rel="icon" href="https://beatoapp.com/favicon.ico">

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
