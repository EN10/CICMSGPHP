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
if ($_SESSION['type'] != "admin") 
{  header("Location: http://cic.net84.net"); }

$to = $_POST[to];
$subject = $_POST[subject];
$txt = $_POST[message];
$headers = "From: " . $_POST[from];

mail($to,$subject,$txt,$headers);
echo "Message sent to " . $_POST[to];
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