<?php
session_start();
?>
<html>
<head>
</head>
<body>
<?php
/* @var $_POST type */
$email = $_POST['email'];
$password = $_POST['password'];
include ('header.php');
include ('connection.php');
$select = "select ufname from tbuser where uemail like '$email' AND upasswd like '$password'";
$queryresult = mysql_query($select);
$name = mysql_fetch_array($queryresult);
if($name=="")
{
Header("Location: login.php");
}
else
{
$_SESSION["currentuser"]=$email;
Header("Location: index.php");
//echo "Welcome "." $queryresult";
}
?>
</body>
</html>
