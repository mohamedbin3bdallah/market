<div class="row">
	<?php include("../designs/headers/profilemenu.php"); ?>
	<div class="col-md-10 <?php if($_SESSION['adminlang'] == 'ar') echo 'col-md-pull-2'; ?>">
	<h2><label><?php language('sizes'); ?></label></h2><br><br>
	
		<div class="row">
			<div class="col-md-12">
				<center><h4><?php echo getProductTitleByCode($_GET['pcode']); ?></h4></center>
			</div>
		</div>
	
		<h4><label style="color: #0c5d97;"><?php language('newsize'); ?></label></h4>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<form enctype="multipart/form-data" method="POST" action="">
				<?php if(isset($_GET['oldid']) && $_GET['oldid'] != '') { ?><input type="hidden" name="oldid" value="<?php echo $_GET['oldid']; ?>" /><?php } ?>
				<table class="table table-bordered">					
					<tr>
						<td class="info"><?php language('size'); ?></td>
						<td class="warning"><input type="text" name="size" value="<?php if(isset($size['size'])) echo $size['size']; ?>" maxlength="50" class="form-control" title="<?php language('inputmatch'); ?>" required="required" <?php if(isset($_GET['oldid']) && $_GET['oldid'] != '') echo 'readonly'; ?> /></td>
					</tr>
					<tr>
						<td class="info"><?php language('quantity'); ?></td>
						<td class="warning"><input type="text" name="quantity" value="<?php if(isset($size['quantity'])) echo $size['quantity']; ?>" maxlength="5" class="form-control" pattern="[0-9]*" title="<?php language('quantitymatch'); ?>" required="required" /></td>
					</tr>					
					<tr>
						<td class="info"></td>
						<td class="warning"><input type="submit" name="savesize" class="btn btn-success" /></td>
					</tr>
				</table>
				</form>
				</div>
			</div>
		</div>
	
	<br><br><h4><label style="color: #0c5d97;"><?php language('sizes'); ?></label></h4>
		<?php
		$sizes = getSizes($_GET['pcode'],$startResults,$resultsPerPage);
		if(!empty($sizes))
		{
		?>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<table class="table table-bordered">
					<tr class="danger">
						<td><?php language('size'); ?></td>
						<td><?php language('quantity'); ?></td>
						<td><?php language('edit'); ?></td>
						<td><?php language('delete'); ?></td>
					</tr>
				<?php for($i=0;$i<sizeof($sizes);$i++) { ?>
					<tr id="tr-<?php echo $sizes[$i]['id']; ?>">
						<td><?php echo $sizes[$i]['size']; ?></td>
						<td><?php echo $sizes[$i]['quantity']; ?></td>
						<td><a href="sizes.php?pcode=<?php echo $_GET['pcode']; ?>&oldid=<?php echo $sizes[$i]['id']; ?>"><i style="color:green;" class="glyphicon glyphicon-edit"></i></a></td>
						<td>
							<i id="<?php echo $sizes[$i]['id'];?>" style="color:red;" class="sizedel glyphicon glyphicon-remove-circle"></i>
							<div id="sizes-<?php echo $sizes[$i]['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-sm">
									<div class="modal-content">
										<div class="modal-header">
											<?php language('deletesizemodal'); ?>
											<br>
        								</div>
										<div class="modal-body">
										<center>
											<button class="btn btn-danger" onclick="deletesize('<?php echo $sizes[$i]['id']; ?>','<?php echo $_GET['pcode']; ?>','<?php echo $sizes[$i]['size']; ?>')" data-dismiss="modal"><?php language('agree'); ?></button>
											<button class="btn btn-success" data-dismiss="modal" aria-hidden="true"><?php language('no'); ?></button>
										</center>
										</div>
									</div>
								</div>
							</div>
						</td>
					</tr>
				<?php } ?>
				</table>
				</div>
			</div>
		</div>
		
		<div class="row">			
			<div class="col-md-8">
				<nav>
					<ul class="pagination">	
						<?php if($totalPages > 1) { ?><li><a href="?pcode=<?php echo $_GET['pcode']; ?>&page=<?php echo $totalPages; ?>"><?php language("last"); ?></a></li><?php } ?>
						<?php if($page < $totalPages-1) { ?><li>
							<a href="?pcode=<?php echo $_GET['pcode']; ?>&page=<?php echo $page+2; ?>" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
							</a>
						</li><?php } ?>
						<?php if($page < $totalPages) { ?><li><a href="?pcode=<?php echo $_GET['pcode']; ?>&page=<?php echo $page+1; ?>"><?php echo $page+1; ?></a></li><?php } ?>
						<?php if($totalPages > 1) { ?><li><a href="?pcode=<?php echo $_GET['pcode']; ?>&page=<?php echo $page; ?>"><?php echo $page; ?></a></li><?php } ?>
						<?php if($page > 1) { ?><li><a href="?pcode=<?php echo $_GET['pcode']; ?>&page=<?php echo $page-1; ?>"><?php echo $page-1; ?></a></li><?php } ?>
						<?php if($page > 3) { ?><li>
							<a href="?pcode=<?php echo $_GET['pcode']; ?>&page=<?php echo $page-2; ?>" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li><?php } ?>
						<?php if($totalPages > 1) { ?><li><a href="?pcode=<?php echo $_GET['pcode']; ?>&page=1"><?php language("first"); ?></a></li><?php } ?>
					</ul>
				</nav>
			</div>
			<div class="col-md-4">
			</div>
		</div>
		
		<?php } else language("nosizes"); ?>
	</div>
</div>