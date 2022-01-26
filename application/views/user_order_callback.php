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
						<h2>Filter Form</h2>
						<ul class="nav navbar-right panel_toolbox">
							<li>
								<a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<form class="form-label-left input_mask" action="<?= base_url() ?>userorder/ordercallback" method="post" autocomplete="off">
							<div class="row">
								<div class="col-md-8 col-sm-8 input-daterange" style="padding: 0px;">
									<div class="col-md-6 col-sm-6 form-group has-feedback">
										<input type="text" name="startdate" id="startdate" class="form-control has-feedback-left" placeholder="Enter Start Date" style="text-align: left;">
										<span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
									</div>
									<div class="col-md-6 col-sm-6 form-group has-feedback">
										<input type="text" name="enddate" id="enddate" class="form-control has-feedback-left" placeholder="Enter End Date" style="text-align: left;">
										<span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
									</div>
								</div>
								<select class="col-md-4 col-sm-4 form-group selectpicker" data-live-search="true" name="status" title="Select Request Status">
									<?php
									foreach ($status as $key => $row) {
										if (strlen($row['status']) > 0) {
											$option = substr($row['status'], 0, 50);
									?>
											<option data-content="<?= $option ?>" value="<?= $row['status'] ?>"><?= $option ?></option>
									<?php
										}
									}
									?>
								</select>
							</div>

							<div class="row">
								<div class="col-md-4 col-sm-4 form-group has-feedback">
									<input type="text" name="phone" class="form-control has-feedback-left" placeholder="Enter Phone Number" style="text-align: left;">
									<span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
								</div>
								<div class="col-md-4 col-sm-4 form-group has-feedback">
									<input type="text" name="name" class="form-control has-feedback-left" placeholder="Enter Name" style="text-align: left;">
									<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
								</div>
								<select class="col-md-4 col-sm-4 form-group selectpicker" data-live-search="true" name="source" title="Select Source">
									<?php
									foreach ($source as $key => $row) {
										if (strlen($row['source']) > 0) {
											$option = substr($row['source'], 0, 50);
									?>
											<option data-content="<?= $option ?>" value="<?= $row['source'] ?>"><?= $option ?></option>
									<?php
										}
									}
									?>
								</select>
							</div>

							<div class="row">
								<div class="col-md-12 col-sm-12 form-group">
									<button type="submit" class="pull-right btn btn-success">Apply Filter</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Table -->
	<?php
	if (current_url() != "http://localhost/ci3-demo/userorder") {
	?>
		<div class="">
			<div class="clearfix"></div>
			<?php print_r($request) ?>

			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
						<div class="x_title">
							<h2>Filter Data</h2>
							<ul class="nav navbar-right panel_toolbox">
								<li>
									<a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
								</li>
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="x_content" style="overflow-x: auto;">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-12 col-sm-12 col-xs-12">
										<div class="x_panel" id="user_followup_id">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<p><?= $links ?></p>
												<table class="table table-bordered">
													<thead>
														<tr>
															<th>User ID</th>
															<th>Created</th>
															<th>Name</th>
															<th>Phone</th>
															<th>Email</th>
															<th>Order Type</th>
															<th>Ticket ID</th>
															<th>Subscription Type</th>
															<th>Last lead Assignment Date</th>
														</tr>
													</thead>
													<tbody>
														<?php foreach ($order_callback_data as $key => $row) { ?>
															<tr>
																<td><?= $row['userid']; ?></td>
																<td><?= date('d-m-Y H:i:s', strtotime('+5 hour +30 minutes', strtotime($row['created']))); ?></td>
																<td><?= $row['name']; ?></td>
																<td><?= $row['phone']; ?></td>
																<td><?= $row['email'] ?></td>
																<td><?= $row['ordertype']; ?></td>
																<td><?= $row['ticketid']; ?></td>
																<td><?= $row['subscription_type']; ?></td>
																<td><?= date('d-m-Y H:i:s', strtotime('+5 hour +30 minutes', strtotime($row['last_lead_assignment_date']))); ?></td>
															</tr>
														<?php } ?>
													</tbody>
													<tfoot>
														<tr>
															<th>User ID</th>
															<th>Created</th>
															<th>Name</th>
															<th>Phone</th>
															<th>Email</th>
															<th>Order Type</th>
															<th>Ticket ID</th>
															<th>Subscription Type</th>
															<th>Last lead Assignment Date</th>
														</tr>
													</tfoot>
												</table>
												<p><?= $links ?></p>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php
	}
	?>

</div>
</div>
<!-- /page content -->
