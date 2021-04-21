<div class="row">
	<?php include("../designs/headers/profilemenu.php"); ?>
	<div class="col-md-10 <?php if($_SESSION['adminlang'] == 'ar') echo 'col-md-pull-2'; ?>">
		<h2><label><?php language('products'); ?></label></h2><br><br>
	
		<h4><label style="color: #0c5d97;"><?php language('newproduct'); ?></label></h4>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<form enctype="multipart/form-data" method="POST" action="">
				<?php if(isset($_GET['oldid']) && $_GET['oldid'] != '') { ?><input type="hidden" name="oldid" value="<?php echo $_GET['oldid']; ?>" /><?php } ?>
				<table class="table table-bordered">					
					<tr>
						<td class="info"><?php language('productcode'); ?></td>
						<td class="warning"><input type="text" name="pcode" value="<?php if(isset($product['pcode'])) echo $product['pcode']; ?>" maxlength="255" class="form-control" pattern="[a-zA-Z0-9]*" title="<?php language('inputmatchnotarabic'); ?>" required="required" <?php if(isset($_GET['oldid']) && $_GET['oldid'] != '') echo 'readonly'; ?> /></td>
					</tr>
					<tr>
						<td class="info"><?php language('title'); ?></td>
						<td class="warning"><input type="text" name="title" value="<?php if(isset($product['title'])) echo $product['title']; ?>" maxlength="255" class="form-control" title="<?php language('inputmatch'); ?>" required="required" /></td>
					</tr>
					<tr>
						<td class="info"><?php language('price'); ?></td>
						<td class="warning"><input type="text" name="price" value="<?php if(isset($product['price'])) echo $product['price']; ?>" maxlength="255" class="form-control" pattern="[0-9]*" title="<?php language('quantitymatch'); ?>" required="required" /></td>
					</tr>
					<tr>
						<td class="info"></td>
						<td class="warning"><input type="submit" name="saveproduct" class="btn btn-success" /></td>
					</tr>
				</table>
				</form>
				</div>
			</div>
		</div>
	
		<h4><label style="color: #0c5d97;"><?php language('products'); ?></label></h4>
		<?php
		$products = getProducts($startResults,$resultsPerPage);
		if(!empty($products))
		{
		?>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<table class="table table-bordered">
					<tr class="danger">						
						<td><?php language('productcode'); ?></td>
						<td><?php language('title'); ?></td>
						<td><?php language('price'); ?></td>
						<td><?php language('edit'); ?></td>
						<td><?php language('delete'); ?></td>
					</tr>
				<?php for($i=0;$i<sizeof($products);$i++) { ?>
					<tr id="tr-<?php echo $products[$i]['id']; ?>">
						<td><a href="sizes.php?pcode=<?php echo $products[$i]['pcode']; ?>"><?php echo $products[$i]['pcode']; ?></a></td>
						<td><a href="sizes.php?pcode=<?php echo $products[$i]['pcode']; ?>"><?php echo $products[$i]['title']; ?></a></td>
						<td><?php echo str_replace($english, $arabic, $products[$i]['price']).' ج م'; ?></td>
						<td><a href="products.php?oldid=<?php echo $products[$i]['id']; ?>"><i style="color:green;" class="glyphicon glyphicon-edit"></i></a></td>
						<td>
							<i id="<?php echo $products[$i]['id'];?>" style="color:red;" class="productdel glyphicon glyphicon-remove-circle"></i>
							<div id="product-<?php echo $products[$i]['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-sm">
									<div class="modal-content">
										<div class="modal-header">
											<?php language('deleteproductmodal'); ?>
											<br>
        								</div>
										<div class="modal-body">
										<center>
											<button class="btn btn-danger" onclick="deleteproduct('<?php echo $products[$i]['id'];?>','<?php echo $products[$i]['pcode'];?>')" data-dismiss="modal"><?php language('agree'); ?></button>
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
						<?php if($totalPages > 1) { ?><li><a href="?page=<?php echo $totalPages; ?>"><?php language("last"); ?></a></li><?php } ?>
						<?php if($page < $totalPages-1) { ?><li>
							<a href="?page=<?php echo $page+2; ?>" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
							</a>
						</li><?php } ?>
						<?php if($page < $totalPages) { ?><li><a href="?page=<?php echo $page+1; ?>"><?php echo $page+1; ?></a></li><?php } ?>
						<?php if($totalPages > 1) { ?><li><a href="?page=<?php echo $page; ?>"><?php echo $page; ?></a></li><?php } ?>
						<?php if($page > 1) { ?><li><a href="?page=<?php echo $page-1; ?>"><?php echo $page-1; ?></a></li><?php } ?>
						<?php if($page > 3) { ?><li>
							<a href="?page=<?php echo $page-2; ?>" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li><?php } ?>
						<?php if($totalPages > 1) { ?><li><a href="?page=1"><?php language("first"); ?></a></li><?php } ?>
					</ul>
				</nav>
			</div>
			<div class="col-md-4">
			</div>
		</div>
		
		<?php } else language("noproducts"); ?>
	</div>
</div>