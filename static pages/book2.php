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
		<script src="js/modernizr.custom.js"></script>
	<style>
	iframe
	{
	border:0px;
	}
a{color:#fff;}
	table
	{
	margin-left:80px;
	border:1px solid gray;
	border-radius:5px;
	}
	td
	{
	border-bottom:1px solid gray;
	border-right:1px solid gray;
	padding-left:5px;
	}
	</style>
	</head>
	<body>
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
						<div class="bk-book book-2 bk-bookdefault">
							<div class="bk-front">
								<div class="bk-cover">
									<h2>
										<span></br>&nbsp;&nbsp;
&nbsp;&nbsp;
										Dairy</span>
										<span></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
										$a=date('y');
										echo"20"."$a";
										?></span>
									</h2>
								</div>
								<div class="bk-cover-back"></div>
							</div>
							
							<div class="bk-page">
							
								<div class="bk-content">
									<!--<p>Trahira giant wels cutlassfish snapper koi blackchin mummichog mustard eel rock bass whiff murray cod. Bigmouth buffalo ling cod giant wels, sauger pink salmon. Clingfish luderick treefish flatfish Cherubfish oldwife Indian mul gizzard shad hagfish zebra danio. Butterfly ray lizardfish ponyfish muskellunge Long-finned sand diver mullet swordfish limia ghost carp filefish.</p>-->
									<?php
									include"connect.php";
									$query="select * from insert_note order by note_date DESC";
									$re=mysql_query($query,$db);
									print"<table border=0>";
									print"<tr bgcolor=gray style='color:#fff;'><td align=center width=300px><b>Title</b></td> <td align=center  width=100px> <b>----</b> </td><td align=center width=300px><b>Date</b></td></tr>";
									while($row=mysql_fetch_row($re))
									{
									print"<tr><td width=300px>$row[2]</td> <td width=100px> on </td><td width=300px>$row[3]</td></tr>";
									}
									print"</table>";
									?>
								</div>

								<div class="bk-content bk-content-current">
									<!--<p>Red snapper Kafue pike fangtooth humums slipmouth, salmon cutlassfish; swallower European perch mola mola sunfish, threadfin bream. Billfish hog sucker trout-perch lenok orbicular velvetfish. Delta smelt striped bass, medusafish dragon goby starry flounder cuchia round whitefish northern anchovy spadefish merluccid hake cat shark Black pickerel. Pacific cod.</p>-->
									<iframe src="dairy.php" width="900" height="500"></iframe>
								</div>
								
								
							</div>
							<div class="bk-back">
								<p>In this nightmare vision of cats in revolt, fifteen-year-old Alex and his friends set out on a diabolical orgy of robbery, rape, torture and murder. Alex is jailed for his teenage delinquency and the State tries to reform him - but at what cost?</p>
							</div>


							<div class="bk-right"></div>
							<div class="bk-left">
								<h2>
									<span>Anthony Burghiss</span>
									<span>A Catwork Orange</span>
								</h2>
							</div>
							<div class="bk-top"></div>
							<div class="bk-bottom"></div>
						</div>
						<div class="bk-info">
							<button><a href="index.php">Choose Another</a></button>
							<button class="bk-bookback">Flip</button>
							<button class="bk-bookview">View inside</button>

							
						</div>
					</li>
				</ul>
			</div>
		</div><!-- /container -->
		<script src="jquery.min.js"></script>
		<script src="js/books1.js"></script>
		<script>
			$(function() {

				Books.init();

			});
		</script>
	</body>
</html>
