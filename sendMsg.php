<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Sending Message </title>
<meta http-equiv='Refresh' content='1;url=main.php'/>
<style TYPE="text/css">
body {color:blue;font-family:arial;text-align:center;}
</style>
</head>

<body>
<table align="center" vspace="60" width="637" border="0" cellpadding="0" cellspacing="0">
<tr>
  <th colspan="2" scope="row"><table width="637" border="1">
    <tr>
      <th colspan="2" scope="col"><img src="images/Header.png" width="253" height="67" /></th>
    </tr>
    <tr>
      <th align="left" valign="middle" scope="row"><a href="main.php"><img src="images/Home.png" width="99" height="55" /></a></th>
      <td width="524" rowspan="5" align="center">
<?php
session_start();
if ($_SESSION['id'] == "") 
{  header("Location: http://cic.net84.net"); }
if (strtolower($_POST[to]) == "all" && !($_SESSION['type'] == "admin"))
	echo "ERROR: Only admin can send to all";
else
{	$con = mysql_connect("mysql3.000webhost.com","a3052038_cic","xyz123");
	if (!$con) die('Could not connect: ' . mysql_error());
	mysql_select_db("a3052038_login", $con);
	$to =  mysql_real_escape_string($_POST[to]);
	$result = mysql_query("SELECT * FROM users WHERE username = '$to'");

	$exists="no";
	while($row = mysql_fetch_array($result))
	  { if (strncasecmp($row[username], $to, 50) == 0)
	    $exists="yes"; }
	if ($exists=="no") echo "ERROR: User ".$to." does not exist";

	$un = $_SESSION[user];
	if ($exists=="yes")
	  { $msg = mysql_real_escape_string($_POST[message]);
	    $sql="INSERT INTO messages(DT, fromUser, toUser, Msg)
	    VALUES
	    ('$_SESSION[datetime]','$un', '$to', '$msg')";

	    if (!mysql_query($sql,$con)) die('Error: ' . mysql_error());
	    echo "Message sent to ".$to;
	  }
	mysql_close($con);
}
?>
</td>
    </tr>
    <tr align="left" valign="middle">
      <th scope="row"><a href="compose.php"><img src="images/Compose.png" width="143" height="55" /></a></th>
    </tr>
    <tr align="left" valign="middle">
      <th scope="row"><a href="inbox.php"><img src="images/Inbox.png" width="94" height="55" /></a></th>
    </tr>
    <tr align="left" valign="middle">
      <th width="97" scope="row"><a href="options.php"><img src="images/Options.png" width="118" height="50" /></th>
    </tr>
    <tr align="left">
      <th scope="row"><a href="logOut.php"><img src="images/Sign Out.png" width="132" height="55" /></a></th>
    </tr>
    <tr>
      <th colspan="2" scope="row"><img src="images/Footer.jpg" width="524" height="77" /></th>
    </tr>
  </table></th>
</tr>
</table>
</body>
</html>