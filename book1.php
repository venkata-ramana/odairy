
<?php
$id=$_GET['bid'];
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>3D Book Showcase</title>
		<meta name="description" content="3D Book Showcase with CSS 3D Transforms" />
		<meta name="keywords" content="3d transforms, css3 3d, book, jquery, open book, css transitions" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/abc.css" />
		<link rel="stylesheet" type="text/css" href="css/def.css" />
		<link rel="stylesheet" type="text/css" href="css/forestyle.css" />
		<script src="js/modernizr.custom.js"></script>
<script>
var obj;
function createObj(a)
{
if(window.ActiveXObject)
{
obj=new ActiveXObject("Microsoft.XMLHTTP");
}
else
{
obj=new XMLHttpRequest();
}
obj.open("GET","calender_note.php?cid="+a,true)
obj.send();
obj.onreadystatechange=update;
}
function update()
{
if(obj.readyState==4)
{
document.getElementById("ajaxreq").innerHTML=obj.responseText;
}
}
</script>
<?php $date=date('Y-m-d');
$time=date('h:i:s');
$timestamp=$date." ".$time; ?>
	</head>
	<body onload="createObj('<?=$timestamp?>')">
		<div class="container">	
			<!-- Codrops top bar -->
			<!--/ Codrops top bar -->
			<header class="clearfix">
				
				<nav class="codrops-demos">
				
				</nav>
			
			</header>
			<!--code for book1-->
			<div class="main">
				
				<ul id="bk-list" class="bk-list clearfix">
					<li>
						<div class="bk-book book-<?=$id?> bk-bookdefault">
							<div class="bk-front">
								<div class="bk-cover">
									<h2>
										<span>Dairy</span>
										<span><?php
										$a=date('y');
										echo"20"."$a";
										?></span>
									</h2>
<img  style="margin:50px 0 0 500px;padding:50px;border:1px dashed #fff;border-radius:15px;height:200px;width:300px;" src="images/3.png" >
								</div>
								<div class="bk-cover-back"></div>
							</div>
							
							<div class="bk-page">
							
								<div class="bk-content">
									<p style="text-align:right">Click Next(>) to write today's dairy.</p>
<div class="cal"><div class="left">
<!--<iframe name="left" src="calender.php"  id="left-cal"></iframe>-->
<div id='tab'>
<div class=table_title>Calander</div><center>
<input type="button" value="Get Today Notes.." onclick="createObj('<?=$timestamp?>')"/></center>
</div>


</div>
<div class="right">
<!--<iframe name="right" src="calender_note.php" id="right-cal"></iframe>-->
<span id="ajaxreq">&nbsp;</span>
</div></div>
									
								<button id="back" class="back">Back</button>
								<iframe src="view_note.php" name="view" id="viewnote" class="frames"></iframe>
								</div>

								<div class="bk-content bk-content-current">
									<iframe src="dairy.php" class="frames"></iframe>
								</div>
								
								
								
							</div>
							<div class="bk-back">
								<p>Welcome to Online Dairy...</p>
							</div>


							<div class="bk-right"></div>
							<div class="bk-left">
								<h2>
									<span>Author</span>
									<span>Venkata Ramana</span>
								</h2>
							</div>
							<div class="bk-top"></div>
							<div class="bk-bottom"></div>
						</div>
						<div class="bk-info"></br>
							<a href="logout.php"><button >Log Out</button></a>
							<button class="bk-bookback">Flip</button>
							<button class="bk-bookview">View inside</button>
							
							
						</div>
					</li>
				</ul>
			</div>
		</div><!-- /container -->
		<script src="jquery.min.js"></script>
		<script>

		$(document).ready(function () {
$('#ajaxreq').click(function(){
$("a").click(function(){
$('.left').hide();
$('.right').hide();
$('#back').show();
$('#viewnote').show();
});
});
$('#back').click(function (){
		$('#viewnote').hide();
		$('#back').hide();
		$('.left').show();
		$('.right').show();
});
$('#back').hide();
$('#viewnote').hide();

		});
		</script>
		<script src="js/books1.js"></script>
		<script>
			$(function() {

				Books.init();

			});
		</script>
	</body>
</html>
