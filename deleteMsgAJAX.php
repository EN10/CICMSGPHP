<?php
session_start();
$con = mysql_connect("mysql3.000webhost.com","a3052038_cic","xyz123");
if (!$con) die('Could not connect: ' . mysql_error());
mysql_select_db("a3052038_login", $con);
	$result = mysql_query("SELECT * FROM messages WHERE toUser='$_SESSION[user]'");

	$mid =  mysql_real_escape_string($_GET[mid]);
	$exists="no";
	while($row = mysql_fetch_array($result))
	  { if ($row['MID'] == $mid ) $exists="yes"; }

	if ($exists=="no")
	  { echo "NOT FOUND"; }
	 
	if ($exists=="yes")
	  { $sql="DELETE FROM messages WHERE MID='$mid'";
	 	if (!mysql_query($sql,$con)) die('Error: ' . mysql_error());
		echo "DELETED";
	  }
	mysql_close($con);
?>