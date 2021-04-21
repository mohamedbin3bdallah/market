<?php
session_start();
if(isset($_SESSION['admin']))
{
	if(isset($_SESSION['mac'], $_SESSION['rmac']) && $_SESSION['mac'] == $_SESSION['rmac'])
	{
		if(isset($_GET['date']) && $_GET['date'] != '')
		{
			include('../libs/config.php');
			include('../libs/opendb.php');

			$backup_director = $_SERVER['DOCUMENT_ROOT']."/market/backup/database/";
			$date_backup_director = $backup_director.$_GET['date']."/";

			if(is_dir($date_backup_director))
			{
				if(file_exists ($date_backup_director.'admin.txt'))
				{
					$sql10 = "DELETE FROM admin";
					$dbh->exec($sql10);
					$sql11 = "LOAD DATA INFILE '". $date_backup_director ."admin.txt' INTO TABLE admin FIELDS TERMINATED BY ',' ENCLOSED BY '".'"'."' LINES TERMINATED BY '\r\n'";
					$dbh->exec($sql11);
				}
				if(file_exists ($date_backup_director.'products.txt'))
				{
					$sql20 = "DELETE FROM products";
					$dbh->exec($sql20);
					$sql21 = "LOAD DATA INFILE '". $date_backup_director ."products.txt' INTO TABLE products FIELDS TERMINATED BY ',' ENCLOSED BY '".'"'."' LINES TERMINATED BY '\r\n'";
					$dbh->exec($sql21);
				}
				if(file_exists ($date_backup_director.'sales.txt'))
				{
					$sql30 = "DELETE FROM sales";
					$dbh->exec($sql30);
					$sql31 = "LOAD DATA INFILE '". $date_backup_director ."sales.txt' INTO TABLE sales FIELDS TERMINATED BY ',' ENCLOSED BY '".'"'."' LINES TERMINATED BY '\r\n'";
					$dbh->exec($sql31);
				}
				if(file_exists ($date_backup_director.'sizes.txt'))
				{
					$sql40 = "DELETE FROM sizes";
					$dbh->exec($sql40);
					$sql41 = "LOAD DATA INFILE '". $date_backup_director ."sizes.txt' INTO TABLE sizes FIELDS TERMINATED BY ',' ENCLOSED BY '".'"'."' LINES TERMINATED BY '\r\n'";
					$dbh->exec($sql41);
				}
				if(file_exists ($date_backup_director.'backs.txt'))
				{
					$sql50 = "DELETE FROM backs";
					$dbh->exec($sql50);
					$sql51 = "LOAD DATA INFILE '". $date_backup_director ."backs.txt' INTO TABLE backs FIELDS TERMINATED BY ',' ENCLOSED BY '".'"'."' LINES TERMINATED BY '\r\n'";
					$dbh->exec($sql51);
				}
				if(file_exists ($date_backup_director.'invoices.txt'))
				{
					$sql60 = "DELETE FROM invoices";
					$dbh->exec($sql60);
					$sql61 = "LOAD DATA INFILE '". $date_backup_director ."invoices.txt' INTO TABLE invoices FIELDS TERMINATED BY ',' ENCLOSED BY '".'"'."' LINES TERMINATED BY '\r\n'";
					$dbh->exec($sql61);
				}
				include('../libs/closedb.php');
			}
		}
		echo header('location:../pages/database.php');

	} else echo header('location:../delete.php');
} else echo header('location:../');
?>