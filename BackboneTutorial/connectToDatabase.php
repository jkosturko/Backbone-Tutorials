<?php
$con = mysql_connect("SocialScoop.db.7996913.hostedresource.com","SocialScoop","Jesputzer1!");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("SocialScoop", $con);

// Execute query
mysql_query($sql,$con);


// $sql = "INSERT INTO Todo (Item)
// VALUES 
// ('$_POST[item]')"; 

// if (!mysql_query($sql,$con))
// {	
// 	die('Error: ' . mysql_error());
// }

//mysql_close($con);
?>
