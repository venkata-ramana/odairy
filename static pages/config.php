<?php
//for checking user authonitication and managing coockies
/*
session_start();

if(isset($_COOKIE["logged_user"]))
{
$uname=$_COOKIE["logged_user"];
include"connect.php";
$query1="select * from design_register where u_uname='$uname'";
$re1=mysql_query($query1,$db);
while($rows=mysql_fetch_row($re1))
{
$bid=$rows[2];
}
header("location:book1.php?bid=$bid");
}

else
{
header("location:index.php");
}
*/
session_start();
echo $_COOKIE["logged_user"];
?>
