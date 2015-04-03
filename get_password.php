<?php
if(isset($_POST['recover']))
{
include "connect.php";
$user=md5($_POST['recovery']);
$que="SELECT * FROM design_register WHERE `u_uname`='$user'";
$design_validation=mysql_query($que,$db);
$res=array();
while($des=mysql_fetch_row($design_validation)){$res=$des;}
if(empty($res))
header("location:choose_design.php?u_uname=$user");
else{
$query="SELECT d.u_design_id FROM register r,design_register d WHERE r.`u_name`=d.`u_uname` and `u_name`='$user' and `u_pwd`='$pwd'";
$re=mysql_query($query,$db);
while($rows=mysql_fetch_row($re))
{
$expire=time()+60*60*24*30;
setcookie("logged_user", $user, $expire); 
header("location:book1.php?bid=$rows[0]");
}
if(empty($rows))
$error="Please enter valid details";
}
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Online Dairy..!</title>

    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="vendor/css/bootstrapValidator.css"/>
    </head>
<body background="images/wood.jpg">
<!-- Header content goes here-->
<div class="header">

</div>
<!-- End of the Header-->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="page-header">
                    <h2>Forgot Details Help!</h2>
                </div>

                <form id="defaultForm" class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                    <div class="panel-group" id="steps">
                        <!-- Step 1 -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#steps" href="#stepOne">Choose Recovery Option
				
<?php if(isset($error))echo $error; ?>
</a></h4>
                            </div>
                            <div id="stepOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Username</label>
                                        <div class="col-lg-5">
                                            <!--<input type="text" class="form-control" name="username" required/>-->
                                            <input type="radio" class="form-control" name="recovery" onclick="return show_username('Username')"/>
                                        </div>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Password</label>
                                        <div class="col-lg-5">
                                            <input type="radio" class="form-control" name="recovery" onclick="return show_password('Password')",'password' />
                                        </div>
                                    </div>
                                    <span id="show_opt">&nbsp;</span>

									<div class="form-group">
                                        <div class="col-lg-9 col-lg-offset-3">
                                            <input type="submit" class="btn btn-primary" name="recover" value="Recovery">
											&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="register.php" target="_self"><button type="button" class="btn btn-primary">Register</button></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											                                        
</div>
                                    </div>
                                </div>
                            </div>

                        </div>
<script type="text/javascript">
	function show_username(e){
var option1="<div class=form-group><label class=col-lg-3 control-label id=label>";
var option2="</label><div class=col-lg-5><input type=text class=form-control name=recovery id=option required/></div></div>";
document.getElementById('show_opt').innerHTML=option1+"Please Enter "+e+option2;
return true;
	}
	function show_password(e){
var option1="<div class=form-group><label class=col-lg-3 control-label id=label>";
var option2="</label><div class=col-lg-5><input type=password class=form-control name=recovery id=option required/></div></div>";
document.getElementById('show_opt').innerHTML=option1+"Please Enter "+e+option2;
return true;
	}
</script>
              


</body>
</html>
