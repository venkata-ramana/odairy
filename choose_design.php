
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
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">	
			<!-- Codrops top bar -->
			<!--/ Codrops top bar -->
			<header class="clearfix">
				<h2>Successfully Registed...&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2><h1>Welcome <?php
				if(isset($_GET['u_uname']))
				{
				$user=$_GET['u_uname'];
				echo $user;
				$user=md5($user);				
				}
				else
				{header("location:register.php");}
				include"connect.php";
				$query="select * from register where `u_name`='$user'";
				$re=mysql_query($query,$db);
				while($row=mysql_fetch_array($re))
				{
				$uid=$row[0];
				}
				?>
				</h1>
				<nav class="codrops-demos">
				
				</nav>
				<span class="support-note">Choose a Design by click on select button beside design..</span>
			</header>


			<!--code for book1-->
			<div class="main">
				
				<ul id="bk-list" class="bk-list clearfix">
					<li>
						<div class="bk-book book-1 bk-bookdefault">
							<div class="bk-front">
								<div class="bk-cover">
									<h2>
										<span>Dairy</span>
										<span><?php
										$a=date('y');
										echo"20"."$a";
										?></span>
									</h2>
								</div>
								<div class="bk-cover-back"></div>
							</div>
							
							<div class="bk-page">
								<div class="bk-content bk-content-current">
									<p>In this dairy you can write day by day notes of how is the day.</p>
								</div>
								<div class="bk-content">
									<p></p>
								</div>
								<div class="bk-content">
									<p>Trahira giant wels cutlassfish snapper koi blackchin mummichog mustard eel rock bass whiff murray cod. Bigmouth buffalo ling cod giant wels, sauger pink salmon. Clingfish luderick treefish flatfish Cherubfish oldwife Indian mul gizzard shad hagfish zebra danio. Butterfly ray lizardfish ponyfish muskellunge Long-finned sand diver mullet swordfish limia ghost carp filefish.</p>
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
							<button class="bk-bookback">Flip</button>
							<button class="bk-bookview">View inside</button>
							<button class=""><a href="reg_complete.php?bid=1&uid=<?=$uid?>&u_uname=<?=$user?>">Select</a></button>
							
						</div>
					</li>



<!--code for second book-->

					<li>
						<div class="bk-book book-2 bk-bookdefault">
							<div class="bk-front">
								<div class="bk-cover">
									<h2>
										<span></br>Dairy</span>
										<span><?php
										$a=date('y');
										echo"20"."$a";
										?></span>
									</h2>
								</div>
								<div class="bk-cover-back"></div>
							</div>
							<div class="bk-page">
								<div class="bk-content">
									<p>Whale catfish leatherjacket deep sea anglerfish grenadier sawfish pompano dolphinfish carp large-eye bream, squeaker amago. Sandroller; rough scad, tiger shovelnose catfish snubnose parasitic eel? Black bass soldierfish duckbill--Rattail Atlantic saury Blind shark California halibut; false trevally warty angler!</p>
								</div>
								<div class="bk-content">
									<p>Trahira giant wels cutlassfish snapper koi blackchin mummichog mustard eel rock bass whiff murray cod. Bigmouth buffalo ling cod giant wels, sauger pink salmon. Clingfish luderick treefish flatfish Cherubfish oldwife Indian mul gizzard shad hagfish zebra danio. Butterfly ray lizardfish ponyfish muskellunge Long-finned sand diver mullet swordfish limia ghost carp filefish.</p>
								</div>
								<div class="bk-content bk-content-current">
									<p>Red snapper Kafue pike fangtooth humums's slipmouth, salmon cutlassfish; swallower European perch mola mola sunfish, threadfin bream. Billfish hog sucker trout-perch lenok orbicular velvetfish. Delta smelt striped bass, medusafish dragon goby starry flounder cuchia round whitefish northern anchovy spadefish merluccid hake cat shark Black pickerel. Pacific cod.</p>
								</div>
							</div>
							<div class="bk-back">
								<p>Tyrant, blackmailer, racketeer, murderer - his influence reaches every level of American society. Meet Cat Corleone, a friendly cat, a just cat, a reasonable cat. The deadliest lord of the Cata Nostra. The Catfather.</p>
							</div>
							<div class="bk-right"></div>
							<div class="bk-left">
								<h2>
									<span>The Catfather</span>
									<span>by Mario Purrzo</span>
								</h2>
							</div>
							<div class="bk-top"></div>
							<div class="bk-bottom"></div>
						</div>
						<div class="bk-info">
							<button class="bk-bookback">Flip</button>
							<button class="bk-bookview">View inside</button>
							<button class=""><a href="reg_complete.php?bid=2&uid=<?=$uid?>&u_uname=<?=$user?>">Select</a></button></button>
							
						</div>
					</li>
					<li>
						<div class="bk-book book-3 bk-bookdefault">
							<div class="bk-front">
								<div class="bk-cover">
									<h2>
										<span>Dairy</span>
										<span><?php
										$a=date('y');
										echo"20"."$a";
										?></span>
									</h2>
								</div>
								<div class="bk-cover-back"></div>
							</div>
							<div class="bk-page">
								<div class="bk-content bk-content-current">
									<p>Oceanic flyingfish spotted danio fingerfish leaffish, Billfish halibut Atlantic cod threadsail poacher slender mola. Swallower muskellunge, turbot needlefish yellow perch trout dhufish dwarf gourami false moray southern smelt cod dwarf gourami. Betta blue catfish bottlenose electric ray sablefish.</p>
								</div>
								<div class="bk-content">
									<p>Whale catfish leatherjacket deep sea anglerfish grenadier sawfish pompano dolphinfish carp large-eye bream, squeaker amago. Sandroller; rough scad, tiger shovelnose catfish snubnose parasitic eel? Black bass soldierfish duckbill--Rattail Atlantic saury Blind shark California halibut; false trevally warty angler!</p>
								</div>
								<div class="bk-content">
									<p>Trahira giant wels cutlassfish snapper koi blackchin mummichog mustard eel rock bass whiff murray cod. Bigmouth buffalo ling cod giant wels, sauger pink salmon. Clingfish luderick treefish flatfish Cherubfish oldwife Indian mul gizzard shad hagfish zebra danio. Butterfly ray lizardfish ponyfish muskellunge Long-finned sand diver mullet swordfish limia ghost carp filefish.</p>
								</div>
							</div>
							<div class="bk-back">
								<img src="images/3.png" alt="cat"/>
								<p>Holden Catfield is a seventeen-year-old dropout who has just been kicked out of his fourth school. Navigating his way through the challenges of growing up, Holden dissects the 'phony' aspects of society.</p>
							</div>
							<div class="bk-right"></div>
							<div class="bk-left">
								<h2>
									<span>J.C. Salinger</span>
									<span>The Catcher in the Rye</span>
								</h2>
							</div>
							<div class="bk-top"></div>
							<div class="bk-bottom"></div>
						</div>
						<div class="bk-info">
							<button class="bk-bookback">Flip</button>
							<button class="bk-bookview">View inside</button>
							<button class=""><a href="reg_complete.php?bid=3&uid=<?=$uid?>&u_uname=<?=$user?>">Select</a></button></button>
							
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
