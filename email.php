<?php 
		$errors = array();
		$missing = array();
		$email = $_GET['email'];
		$names = $_GET['names'];
		$name = $_GET['name'];
		// check if the form has been submitted
			if(isset($_POST['submit']))
			{
				
				//list expected fields 
					$expected= array('txtname','txtsubmitted_email','txtmessage','txtcontact_person');
				// set required fields
					$required = array('txtname', 'txtsubmitted_email', 'txtmessage','txtcontact_person');
					require('./includes/processmail.inc.php');
			

				if(!$missing && !$errors)
				{
					//set up your information here
						$hostname = '';
						$database = '';
						$username = '';
						$password = '';

					//Make a new connection object
						$conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
						
					
						$sql = "INSERT INTO Email(visitors_name, visitors_email, email_message, church_contact, members_name) VALUES( '$txtname', '$txtsubmitted_email', '$txtmessage', '$email', '$name')";
						//echo "<p>$sql</p>";
						$count = 0;
						$count = $conn->exec( $sql );
						
						if( $count > 0 )
						{
							//echo "We have received your request! <br>";
						}
						else
						{
							//echo "I'm sorry we did not receive your request please try again <br>";
							//echo "Error!";
							//print_r(error_get_last());
						}

						//Email Script
							$to = "$email";
							$subject = "WebSite Email Request ". $txtname;
							$message = "Name: " . $txtname. "\n Email: ". $txtsubmittedemail . "\n Message: ". $txtmessage ."\n". 'Please Log in (evangelicalunitedmethodist.org/login.php) to see all of the request';
							mail($to, $subject, $message);
			
				}
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

	<!-- ONLY EDIT INSIDE HERE -->
	<title>Leadership - Evangelical United Methodist Church</title>
	<script type="text/javascript" src="/assets/js/mootools-core-1.4.4-full-compat-yc.js"></script>
    <!--[if (gte IE 6)&(lte IE 8)]>
          <script type="text/javascript" src="selectivizr.js"></script>
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
					
					//echo $email;
					//echo $name;
					if ($_POST && $suspect)
					{
						echo '<p class="warning">Sorry, your mail could not be sent. Please try later.</p>';
				 	}
				
					elseif ($missing || $errors) 
					{
					?>
					<p class="warning">Please fix the item(s) indicated.</p>
				<?php
					}
					$count = 0;
					if (isset($_POST['submit']) && $count > 0)
					{
						echo '<p style="font-size:1.2em; color:red;">We have received your request!</p> <br>';
					}
					elseif (isset($_POST['submit']) && $count < 0)
					{
						echo '<p style="font-size:1.2em; color:red;">I am sorry we did not receive your request please try again</p> <br>';
						//echo "Error!";
						//print_r(error_get_last());
					}
				?>

				<h2>You are Emailing <?php echo $names ?></h2>

				<form id="email" method="post" action="">
					<div>
						<label for="txtcontact_person">Email To:</label>
						<input type="text" name="txtcontact_person" id="txtcontact_person" readonly="readonly" value="<?php echo $names; ?>">
					</div>

					<div>
						<label for="txtsubmitted_email">Your Email Address:</label>
						<input type="text" name="txtsubmitted_email" id="txtsubmitted_email" <?php  if($missing || $errors)
						 {
						 	echo 'value="'. htmlentities($txtemail, ENT_COMPAT, 'UTF-8').'"';
						 }?>>

							<?php
								if($missing && in_array('txtsubmitted_email', $missing))
								{
							?>
							<span class="warning"> Please enter your Email Address.</span>
							<?php 
								}
							 ?>
					</div>

					<div>
						<label for="txtname">Your Name:</label>

						<input type="text" name="txtname" id="txtname"<?php  if($missing || $errors)
						 {
						 	echo 'value="'. htmlentities($txtname, ENT_COMPAT, 'UTF-8').'"';
						 }?>>

							<?php
								if($missing && in_array('txtname', $missing))
								{
							?>
							<span class="warning"> Please enter your name.</span>
							<?php 
								}
							 ?>
					</div>

					<div>
						<label for="txtmessage">Message:</label>				
						<textarea id="txtmessage" name="txtmessage" rows="20" cols="60">
							<?php
								if($missing && in_array('txtmessage', $missing))
								{
									echo 'Please enter your message.';
								}
								if($missing || $errors)
								{
									echo htmlentities($txtmessage, ENT_COMPAT, 'UTF-8');
								}
							 ?>	</textarea>	

							
					</div>

					<div>
						<input type="submit" name="submit" id="submit_email" value="Submit">
					</div>
				</form>

				<?php
					/*if($_POST)
					{
						print_r($_POST);
					}*/
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
