<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="/assets/css/style.css">
	<style>
		.selectedgallery
		{
			text-decoration: underline;
			color: lightblue;
			font-weight: bold;
		}
	</style>
	<!-- ONLY EDIT INSIDE HERE -->
	<title>Photo Gallery - Evangelical United Methodist Church</title>
	<script type="text/javascript" src="/assets/js/mootools-core-1.4.4-full-compat-yc.js"></script>
    <!--[if (gte IE 6)&(lte IE 8)]>
          <script type="text/javascript" src="selectivizr.js"></script>
    <![endif]-->
     <!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
     </style>
<![endif]-->
    <link rel="stylesheet" href="/assets/css/styles.css">
    
   

	<!-- END EDIT AREA -->

	<script src="/assets/js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body>

<!-- PASTE EVERYTHING in your body between this line and the END YOUR CODE line -->

<div id="wrapper">

		<header>
			<h1 class="title"><a href="index.php">Evangelical United Methodist Church</a></h1>

		</header>

		
		<nav>
			<?php include('./Includes/nav.inc.php'); ?>
		</nav>

		<aside>
			<?php include('./Includes/Church_aside.inc.php'); ?>
		</aside>
		
		<article>
			<section>
				<h2>Photos</h2>
		
				<div id="video">
					<video class="two" poster="/assets/images/DSCN1339.JPG" controls>				
						<source src="/assets/video/EUMC_Gallery.mp4" type="video/mp4" />
						<source src="/assets/video/EUMC_Gallery.webm" type="video/webm" />
						<source src="/assets/video/EUMC_Gallery.ogv" type="video/ogg" />
							<!-- <object type="application/x-shockwave-flash" data="flashfox.swf"  style="position:relative;"> -->
								<param name="movie" value="flashfox.swf" />
								<param name="allowFullScreen" value="true" />
								<param name="flashVars" value="autoplay=false&amp;controls=true&amp;loop=true&amp;src=EUMC_Gallery.mp4" />
								<embed src="flashfox.swf" style="position:relative;"  flashVars="autoplay=false&amp;controls=true&amp;loop=true&amp;poster=EUMC_Gallery.jpg&amp;src=EUMC_Gallery.mp4"	allowFullScreen="true" wmode="transparent" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer_en" />
								<img alt="EUMC_Gallery_Video" src="/assets/images/EUMC_Gallery.jpg" style="position:absolute;left:0;" title="Video playback is not supported by your browser" />
							</object>
					</video>

					<script src="/assets/js/html5ext.js" type="text/javascript"></script>
					<!-- End EasyHtml5Video.com BODY section -->
			</div>				
				
				
				
			<h1>Photo Albums</h1>
		<div class="photoAlbum">
			<div class="album">
				<p class="galleryName"><a href="easter.php">Easter</a></p>
				<p><a href="easter.php"><img src="/assets/images/Easter/DSCN1011.JPG" alt="Easter Link Picture"></a></p>
			</div>
			<div class="album">
				<p class="galleryName"><a href="service.php">Our Services</a></p>
				<p><a href="service.php"><img src="/assets/images/services/DSCN2306.JPG" alt="Services"></a></p>
			</div>
			<div class="album">	
				<p class="galleryName"><a href="youthpics.php">Youth Group</a></p>
				<p><a href="youthpics.php"><img src="/assets/images/youth/PICT0001.JPG" alt="Youth"></a></p>
			</div>
		</div>
			
			</section>

		</article>

		<footer>
		   <?php include('./Includes/footer.inc.php'); ?>
		</footer>
	</div> 

<!-- END OF OUR CODE -->

<!-- DON'T TOUCH ANYTHING BELOW THIS LINE! -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/assets/js/libs/jquery-1.7.1.min.js"><\/script>')</script>
<script src="/assets/js/script.js"></script>
<!-- <script src="/assets/js/jquery.infinitecarousel3.min.js"></script> -->


</body>
</html>
