<div class="row">
	<?php include("../designs/headers/profilemenu.php"); ?>
	<div class="col-md-10 <?php if($_SESSION['adminlang'] == 'ar') echo 'col-md-pull-2'; ?>">
		<h2><label><?php language('back'); ?></label></h2><br><br>
	
		<h4><label style="color: #0c5d97;"><?php language('newback'); ?></label></h4>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<form enctype="multipart/form-data" method="POST" action="">
				<table class="table table-bordered">
					<tr>
						<td class="info"><?php language('code').language(' ').language('invoice'); ?></td>
						<td colspan="/*6*/" class="warning"><input type="text" name="invoice" id="invoice" maxlength="255" class="form-control" required="required" autocomplete="off" /></td>
					</tr>
				</table>
				<div id="backformrest">
				</div>
				<table class="table table-bordered">
					<tr>
						<td class="info"></td>
						<td colspan="/*6*/" class="warning"><input type="submit" name="saveback" id="saveback" class="btn btn-success" disabled /></td>
					</tr>					
				</table>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>