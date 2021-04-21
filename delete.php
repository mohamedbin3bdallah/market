<?php
session_start();
session_unset();
session_destroy();
/*function delTree($dir)
{
	$files = array_diff(scandir($dir), array('.','..')); 
    foreach ($files as $file) { 
    (is_dir("$dir/$file")) ? delTree("$dir/$file") : unlink("$dir/$file"); 
    } 
    rmdir($dir);
}
delTree('../market/');*/

//header('location: ../');
?>