<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Welcome to CIC's Messaging System </title>
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
      <th width="97" align="left" valign="middle" scope="row">
	  <a href="main.php"><img src="images/Home.png" width="99" height="55" /></a>
	  <p>
	  <a href="compose.php"><img src="images/Compose.png" width="143" height="55" /></a>
	  <p>
	  <a href="inbox.php"><img src="images/Inbox.png" width="94" height="55" /></a>
	  <p>
	  <a href="options.php"><img src="images/Options.png" width="118" height="50" /></a>
	  <p>
	  <a href="logOut.php"><img src="images/Sign Out.png" width="132" height="55" /></a>
	  </th> 
      <td width="524" align="center">
<?php
session_start();
if ($_SESSION['id'] == "") 
{  header("Location: http://cic.net84.net/index.htm"); }
elseif ($_SESSION['type'] == "admin") 
{  header("Location: http://cic.net84.net/mainEdit.php");}

$con = mysql_connect("mysql3.000webhost.com","a3052038_cic","xyz123");
if (!$con) die('Could not connect: ' . mysql_error());
mysql_select_db("a3052038_login", $con);
$msgSearch = mysql_query("SELECT * FROM messages WHERE toUser='all' ORDER BY MID DESC");

	// Find Messages
	while($msgRow = mysql_fetch_array($msgSearch))
	{ if ($msgRow['Read'] == "0") 
	  { 
          echo $msgRow['DT']."<br>";
	  echo "From: ".$msgRow['fromUser']." | ".$msgRow['Msg']."<br>";
	  echo "<p><br><p>";
	  }
	}
	mysql_close($con);
?>
</td>
    </tr>
    <tr>
      <th colspan="2" scope="row"><img src="images/Footer.jpg" width="524" height="77" /></th>
    </tr>
  </table></th>
</tr>
</table>
</body>
</html>