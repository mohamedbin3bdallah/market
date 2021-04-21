<div class="row">
	<?php include("../designs/headers/profilemenu.php"); ?>
	<div class="col-md-10 <?php if($_SESSION['adminlang'] == 'ar') echo 'col-md-pull-2'; ?>">
		<h2><label><?php language('backs'); ?></label></h2><br><br>
		
		<ul class="nav nav-tabs nav-justified">
			<li class="active"><a data-toggle="tab" href="#product"><?php language('product'); ?></a></li>
			<li><a data-toggle="tab" href="#invoice"><?php language('invoice'); ?></a></li>
		</ul>
		
		<div class="tab-content">
			<div id="product" class="tab-pane fade in active">
				<h4 style="color: #0c5d97;"><?php language('product'); ?></h4>
				<div class="row">					
					<div class="col-md-6">
						<input type="text" name="pcode" id="pcode" maxlength="255" class="form-control" required="required" autocomplete="off" />
					</div>					
					<div class="col-md-4">
						<?php language('code').language(' ').language('product'); ?>
					</div>
					<div class="col-md-2">
					</div>					
				</div>
				<div class="row" style="margin-top: 50px">
					<div class="col-md-12" id="productinvoices">
					</div>
				</div>
			</div>
			<div id="invoice" class="tab-pane fade">
				<h4 style="color: #0c5d97;"><?php language('invoice'); ?></h4>
				<div class="row">					
					<div class="col-md-6">
						<input type="text" name="invoiceno" id="invoiceno" maxlength="255" class="form-control" required="required" autocomplete="off" />
					</div>					
					<div class="col-md-4">
						<?php language('code').language(' ').language('invoice'); ?>
					</div>
					<div class="col-md-2">
					</div>					
				</div>
				<div class="row" style="margin-top: 50px">
					<div class="col-md-12" id="productinvoice">
					</div>
				</div>
			</div>
		</div>		
	</div>
</div>