

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

	<!-- ONLY EDIT INSIDE HERE -->
	<title> Prayer Request - Evangelical United Methodist Church</title>
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
			<?php

				$first = $_POST["txtfirstname"];
				$last = $_POST["txtlastname"];
				$email = $_POST["txtemail"];
				$phone = $_POST["txtphone"];
				$prayer = $_POST["txtprayer"];
				$contact = $_POST["chkcontact"];

				if (isset($_POST["submit"]))
				{
					echo '<p class="prayerp">';
					echo "Thank you!";
					echo "</p>" ;
					echo $first ." " . $last . " the following prayer request has been sent to our prayer team." ;
					echo "</p>";
						
						if (isset($_POST["chkcontact"])) 
						{
							echo "A member of our prayer team will be contacting you in the near future by:";
							echo "<br/>";
								if (isset($_POST["txtphone"]) || isset($_POST["txtemail"])) 
								{
									echo $phone;
									echo "<br/>";
									echo $email;
								}
						}

					echo '<div class="prayerbox">';
					echo $prayer;
					echo "</div>";

					echo '<p class="prayercontact">If you would like to talk to someone immediately about your prayer request please check out <a href="leaderhip.html">Leadership Contact.</a></p>';
					echo "<p>God Bless!</p>";
				}
				
				else
				{
					echo "I am sorry you did not enter the submit button.  Please try again.";
				}

				$to = "";
				$subject = "Prayer Request Submission  - $first $last";
				$message = "$first $last \n   $prayer"; 
				

				mail($to, $subject, $message);





			?>
				
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
