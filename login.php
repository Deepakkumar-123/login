<?php
session_start();
$message="";
if(count($_POST)>0) 
{
	$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'project'; 

$link = mysql_connect($db_host,$db_user,$db_pass)or die('Unable to establish a DB connection');
mysql_select_db($db_database,$link);
$result = mysql_query("SELECT UserId,UserName,Password FROM loginuser WHERE UserName='" .$_POST["userName"]. "' and Password = '".$_POST["password"]."'");
$row  = mysql_fetch_array($result);
if(is_array($row)) 
{
$_SESSION["userid"] = $row[UserId];
$_SESSION["username"] = $row[UserName];
$_SESSION["password"] = $row[Password];
} 
else 
{
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["username"])) 
{
header("Location:user_dashboard.php");
}
?>