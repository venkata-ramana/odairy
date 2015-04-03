<?php
if(isset($_GET['uid']))
{
$u_id=$_GET['uid'];
$b_id=$_GET['bid'];
$u_name=$_GET['u_uname'];
include"connect.php";
$query="insert into design_register(`u_uid`,`u_uname`,`u_design_id`) values('$u_id','$u_name','$b_id')";
$re=mysql_query($query,$db);
if($re)
{
header("location:index.php?uname=$u_name&bid=$b_id");
}
else
{
?><script>alert("Sorry! you can't change your design here..");</script><h2 align="center" style="font-family: comic sans ms;font-size:comic sans ms;color:#339900">Redirecting.....</h2>
<meta http-equiv="refresh" content="1;URL=index.php"/><?php
}
}
?>
