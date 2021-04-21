<div class="row">
	<?php include("../designs/headers/profilemenu.php"); ?>
	<div class="col-md-10 <?php if($_SESSION['adminlang'] == 'ar') echo 'col-md-pull-2'; ?>">
		<h2><label><?php language('database'); ?></label></h2><br><br>
	
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
					<table class="table">					
						<tr>
							<td><?php language('exportbackup'); ?></td>
							<td></td>
							<td><input type="button" class="btn btn-success" value="<?php language('exportbackup'); ?>" onclick="window.location.href='../develops/export_backup.php';" style="width: 199px;" /></td>
						</tr>						
						<tr>
							<td><?php language('databasedate'); ?></td>
							<form action="../develops/import_backup.php" method="GET">
								<td><input type="date" name="date" class="form-control" title="<?php language('mustselectdate'); ?>" required="required" /></td>
								<td><input type="submit" class="btn btn-danger" value="<?php language('importbackup'); ?>" style="width: 199px;" /></td>
							</form>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>