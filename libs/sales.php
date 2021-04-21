<?php

function getSales()
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select * from sales order by time DESC , invoice DESC");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = $result->fetch(); $i++)
		{
			$allrows[$i]['id'] = $row['id'];
			$allrows[$i]['product'] = $row['product'];
			$allrows[$i]['invoice'] = $row['invoice'];
			$allrows[$i]['size'] = $row['size'];
			$allrows[$i]['quantity'] = $row['quantity'];
			$allrows[$i]['total'] = $row['total'];
			$allrows[$i]['time'] = $row['time'];
		}
	}
	include("../libs/closedb.php");
	return $allrows;
}

?>