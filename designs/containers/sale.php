<div class="row">
	<?php include("../designs/headers/profilemenu.php"); ?>
	<div class="col-md-10 <?php if($_SESSION['adminlang'] == 'ar') echo 'col-md-pull-2'; ?>">
		<h2><label><?php language('sale'); ?></label></h2><br><br>
	
		<h4><label style="color: #0c5d97;"><?php language('newsale'); ?></label></h4>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">				
				<form id="productsearchform" enctype="multipart/form-data" method="POST" action="">
				<table class="table table-bordered">
					<tr>
						<td class="info"><?php language('code').language(' ').language('product'); ?></td>
						<td colspan="/*6*/" class="warning"><input type="text" name="pcode" id="pcode" maxlength="255" class="form-control" required="required" autocomplete="off" /></td>
					</tr>
				</table>
				<div id="saleformrest">
				</div>
				</form>
				<table class="table">
					<tr>
						<td><input type="submit" name="addsale" id="addsale" class="btn btn-default" value="<?php language('add'); ?>" disabled /></td>
					</tr>					
				</table>
				
				<form id="salerecordsform" enctype="multipart/form-data" method="POST" action="">
					<table class="table table-bordered" id="salerecords">
						<tr>
							<td class="info"><?php language('code').language(' ').language('product'); ?></td>
							<td class="info"><?php language('size'); ?></td>
							<td class="info"><?php language('quantity'); ?></td>
							<td class="info"><?php language('total'); ?></td>
							<td class="info"><?php language('delete'); ?></td>
						</tr>
					</table>					
					<table class="table">
						<tr>
							<td><input type="submit" name="savesale" id="savesale" class="btn btn-success" value="<?php language('save'); ?>" disabled /></td>
						</tr>					
					</table>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>