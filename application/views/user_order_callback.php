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
							<div class="row">
								<div class="col-md-8 col-sm-8 input-daterange" style="padding: 0px;">
									<div class="col-md-6 col-sm-6 form-group">
										<input type="text" name="startdate" id="startdate" class="form-control" placeholder="Enter Start Date" style="text-align: left;">
									</div>
									<div class="col-md-6 col-sm-6 form-group">
										<input type="text" name="enddate" id="enddate" class="form-control" placeholder="Enter End Date" style="text-align: left;">
									</div>
								</div>
								<select class="col-md-4 col-sm-4 form-group selectpicker" data-live-search="true" title="Select Request Status">
									<option>Mustard</option>
									<option>Ketchup</option>
									<option>Barbecue</option>
								</select>
							</div>

							<div class="row">
								<div class="col-md-4 col-sm-4 form-group">
									<input type="text" name="phone" class="form-control" placeholder="Enter Phone Number" style="text-align: left;">
								</div>
								<div class="col-md-4 col-sm-4 form-group">
									<input type="text" name="name" class="form-control" placeholder="Enter Name" style="text-align: left;">
								</div>
								<select class="col-md-4 col-sm-4 form-group selectpicker" data-live-search="true" title="Select Source">
									<option>Mustard</option>
									<option>Ketchup</option>
									<option>Barbecue</option>
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
	<div class="clearfix"></div>

</div>
</div>
<!-- /page content -->
