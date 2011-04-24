<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>School of Information - University of Texas at Austin</title>
	<link href="css/styles.css" rel="stylesheet" type="text/css" />
	<link href="css/grid.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/searchbox.css" />
	<!-- <script type="text/javascript" src="js/live.js"></script> -->
	<script type="text/javascript" src="js/parseuri.js"></script>
	<script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>	
	<script type="text/javascript" src="js/galleria-1.2.2.min.js"></script>
	<script type="text/javascript" src="js/themes/classic/galleria.classic.min.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/jquery.lettering.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/effects.js"></script>
	<!--[if lt IE 8]>
	<script src="http://ie7-js.googlecode.com/svn/version/2.0(beta3)/IE8.js" type="text/javascript"></script>
	<![endif]-->
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>

		   
  <div class="container_12" id="container">
	 <!-- begin #header -->
     <div id="header" class="grid_12">
        
        <div id="icons" class="">
					<ul>
						<li>
							<a href="http://blogs.ischool.utexas.edu/ischoolyou/"><img src="images/social_icons/podcast.png" alt="podcast icon" /></a>
						</li>
						<li>
							<a href="http://www.ischool.utexas.edu/iSchoolNewsfeed.xml"><img src="images/social_icons/rss.png" alt="rss icon" /></a>
						</li>
						<li>
							<a href="http://www.linkedin.com/groups?mostPopular=&gid=3047563"><img src="images/social_icons/linkedin.png" alt="linked in icon" /></a>
						</li>
						<li>
							<a href="http://twitter.com/UTiSchool"><img src="images/social_icons/twitter.png" alt="twitter icon" /></a>
						</li>
						<li>
							<a href="http://www.facebook.com/pages/UT-iSchool/81784648743"><img src="images/social_icons/facebook.png" alt="facebook icon" /></a>
						</li>
					</ul>
        </div> <!-- end of icons -->
        
        <div id="logo" class="grid_3 alpha">
           <a href="index.php?subsite=home"><img src="images/logo.jpg" alt="ischool logo"></a>
        </div>
     
    
     
        
     <div id="topnav" class="grid_9 omega">
     
     
    
     
     <!-- 	<div class="slogan grid_6 alpha">Preserve the Past. Manage the Present. Design the Future.</div> -->

     
   <div id="search-container">
    	<div id="wrap-search">
    				<div id="search">
    					<form class="form-search close" name="topsearch">
    						<div id="icn-search"><div id="icn1"></div></div>
    						<div id="icn-close"><div id="icn2"></div></div>
    						<input type="text" name="search"  value="Search" />	
    					</form>
    			</div>
    	</div>
   </div> 
     
	 		<ul id="nav">
				<li><a href="index.php?subsite=prospective_students" 
					<?php if(parse_subsite() == "prospective_students"):?>
						class="current"
					<?php endif; ?>>Prospective Students</a>
				</li>
				<li><a href="index.php?subsite=current_students"
					<?php if(parse_subsite() == "current_students"):?>
						class="current"
					<?php endif; ?>>Current Students</a>
				</li>
				<li><a href="index.php?subsite=facultynstaff"
				<?php if(parse_subsite() == "facultynstaff"):?>
						class="current"
				<?php endif; ?>>Faculty & Staff</a>
				</li>
				<li><a href="index.php?subsite=alumni"
				<?php if(parse_subsite() == "alumni"):?>
						class="current"
				<?php endif; ?>>Alumni</a>
				</li>
	 		</ul>
        
        
    
    </div>
   </div><!-- end #header-->
	 
<?php

	require_once("sidebar.php");

?>
