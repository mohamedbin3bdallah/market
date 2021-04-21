<link rel="stylesheet" href="../css/profile.css">
	<div class="col-md-2 <?php if($_SESSION['adminlang'] == 'ar') echo 'col-md-push-10'; ?>">
		<center>
			<div class="portlet">
				<div class="portlet-body">
					<div class="tabbable">
						<div class="tab-content no-space">
							<div class="form-body">
								<div class="form-group">
									<label class="col-md-12 control-label list-label"><!--<i class="glyphicon glyphicon-option-horizontal"></i>--><a href="../pages/homepage.php"><?php language(" ").language("home"); ?></a></label>
								</div>
								<div class="form-group">
									<label class="col-md-12 control-label list-label"><!--<i class="glyphicon glyphicon-option-horizontal"></i>--><a href="../pages/products.php"><?php language(" ").language("addproduct"); ?></a></label>
								</div>
								<div>
									<label class="col-md-12 control-label list-label"><!--<i class="glyphicon glyphicon-option-horizontal"></i>--><a href="../pages/sales.php"><?php language(" ").language("sales"); ?></a></label>
								</div>
								<div class="form-group">
									<label class="col-md-12 control-label list-label"><!--<i class="glyphicon glyphicon-option-horizontal"></i>--><a href="../pages/backs.php"><?php language(" ").language("backs"); ?></a></label>
								</div>
								<div class="form-group">
									<label class="col-md-12 control-label list-label"><!--<i class="glyphicon glyphicon-option-horizontal"></i>--><a href="../pages/sale.php"><?php language(" ").language("sale"); ?></a></label>
								</div>
								<div class="form-group">
									<label class="col-md-12 control-label list-label"><!--<i class="glyphicon glyphicon-option-horizontal"></i>--><a href="../pages/back.php"><?php language(" ").language("back"); ?></a></label>
								</div>
								<div class="form-group">
									<label class="col-md-12 control-label list-label"><!--<i class="glyphicon glyphicon-option-horizontal"></i>--><a href="../pages/database.php"><?php language(" ").language("database"); ?></a></label>
								</div>
								<div class="form-group">
									<label class="col-md-12 control-label list-label"><!--<i class="glyphicon glyphicon-user"></i><i class="glyphicon glyphicon-user"></i>--><a href="../logout.php"><?php language(" ").language("logout"); ?></a></label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<center>
	</div>