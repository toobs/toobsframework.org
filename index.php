<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="KEYWORDS" content="Toobs Java Web Framework" />
   <meta name="DESCRIPTION" content="Toobs, The java web framework" />
   <!-- <meta name="robots" content="index,follow" /> -->
   <link rel="icon" href="/favicon.ico" type="image/x-icon" />
   <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
   <title>Toobs</title>

	<link href="css/main.css" media="screen" rel="stylesheet" type="text/css" />
	
</head>

	<body>
		<?php include("includes/header.php"); ?>
		
		<div id="main">
			<div id="biglogo">
				<img src="images/toobs600.jpg"/>
			</div>
			<div id="vision">
				<h1>Welcome to Toobs</h1>
				<div id="visionbox">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis eros vel odio aliquam ac condimentum lorem posuere. Curabitur imperdiet elit et lorem pellentesque tincidunt. Duis at ante mauris. Quisque lobortis metus quis sem condimentum tincidunt. Curabitur in turpis vitae mi pellentesque pellentesque. Proin et libero vel enim bibendum feugiat. Nam imperdiet lobortis tellus. Donec accumsan dapibus accumsan. Vestibulum vitae mi ipsum, nec faucibus enim. Sed vehicula bibendum bibendum. Mauris ac sem sit amet ipsum porttitor egestas. Donec a lacus felis. Donec a dui hendrerit ante sollicitudin rutrum sit amet eu justo. Aliquam erat volutpat. Praesent sed diam in risus venenatis ullamcorper a at neque. Nulla facilisi. 
				</div>
				<div class="downloadbox">
					<h4>Download latest stable release</h4>
					<a href="#"><img src="images/tar.jpg" height="75px" border="0"/></a>
					<a href="#"><img src="images/zip.jpg" height="75px" border="0"/></a>
				</div>
			</div>
			<div class="clearall"></div>
			<div class="pad"></div>
			<div class="leftbox">
				<div class="right"><a href="http://blog.toobsframework.org/?feed=rss2"><img src="images/rss1.jpg" border="0" height="20px"/></a></div>
				<h2>News</h2>
				<?php include("includes/news.php"); ?>
			</div>
			
			<div class="rightbox">
				<div class="right"><a href="#"><img src="images/rss1.jpg" border="0" height="20px"/></a></div>
				<h2>Development Stream</h2>
				<?php include("includes/devstream.php"); ?>
			</div>
			<div class="clearall"></div>
			<div class="pad"></div>
			
		</div>
		
		<?php include("includes/footer.php"); ?>
		
	</body>
</html>