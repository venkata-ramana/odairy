<?php
if(isset($_POST['signup']))
{
$user=$_POST['username'];
$uname=md5($user);
$email=$_POST['email'];
$pwd=md5($_POST['password']);
$fname=$_POST['firstName'];
$lname=$_POST['lastName'];
$gen=$_POST['gender'];
$bday=$_POST['birthday'];
$bio=$_POST['bio'];
$pno=$_POST['phoneNumber'];
$street=$_POST['street'];
$city=$_POST['city'];
include"connect.php";
$query="INSERT INTO `register`(`u_name`, `u_pwd`, `u_fname`, `u_lname`, `u_gen`, `u_birth`, `u_bio`, `u_pno`, `u_street`, `u_city`, `u_email`) VALUES ('$uname','$pwd','$fname','$lname','$gen','$bday','$bio','$pno','$street','$city','$email')";
$re=mysql_query($query,$db);
if($re)
{
$expire=time()+60*60*24*30;
setcookie("logged_user", $uname, $expire); 
header("location:choose_design.php?u_uname=$user");
}
else
{
?><script>alert("Please check the details that you have entered..!");</script><?php
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
<script>
var obj;
function CreateObj(a)
{
if(a==null || a.length<5)
return;
if(window.ActiveXObject)
{
obj=new ActiveXObject("Microsoft.XMLHTTP");
}
else
{
obj=new XMLHttpRequest();
}
obj.open("GET","check_user_availability.php?uname="+a,true)
obj.send();
obj.onreadystatechange=update;
}
function update()
{
if(obj.readyState==4)
{
document.getElementById("availability").innerHTML=obj.responseText;
}
}
</script>
</head>
<body background="images/wood.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="page-header">
                    <h2>Register with your details</h2>
		<a href="index.php" target="_self"><button type="button" class="btn btn-primary">Back to Login</button></a>
                </div>

                <form id="defaultForm" method="post" class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="panel-group" id="steps">
                        <!-- Step 1 -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#steps" href="#stepOne">Account</a></h4>
                            </div>
                            <div id="stepOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Username</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="form-control" name="username" onkeyup="CreateObj(this.value)"/>
                                        </div>*<span id="availability" style="display:inline-block">&nbsp;</span>					
                                    </div>


                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Password</label>
                                        <div class="col-lg-5">
                                            <input type="password" class="form-control" name="password" />
                                        </div>*
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Email address</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="form-control" name="email" />
                                        </div>*
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#steps" href="#stepTwo">Personal</a></h4>
                            </div>
                            <div id="stepTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Full name</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="firstName" placeholder="First name" />
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="lastName" placeholder="Last name" />
                                        </div>*
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Gender</label>
                                        <div class="col-lg-5">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" value="male" /> Male
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" value="female" /> Female
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" value="other" /> Other
                                                </label>
                                            </div>*
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Birthday</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="form-control" name="birthday" placeholder="YYYY/MM/DD" />
                                        </div>*
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Bio</label>
                                        <div class="col-lg-5">
                                            <textarea class="form-control" name="bio" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#steps" href="#stepThree">Contact</a></h4>
                            </div>
                            <div id="stepThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Phone number</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="form-control" name="phoneNumber" />
                                        </div>*
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Street</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="form-control" name="street" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">City</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="form-control" name="city" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-9 col-lg-offset-3">
                                            <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Sign up</button>
					     <button type="reset" class="btn btn-primary" name="reset"> Reset </button>
					<button type="button" class="btn btn-primary" name="regwithdb"> Register with Facebook </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<script type="text/javascript">
$(document).ready(function() {
    $('#defaultForm').bootstrapValidator({
        message: 'This value is not valid',
        excluded: ':disabled',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            firstName: {
                validators: {
                    notEmpty: {
                        message: 'The first name is required and cannot be empty'
                    },
                    
                    regexp: {
                        regexp: /^[A-Z\s]+$/i,
                        message: 'The first name can only consist of alphabetical characters and spaces'
                    }
                }
            },
            lastName: {
                validators: {
                    notEmpty: {
                        message: 'The last name is required and cannot be empty'
                    },
                    
                    regexp: {
                        regexp: /^[A-Z\s]+$/i,
                        message: 'The last name can only consist of alphabetical characters and spaces'
                    }
                }
            },
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
            email: {
                validators: {
		notEmpty: {
                        message: 'The email is required and cannot be empty'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
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
                        message: 'The password must be morethan 7 less than 10 characters long'
                    },
                    different: {
                        field: 'username',
                        message: 'The password cannot be the same as username'
                    }
                }
            },
            gender: {
                validators: {
		notEmpty: {
                        message: 'The gender is required and cannot be empty'
                    },
                    notEmpty: {
                        message: 'The gender is required'
                    }
                }
            },
            birthday: {
                validators: {
		notEmpty: {
                        message: 'The birthday is required and cannot be empty'
                    },
                    date: {
                        format: 'YYYY/MM/DD',
                        message: 'The birthday is not valid'
                    }
                }
            },
            phoneNumber: {
                validators: {
	notEmpty: {
                        message: 'The phone number is required and cannot be empty'
                    },
                    digits: {
                        message: 'The value can contain only digits'
                    }
                }
            }
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
</html>
