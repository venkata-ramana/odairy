<?php
if(isset($_POST['signin']))
{
include "connect.php";
$user=md5($_POST['username']);
$pwd=md5($_POST['password']);
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
/*
else if(isset($_COOKIE["logged_user"]))
{
$uname=$_COOCKIE['logged_user'];
include"connect.php";
$query1="select * from design_register where u_uname='$uname'";
$re1=mysql_query($query1,$db);
while($rows=mysql_fetch_row($re1))
{
$bid=$rows[2];
$expire=time()+60*60*24*30;
setcookie("logged_user", $uname, $expire); 
header("location:book1.php?bid=$bid");
}
}*/

else if(isset($_GET['uname']))
{
$uname=$_GET['uname'];
include"connect.php";
$query1="select * from design_register where u_uname='$uname'";
$re1=mysql_query($query1,$db);
while($rows=mysql_fetch_row($re1))
{
$bid=$rows[2];
$expire=time()+60*60*24*30;
setcookie("logged_user", $uname, $expire); 
header("location:book1.php?bid=$bid");
}
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Online Dairy..!</title>

    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="vendor/css/bootstrapValidator.css"/>
    <script type="text/javascript" src="vendor/jquery/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="vendor/js/bootstrapValidator.js"></script>
<style>
.header
{
left:0px;
top:0px;
margin:0px;
width:100%;
height:60px;
background:rgba(0,0,0,0.1);
box-shadow:0 0 10px 1px black;
}
.header .caption{color:#fff;margin:0px;text-align:center;padding:10px;}
.footer
{
margin:0px;
width:100%;
height:200px;
background:rgba(0,0,0,0.3);
box-shadow:0 0 10px 1px black;
}
.footer .caption{color:#fff;margin:0px;text-align:center;padding:10px;}
</style>
</head>
<body background="images/wood.jpg">
<!-- Header content goes here-->
<div class="header">
<h1 class="caption">Online Dairy</h1>
</div>
<!-- End of the Header-->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="page-header">
                    <h2>Log in</h2>
                </div>

                <form id="defaultForm" class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                    <div class="panel-group" id="steps">
                        <!-- Step 1 -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#steps" href="#stepOne">Account
				
<?php if(isset($error))echo $error; ?>
</a></h4>
                            </div>
                            <div id="stepOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Username</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="form-control" name="username" required/>
                                        </div>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Password</label>
                                        <div class="col-lg-5">
                                            <input type="password" class="form-control" name="password" required/>
                                        </div>
                                    </div>

									<div class="form-group">
                                        <div class="col-lg-9 col-lg-offset-3">
                                            <input type="submit" class="btn btn-primary" name="signin" value="Login">
											&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="register.php" target="_self"><button type="button" class="btn btn-primary">Register</button></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="get_password.php">Forgot Password...?</a>
</br><span id="show_error">&nbsp;</span>                                        
</div>
                                    </div>
                                </div>
                            </div>

                        </div>

              

<script type="text/javascript">
$(document).ready(function() {
    $('#defaultForm').bootstrapValidator({
        message: 'This value is not valid',
        excluded: ':disabled',
       
        fields: {
           
           username: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required and cannot be empty'
                    },
                    stringLength: {
                        min: 4,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    },
                    different: {
                        field: 'password',
                        message: 'The username and password cannot be the same as each other'
                    }
                }
            },
           
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and cannot be empty'
                    },
						 stringLength: {
                        min: 8,
                        max: 10,
                        message: 'The password must be more than 6 and less than 10 characters long'
                    },
                    different: {
                        field: 'username',
                        message: 'The password cannot be the same as username'
                    }
                }
            },
           
        }
    }).on('error.form.bv', function(e) {
        console.log('error');

        // Active the panel element containing the first invalid element
        var $form         = $(e.target),
            validator     = $form.data('bootstrapValidator'),
            $invalidField = validator.getInvalidFields().eq(0),
            $collapse     = $invalidField.parents('.collapse');

        $collapse.collapse('show');
    });
});
</script>

</body>
<!-- Footer code goes here -->
<!-- 
<div class="footer">
<h1 class="caption">Online Dairy</h1>
</div>
<!-- End of the Footer-->
</html>
