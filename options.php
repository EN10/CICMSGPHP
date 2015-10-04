<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Compose Message </title>
<style TYPE="text/css">
body {color:blue;font-family:arial;text-align:center;}
</style>
<script type="text/javascript">
function validate(theform)
{   if (theform.CPW==null || theform.CPW.value=="")
    {	    alert("ERROR: Please enter Current Password"); return false; }
    else if (theform.NPW1 ==null || theform.NPW1.value=="")
    {	    alert("ERROR: Please enter New Password"); return false; } 
    else if (theform.NPW1.value != theform.NPW2.value)
    {	    alert("ERROR: New Passwords do not match!"); return false;	}
    else
    {	return true;	}
}
</script>
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
{  header("Location: http://cic.net84.net"); }
if ($_SESSION['type'] == "admin") 
{  header("Location: http://cic.net84.net/newPw.php"); }
?>
	<form action="changePW.php" onsubmit="return validate(this)" method="post">
	Current Password: <br>
	<input type="password" name="CPW" /> <p>
	New Password: <br>
	<input type="password" name="NPW1" /> <p>
	Confirm New Password: <br>
	<input type="password" name="NPW2" /> <p>
	<input type='Submit' value='Change Password'/>
	</form>
	
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