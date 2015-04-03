<?php
if(isset($_POST['signin']))
{
include"connect.php";
$uname=md5($_POST['username']);
$pwd=md5($_POST['password']);
$query1="select * from design_register where u_uname='$uname'";
$re1=mysql_query($query1,$db);
if($re1==null)
header("location:choose_design.php?u_uname=$uname");
while($rows=mysql_fetch_row($re1))
{
$bid=$rows[2];
}
echo $bid;
$query="select * from register where u_uname='$uname' and u_pwd='$pwd'";
$re=mysql_query($query,$db);
if($re==null)
header("location:index.php?error=Please enter valid User Name and Password");
while($row=mysql_fetch_row($re))
{
$expire=time()+60*60*24*30;
setcookie("logged_user", $uname, $expire); 
header("location:book1.php?bid=$bid");
}
}

else if(isset($_GET['uname']))
{
echo "hai";
include"connect.php";
$uname=$_GET['uname'];
$bid=$_GET['bid'];
$expire=time()+60*60*24*30;
setcookie("logged_user", $uname, $expire); 
header("location:book1.php?bid=$bid");
}
?>
 
