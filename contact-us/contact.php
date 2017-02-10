<?php 
		$errors = array();
		$missing = array();
		// check if the form has been submitted
			if(isset($_POST['submit']))
			{
				//email processing script
					$to = 'example@example.com';
					$subject = "WebSite Contact REQUEST";
				//list expected fields 
					$expected= array('txtname','txtsubmitted_email','txtmessage','txtcontact_person');
				// set required fields
					$required = array('txtname', 'txtsubmitted_email', 'txtmessage','txtcontact_person');
					require('./includes/processmail.inc.php');
			}
	?>


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
		.selectedcontactus
		{
			text-decoration: underline;
			color: lightblue;
			font-weight: bold;
		}
	</style>
	<!-- ONLY EDIT INSIDE HERE -->
	<title>Contact Us -  Evangelical United Methodis Church </title>
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
			<?php include('../Includes/nav.inc.php'); ?>
		</nav>


		<aside>
			<?php include('../Includes/Church_aside.inc.php'); ?>
		</aside>

		
		<article>
			<section>
				<?php
				$live = 0;
				if ($live) {
					
					$first = $_POST["txtfirstname"];
					$last = $_POST["txtlastname"];
					$email = $_POST["txtemail"];
					$phone = $_POST["txtphone"];
					$street = $_POST["txtstreet"];
					$city = $_POST["txtcity"];
					$zip = $_POST["txtzip"];
					$comments= $_POST["txtcomments"];
					$state = $_POST["selState"];
					$Married_Status = $_POST["radStatus"];


					if (isset($_POST["submit"]))
					{
						echo '<p class="prayerp">';
						echo "Thank you " . $first ." " . $last . " for your interest in our church" ;
						echo "</p>";
						echo '<div class="prayerbox">';
						echo "<p> $comments</p>";
						echo "</div>";

						echo "<p>God Bless!</p>";
					}
				
					else
					{
						echo "I am sorry you did not enter the submit button.  Please try again.";
					}

					
					$to = "example@example.com";
					$subject = "More Information - $first $last";
					$message = "$first $last \n   $comments";
					mail($to, $subject, $message);
				# code...
				}else{
					echo "<h1>I'm sorry we are not accepting emails at this time</h1>";
				}
				?>
				
			</section>

		</article>

		<footer>
			<?php include('../Includes/footer.inc.php'); ?>
		</footer>
	</div> 









<!-- END OF OUR CODE -->




<!-- DON'T TOUCH ANYTHING BELOW THIS LINE! -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/assets/js/libs/jquery-1.7.1.min.js"><\/script>')</script>
<script src="/assets/js/script.js"></script>

</body>
</html>
