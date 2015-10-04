<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Loading Page </title>
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
      <th colspan="2" align="center" valign="middle" scope="row"><p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

<?php
session_start();

$con = mysql_connect("mysql3.000webhost.com","a3052038_cic","xyz123");
if (!$con) die('Could not connect: ' . mysql_error());
mysql_select_db("a3052038_login", $con);
$un = mysql_real_escape_string($_POST['username']);
$userSearch = mysql_query("SELECT * FROM users WHERE username = '$un'");

$userMatch="no";
while($userRow = mysql_fetch_array($userSearch))
  { // match password
    $pw = mysql_real_escape_string($_POST['password']);
    if ($userRow['password'] == sha1($pw))
    { $_SESSION['id'] = $userRow['UID'];
      $_SESSION['user'] = $un;
      $_SESSION['type'] = $userRow['type'];
      echo "Welcome ".$un."<p> User Session Created <br> Loading Main Menu";
    }
    else
    { echo "Password not recognised";
      session_destroy();
    }
  $userMatch="yes"; // user exists
  }
if ($userMatch=="no") 
{  echo "User not recognised";
   session_destroy();
}
?>
        <p>&nbsp;</p>
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