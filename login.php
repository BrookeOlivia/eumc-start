<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- ONLY EDIT INSIDE HERE -->
	<title>Evangelical United Methodist Church - Login</title>
	<script type="text/javascript" src="assets/js/mootools-core-1.4.4-full-compat-yc.js"></script>
    <!--[if (gte IE 6)&(lte IE 8)]>
          <script type="text/javascript" src="selectivizr.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="assets/css/styles.css">

	<!-- END EDIT AREA -->

	<script src="assets/js/libs/modernizr-2.5.3.min.js"></script>
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
			<section style="height: 430px;">
				<h2>Login</h2>
				
					<form style="width: 500px;margin-left: auto;margin-right: auto; margin-top: 130px;" method="post" action="CheckPassword.php">
					
						<div style="clear: both;">
							<label style="float: left; width: 180px;font-size: 1.3em;"for="txtUsername">Username:</label>
							<input type="text" name="txtUsername" id="txtUsername" style="width: 215px">
						</div>

						<div style="clear: both;">
							<label style="float: left; width: 180px;font-size:1.3em;"for="txtPassword">Password:</label>
							<input type="password" name="txtPassword" id="txtPassword" size="25" style="width: 215px">
						</div>
					
						<div style="clear: both;">
							<input type="submit" value="Login" name="Login" style="float:right; margin-right: 100px; margin-top: 20px;">
						</div>
					</form>
			</section>
		</article>

		<footer>
		   <?php include('./Includes/footer.inc.php'); ?>
		</footer>
	</div> 




<!-- END OF OUR CODE -->




<!-- DON'T TOUCH ANYTHING BELOW THIS LINE! -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/libs/jquery-1.7.1.min.js"><\/script>')</script>
<script src="assets/js/script.js"></script>

</body>
</html>


