<?php
session_start();
error_reporting(1);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Adminstrative AreaOnline Quiz </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<style>
body{
background-color:lightgray; }
</style>

<?php
include("header.php");
extract($_POST);
if(isset($submit))
{
	include("../database.php");
	$loginid=mysql_real_escape_string($_POST['loginid']);  
	$pass=mysql_real_escape_string($_POST['pass']);
	$rs=mysql_query("select * from mst_admin where loginid='$loginid' and pass='$pass'",$cn) or die(mysql_error());
	if(mysql_num_rows($rs)<1)
	{
		echo "<BR><BR><BR><BR><div class=head1> Invalid User Name or Password<div>";
		exit;
		
	}
	$_SESSION['alogin']="true";
	
}
else if(!isset($_SESSION[alogin]))
{
	echo "<BR><BR><BR><BR><div class=head1> Your are not logged in<br> Please <a href=index.php>Login</a><div>";
		exit;
}
?>

<p class="head1">WELCOME TO ADMINISTRATIVE AREA </p>
<div style="margin:auto;width:90%;height:500px;box-shadow:4px 2px 4px px #CCCCCC;text-align:left">
<div style="margin-left:25%;padding-top:5%">
<p class="myButton"><a href="subadd.php">&nbsp&nbsp&nbsp&nbspAdd Subject</a></p>
<p class="myButton"><a href="testadd.php">&nbsp&nbsp&nbsp&nbspAdd Test</a></p>
<p class="myButton"><a href="questionadd.php">&nbsp&nbsp&nbsp&nbspAdd Question </a>
<p align="center" class="head1">&nbsp;</p>
</div>
</div>
</body>
</html>
