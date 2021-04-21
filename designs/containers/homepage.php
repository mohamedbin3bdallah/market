<div class="row">
	<?php include("../designs/headers/profilemenu.php"); ?>
	<div class="col-md-10 <?php if($_SESSION['adminlang'] == 'ar') echo 'col-md-pull-2'; ?>">
	<h2><label><?php language('home'); ?></label></h2>
	
	<br><br><br><br><br>
	
	<h4><label style="color: #0c5d97;"><?php language('hello').language(' '); echo $_SESSION['adminname']; ?></label></h4>
	</div>
</div>