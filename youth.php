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
		.selectedministries
		{
			text-decoration: underline;
			color: lightblue;
			font-weight: bold;
		}
	</style>

	<!-- ONLY EDIT INSIDE HERE -->
	<title> Youth/Children Group - Evangelical United Methodist Church</title>
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
				<h2>Youth and Children Ministries</h2>
				
				
				
				<div id="childrens">
					<h3>Kids Can do Club</h3>
				
					<p>Is a club for kids that are not qualified to be in the actual youth group.  This club prepares the younger kids to go into the youth group by still keeping it fun and entertaining.</p>
				
					<p>Ages: Kindergarten through 6th grade</p>
					<table class="contact">
						<caption><h3>Contact Information</h3></caption>
						<tr>
							<th scope="col">Contact Name</th>
							<th scope="col">Phone</th>
							<th scope="col">Email</th>
						</tr>
						<tr>
							<th scope="row">Sue Lucas</th>
							<td>(540) 652-6027</td>
								<?php
									$email= "eumc.children@gmail.com";
									$name = "eumc.children";
									$names = "Sue Lucas";
									echo '<td><a href="email.php?email='. $email.'&names='.$names.'&name='.$name.'"'.'>Email Me</td>';
								?>
						</tr>
					</table>
				</div>
				
				<div id="youth">
					<h3>Youth Group</h3>

					<p>Our youth group participates in many different missions throughout the year.  Our youth group consists  of different ages.  To be a member of the youth group you must be 7th grade - 12 grade (although we do have young college students join our group for mission opportunities.</p>

					<p>Some of our activities include:</p>
					<div class="youthlist">
					<ul>
						<li>Food Collection drives for Elkton Area United Services (EAUS)</li>
						<li class="livid">Friends For Fuel- a mission where our youth sleep outside in cardboard boxes for one night to raise awareness for the homeless and to raise money for the Elkton Area United Services (EAUS).</li>

						<div id="video">
					<video class="two" poster="/assets/images/DSCN1339.JPG" controls>
						<source src="/assets/video/Friends_For_Fuel.mp4" type="video/mp4" />
						<source src="/assets/video/Friends_For_Fuel.webm" type="video/webm" />
						<source src="/assets/video/Friends_For_Fuel.ogv" type="video/ogg" />
							<object type="application/x-shockwave-flash" data="flashfox.swf" width="400" height="500" style="position:relative;">
								<param name="movie" value="flashfox.swf" />
								<param name="allowFullScreen" value="true" />
								<param name="flashVars" value="autoplay=false&amp;controls=true&amp;loop=true&amp;src=Friends_For_Fuel.mp4" />
								<embed src="flashfox.swf" width="400" height="500" style="position:relative;"  flashVars="autoplay=false&amp;controls=true&amp;loop=true&amp;poster=Friends_For_Fuel.jpg&amp;src=Friends_For_Fuel.mp4"	allowFullScreen="true" wmode="transparent" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer_en" />
								<img alt="Friends_For_Fuel" src="/assets/images/Friends_For_Fuel.jpg" style="position:absolute;left:0;" width="400" height="500" title="Video playback is not supported by your browser" />
							</object>
					</video>
<script src="/assets/js/html5ext.js" type="text/javascript"></script>


<!-- End EasyHtml5Video.com BODY section -->
							<p class="caption">All rights to this song belong to Phil Wickham</p>
							</div>

				
						<li>Mission trips in Virginia</li>
						<li>Youth Conferences throughout the east coast</li>
						<li>Autism Walk and Relay for Life</li>
					</ul>
					
					<a href="youthpics.php"><h2>Youth Pictures</h2></a>

					<div id="permissionforms">
						<a href="WaiverReleaseForm-1.pdf" target="blank">Waiver Release Form</a>
						<a href="EmergencyMedicalReleaseFORM.pdf" target="blank">Emergency Medical Release Form</a>
					</div>

					</div>
					
					<p> Ages: 7th grade - 12th grade</p>
					<table class="contact">
						<caption><h3>Contact Information</h3></caption>
						<tr>
							<th scope="col">Contact Name</th>
							<th scope="col">Phone</th>
							<th scope="col">Email</th>
						</tr>
						<tr>
							<th scope="row">Allison Morris</th>
							<td>(540) 830-3539</td>
								<?php
									$email= "eumc1youth@gmail.com";
									$names = "Allison Morris";
									$name ="eumc.1youth";
									echo '<td><a href="email.php?email='. $email.'&names='.$names.'&name='.$name.'"'.'>Email Me</td>';
								?>
						</tr>
					</table>
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

</body>
</html>
