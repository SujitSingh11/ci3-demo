			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Specific User Search</h3>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>User Search</h2>
									<ul class="nav navbar-right panel_toolbox">
										<li>
											<a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<form class="form-label-left input_mask" action="<?= base_url() ?>dashboard/get_user_data" method="get" autocomplete="off">
										<!-- <div class="row">
											<div class="col-md-12 col-sm-12 alert alert-success alert-dismissible " role="alert">
												<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
												</button>
												<strong>Success!</strong>
											</div>

											<div class="col-md-12 col-sm-12 alert alert-danger alert-dismissible " role="alert">
												<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
												</button>
												<strong>Failed!</strong>
											</div>
										</div> -->
										<div class="row">
											<div class="col-md-4 col-sm-4 form-group has-feedback">
												<input type="text" class="form-control has-feedback-left" name="userid" placeholder="Enter User Id">
												<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
											</div>

											<div class="col-md-4 col-sm-4 form-group has-feedback">
												<input type="number" class="form-control" name="phoneno" placeholder="Enter Phone Number">
												<span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
											</div>

											<div class="col-md-4 col-sm-4 form-group has-feedback">
												<input type="email" class="form-control has-feedback-left" name="email" placeholder="Enter Email Id">
												<span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4 col-sm-4 form-group has-feedback">
												<input type="text" class="form-control has-feedback-left" name="fname" placeholder="Enter First Name">
												<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
											</div>

											<div class="col-md-4 col-sm-4 form-group has-feedback">
												<input type="text" class="form-control has-feedback-left" name="lname" placeholder="Enter last Name">
												<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4 col-sm-4 form-group has-feedback">
												<input type="text" class="form-control" name="deviceid" placeholder="Enter Device Number">
												<span class="fa fa-mobile form-control-feedback right" aria-hidden="true"></span>
											</div>

											<div class="col-md-4 col-sm-4 form-group has-feedback">
												<input type="number" class="form-control" name="orderid" placeholder="Enter Order ID">
												<span class="fa fa-shopping-cart form-control-feedback right" aria-hidden="true"></span>
											</div>
											<input type="hidden" name="isAJAX" value="0" />
											<div class="col-md-4 col-sm-4 form-group">
												<button type="submit" class="btn btn-success pull-right">Submit</button>

												<button type="submit" name="exportcsv" class="btn btn-info pull-right">Export CSV</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>User Search AJAX</h2>
									<ul class="nav navbar-right panel_toolbox">
										<li>
											<a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<form id="userSearchForm" class="form-label-left input_mask" action="<?php echo base_url() ?>dashboard/get_user_data" method="get" autocomplete="off">
										<!-- <div class="row">
											<div class="col-md-12 col-sm-12 alert alert-success alert-dismissible " role="alert">
												<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
												</button>
												<strong>Success!</strong>
											</div>

											<div class="col-md-12 col-sm-12 alert alert-danger alert-dismissible " role="alert">
												<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
												</button>
												<strong>Failed!</strong>
											</div>
										</div> -->
										<div class="row">
											<div class="col-md-4 col-sm-4 form-group has-feedback">
												<input type="text" class="form-control has-feedback-left" name="userid" id="userid" placeholder="Enter User Id">
												<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
											</div>

											<div class="col-md-4 col-sm-4 form-group has-feedback">
												<input type="number" class="form-control" name="phoneno" id="phoneno" placeholder="Enter Phone Number">
												<span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
											</div>

											<div class="col-md-4 col-sm-4 form-group has-feedback">
												<input type="email" class="form-control has-feedback-left" name="email" id="email" placeholder="Enter Email Id">
												<span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4 col-sm-4 form-group has-feedback">
												<input type="text" class="form-control has-feedback-left" name="fname" id="fname" placeholder="Enter First Name">
												<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
											</div>

											<div class="col-md-4 col-sm-4 form-group has-feedback">
												<input type="text" class="form-control has-feedback-left" name="lname" id="lname" placeholder="Enter last Name">
												<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4 col-sm-4 form-group has-feedback">
												<input type="text" class="form-control" name="deviceid" id="deviceid" placeholder="Enter Device Number">
												<span class="fa fa-mobile form-control-feedback right" aria-hidden="true"></span>
											</div>

											<div class="col-md-4 col-sm-4 form-group has-feedback">
												<input type="number" class="form-control" name="orderid" id="orderid" placeholder="Enter Order ID">
												<span class="fa fa-shopping-cart form-control-feedback right" aria-hidden="true"></span>
											</div>
											<input type="hidden" id="isAJAX" name="isAJAX" value="1" />
											<input type="hidden" id="export" name="export" value="1" />
											<div class="col-md-4 col-sm-4 form-group">
												<button type="submit" class="btn btn-success pull-right">Submit</button>

												<button id="exportcsv" name="exportcsv" class="btn btn-info pull-right">Export CSV</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

					<!-- Table -->
					<div class="clearfix"></div>

					<div class="">
						<div class="x_panel">
							<div class="x_title">
								<h2>User Data</h2>
								<ul class="nav navbar-right panel_toolbox">
									<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
									</li>
								</ul>
								<div class="clearfix"></div>
							</div>
							<div class="x_content" style="overflow-x: auto;">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>ID</th>
											<th>Fname</th>
											<th>Lname</th>
											<th>Email</th>
											<th>Age</th>
											<th>Phone</th>
											<th>OS</th>
											<th>App Version</th>
											<th>Gender</th>
											<th>Height</th>
											<th>Weight</th>
											<th>BMI</th>
											<th>BMR</th>
										</tr>
									</thead>
									<?php
									$tableData = $this->session->flashdata('tableData');
									if ($tableData) {
										echo $tableData;
									} else {
										echo "<tbody id='tableRows'></tbody>";
									}
									?>

								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page content -->
