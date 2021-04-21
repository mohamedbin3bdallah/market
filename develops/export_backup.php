<?php
session_start();
if(isset($_SESSION['admin']))
{
	if(isset($_SESSION['mac'], $_SESSION['rmac']) && $_SESSION['mac'] == $_SESSION['rmac'])
	{
		include('../libs/config.php');
		include('../libs/opendb.php');

		$backup_director = $_SERVER['DOCUMENT_ROOT']."/market/backup/database/";

		$date = date("Y-m-d");
		$today_backup_director = $backup_director.$date."/";
		array_map('unlink', glob("$today_backup_director/*.*"));
		rmdir($today_backup_director);
		$create_today_backup_director = mkdir($today_backup_director);

		$sql1 = "SELECT * FROM admin INTO OUTFILE '". $today_backup_director."admin.txt' FIELDS TERMINATED BY ',' ENCLOSED BY '".'"'."' LINES TERMINATED BY '\r\n'";
		$dbh->exec($sql1);
		
		$sql2 = "SELECT * FROM products INTO OUTFILE '". $today_backup_director."products.txt' FIELDS TERMINATED BY ',' ENCLOSED BY '".'"'."' LINES TERMINATED BY '\r\n'";
		$dbh->exec($sql2);

		$sql3 = "SELECT * FROM sales INTO OUTFILE '". $today_backup_director."sales.txt' FIELDS TERMINATED BY ',' ENCLOSED BY '".'"'."' LINES TERMINATED BY '\r\n'";
		$dbh->exec($sql3);

		$sql4 = "SELECT * FROM sizes INTO OUTFILE '". $today_backup_director."sizes.txt' FIELDS TERMINATED BY ',' ENCLOSED BY '".'"'."' LINES TERMINATED BY '\r\n'";
		$dbh->exec($sql4);
		
		$sql5 = "SELECT * FROM backs INTO OUTFILE '". $today_backup_director."backs.txt' FIELDS TERMINATED BY ',' ENCLOSED BY '".'"'."' LINES TERMINATED BY '\r\n'";
		$dbh->exec($sql5);
		
		$sql6 = "SELECT * FROM invoices INTO OUTFILE '". $today_backup_director."invoices.txt' FIELDS TERMINATED BY ',' ENCLOSED BY '".'"'."' LINES TERMINATED BY '\r\n'";
		$dbh->exec($sql6);

		include('../libs/closedb.php');
		echo header('location:../pages/database.php');

	} else echo header('location:../delete.php');
} else echo header('location:../');
?>