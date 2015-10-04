<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> CIC Messenger </title>
<meta http-equiv='Refresh' content='3;url=index.html'/>
<style type="text/css">
body {color:orange;font-family:arial;}
</style>
</head>

<body>
<table align="center" vspace="60" width="637" border="0" cellpadding="0" cellspacing="0">
<tr>
  <th colspan="2" scope="row"><table width="637" border="1">
    <tr>
      <th colspan="2" scope="col"><a href="main.php"><img src="images/Header.png" width="253" height="67" /></th>
    </tr>
    <tr>
      <th colspan="2" align="left" valign="middle" scope="row">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
<div style = "text-align:center;">
<?php
if ($_POST[invite] == "") 
{	$con = mysql_connect("","","");
	if (!$con) die('Could not connect: ' . mysql_error());
	mysql_select_db("", $con);
	$un =  mysql_real_escape_string($_POST[username]);
	$result = mysql_query("SELECT * FROM users WHERE username = '$un'");
		$exists="no";
		while($row = mysql_fetch_array($result))
		{	if ($row[username] == $un) $exists="yes"; }
	if ($exists=="yes") echo "ERROR: User ".$un." already exists";
		if ($exists=="no")
		{	$pw = mysql_real_escape_string($_POST[password]);
			$sql="INSERT INTO users(username, password, type)
			VALUES
			('$un',sha1('$pw'), 'student')";
			if (!mysql_query($sql,$con)) die('Error: ' . mysql_error());
			echo "Account ".$un." Created, you can now Sign In.";
		}
	mysql_close($con);
}
else
echo "ERROR: invite code not recognised";
?>
</div>
        <p>&nbsp;</p>
        <p>&nbsp;</p></th>
    </tr>
    <tr>
      <th colspan="2" scope="row"><img src="images/Footer.jpg" width="524" height="77" /></th>
    </tr>
  </table></th>
</tr>
</table>
</body>
</html>
