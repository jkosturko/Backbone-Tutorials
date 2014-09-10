<?php
	include('connectToDatabase.php');

	$sth = mysql_query("SELECT * FROM `SocialScoop`");
	$rows = array();
	while($r = mysql_fetch_assoc($sth)) {
	    $rows[] = $r;
	}
	print json_encode($rows);
?>