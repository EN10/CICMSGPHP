<head>
<title> Signing Out of CIC's Messaging System </title>
<meta http-equiv='Refresh' content='1;url=index.html'/>
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
  echo "<b> Thank you for using Enio's Messaging System <p> Signing Out and Deleting Session";
  session_start();
  session_destroy();
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
      <th width="97" scope="row"><img src="images/Options.png" width="118" height="50" /></th>
    </tr>
    <tr align="left">
      <th scope="row"><a href="signOut.php"><img src="images/Sign Out.png" width="132" height="55" /></a></th>
    </tr>
    <tr>
      <th colspan="2" scope="row"><img src="images/Footer.jpg" width="524" height="77" /></th>
    </tr>
  </table></th>
</tr>
</table>
</body>
</html>