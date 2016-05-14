<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Quiz List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<style >
body {
 //background-image:url('image/openbook.png');
 background-color:lightgray;					  
 background-repeat:repeat;
 background-position:bottom;
 
 }
</style>



<body>

<?php
include("header.php");
include("database.php");
echo "<h2 class=head1 style='background-color:gray'> SELECT SUBJECT TO GIVE QUIZ </h2>";
$rs=mysql_query("select * from mst_subject");
echo "<table align=center style='text-align:center;'>";
while($row=mysql_fetch_row($rs))
{
	echo "<tr><td class=myButton align=center><a href=showtest.php?subid=$row[0]><font size=4>$row[1]</font></a>";
	
}
echo "</table>";
?>
</body>
</html>
