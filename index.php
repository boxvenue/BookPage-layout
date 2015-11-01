<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>AeonLabs®</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> 
        <meta name="description" content="Where ideas turn to reality" />
        <meta name="keywords" content="flip, pages, flipboard, layout, responsive, web, web design, grid, ipad, jquery, css3, 3d, perspective, transitions, transform" />
        <meta name="author" content="" />
        <link rel="shortcut icon" href="favicon.ico"> 

        <link rel="stylesheet" type="text/css" href="runtime/styles/mainpage.css" />
        <link rel="stylesheet" type="text/css" href="runtime/styles/pageheader.css" />
		<link rel="stylesheet" type="text/css" href="runtime/styles/fonts.css"  />
		<link rel="stylesheet" type="text/css" href="runtime/styles/font-awesome.min.css" >
        <link rel="stylesheet" type="text/css" href="runtime/styles/style.css" />
		<script type="text/javascript" src="runtime/browserdom/yepnope.js"></script>        
		<script type="text/javascript" src="runtime/browserdom/modernizr.custom.js"></script>
		<script type="text/javascript" src="runtime/browserdom/ajx-ini.js"></script>
		<script type="text/javascript" src="runtime/browserdom/elements.js"></script>
		
		<script id="pageTmpl" type="text/x-jquery-tmpl">
			<div class="${theClass}" style="${theStyle}">
				<div class="front">
					<div class="outer">
						<div class="content" style="${theContentStyleFront}">
							<div class="inner">{{html theContentFront}}</div>
						</div>
					</div>
				</div>
				<div class="back">
					<div class="outer">
						<div class="content" style="${theContentStyleBack}">
							<div class="inner">{{html theContentBack}}</div>
						</div>
					</div>
				</div>
			</div>			
		</script>
    </head>
    <body>
		<header class="main-title">
			<h1><img src="contents/images/logo.png" height="50" alt="" /></h1>
			<p>Swipe or drag to flip the pages, click to open items </p>
			<div id="mainpage-footer">
				<div class="mainpage-block">
				  <h3>Overview</h3>
				  <p>Access daily to our research magazine where is published the latest results digested for consumer advice. Download AeonLabs OSS web libraries for free. Help us grow FairWork on your daily life.</p>
				  <ul>
				    <li><a href="#">Daily consumer advice</a></li>
				    <li><a href="#">Scientific Papers on the ROS network</a></li>
				    <li><a href="#">Business and Entrepreneur Consulting</a></li>
				    <li><a href="#">Enrol your children in our school</a></li>
				  </ul>
				</div>
				<div class="mainpage-block">
				  <h3>Get in touch</h3>
				  <p>You can contact us directly or instead phone us.</p>
				  <p> <span>Address:</span> 667 Joao Paulo II, Portugal<br />
				    <span>Phones:</span> +351 - 938 942 678<br />
				    <span>&nbsp;</span> +1-501 600 0914<br />
				    <span>Preferential</span>
				    <br/>
				    <span>E-mail:</span> <a href="mailto:info@aeonlabs.de">info@aeonlabs.de</a><br/>
				    <span>Facebook</span> <a href="htp://www.facebook.com/mtpsilva">Messenger</a><br/>
				    <span>Twitter:</span> <a href="https://twitter.com/MiguelTomasFX">MiguelTomasFX</a> </p>
				</div>
			
			</div>
		</header>
		
		<div id="flip" class="container">
		
			<div id="cover" class="f-page f-cover">
				<div class="cover-elements">
					<div class="logo">
					</div>
					<h1 style="color: black;">Build your own ideas: How to 3D print on a budget</h1>
					<div class="f-cover-story"><span>Main Story</span>Como poupar na internet fixa até €70 por mês</div>
				</div>
				<div class="f-cover-flip">&lt; Flip</div>
			</div>
		
			<?php
			include('contents/bookpages/loader.php');
			?>
			<div class="f-page f-cover-back">
				<div id="codrops-ad-wrapper">
					
				</div>
			</div>
		</div>
		
		<script type="text/javascript" src="runtime/browserdom/jquery-1.11.3.js"></script>
		<script type="text/javascript">
				
			var $container 	= $( '#flip' ),
				$pages		= $container.children().hide();
			
			
			
			
			Modernizr.load({
				test: Modernizr.csstransforms3d && Modernizr.csstransitions,
				yep : ['runtime/browserdom/jquery.tmpl.min.js','runtime/browserdom/jquery.history.js','runtime/browserdom/core.string.js','runtime/browserdom/jquery.touchSwipe-1.2.5.js','runtime/browserdom/jquery.flips.js'],
				nope: 'runtime/styles/fallback.css',
				callback : function( url, result, key ) {
					
					if( url === 'runtime/styles/fallback.css' ) {
						$pages.show();
					}
					else if( url === 'runtime/browserdom/jquery.flips.js' ) {
						$container.flips();
					}
			
				}
			});
				
		</script>
<?php
date_default_timezone_set('PST8PDT');
if(is_file('version.php')):
	include('version.php');
else:
	$sys_version='0.0';
endif;
echo '<div align="center">
	<font style="font-size:8px;color:#999" >
	Loaded in '.$time.' sec.&nbsp;&nbsp;
	'.$globvars['name'].' build&nbsp;&nbsp;'.date ("dmY", filemtime('index.php')).'-'.$sys_version.'
	</FONT>
</div>';
?>

    </body>
</html>