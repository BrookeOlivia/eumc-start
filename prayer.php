<?php 
		$errors = array();
		$missing = array(); 
		$count =0;
		$chkcontact = "";
		// check if the form has been submitted
			if(isset($_POST['submit']))
			{
				
				//list expected fields 
					$expected= array('txtfirstname','txtlastname','txtemail','txtphone','txtprayer','chkcontact');
				// set required fields
					$required = array('txtfirstname', 'txtemail','txtprayer');
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
							
					
						$sql = "INSERT INTO Prayer_Requests(first_name, last_name, email, prayer, contact, Phone) VALUES( '$txtfirstname', '$txtlastname', '$txtemail', '$txtprayer', '$chkcontact','$txtphone')";
						//echo "<p>$sql</p>";

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
							$to = "eumc.pastor20@gmail.com, eumc.prayer.request@gmail.com";
							$subject = "WebSite Prayer Request ". $txtfirstname. " ". $txtlastname;
							$message = "Name: " . $txtfirstname." ". $txtlastname. "\n Email: ". $txtemail . " Phone: ".$txtphone ."\n". $txtprayer ."\n". 'Please Log in (evangelicalunitedmethodist.org/login.php) to see all of the request'. "\n  I would like for someone to contact me: ". $chkcontact;
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
	<title> Prayer Request Form - Evangelical United Methodist Church</title>
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
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="ministries.php">Ministries</a></li>
				<li><a href="aboutus.php">About Us</a></li>
				<li><a href="events.php">Events</a></li>
				<li><a href="gallery.php">Photos</a></li>
				<li><a href="leadership.php">Leadership</a></li>
				<li><a href="contactus.php">Contact Us</a></li>
				<li><a href="preschool.php">Preschool</a></li>			
			</ul>
		</nav>		

		<aside>
			<?php include('./Includes/Church_aside.inc.php'); ?>
		</aside>

		
		<article>
			<section>
				<h2>Prayer Requests</h2>
					<p>All information will be kept confidential</p>
						<?php
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

							if ( isset($_POST['submit']) && $count > 0)
							{
								echo '<p style="font-size:1.2em; color:red;">We have received your request!</p> <br>';
							}
							elseif (isset($_POST['submit']) && $count = 0)
							{
								echo '<p style="font-size:1.2em; color:red;">I am sorry we did not receive your request please try again</p> <br>';
								//echo "Error!";
								//print_r(error_get_last());
							}


						?>
					<form class="prayer" method="post" action="">
						<fieldset>
							<legend>Prayer Request Form</legend>
								<div>
									<label class="text" for="txtfirstname">First Name:</label>
									<input class="text" type="text" name="txtfirstname" id="txtfirstname"<?php  if($missing || $errors)
									 {
						 				echo 'value="'. htmlentities($txtfirstname, ENT_COMPAT, 'UTF-8').'"';
						 			}?>>

									<?php
										if($missing && in_array('txtfirstname', $missing))
									{
									?>
										<span class="warning"> Please enter your First Name.</span>
									<?php 
									}
									 ?>
								</div>
								
								<div>
									<label class="text" for="txtlastname">Last Name:</label>
									<input class="text" type="text" name="txtlastname" id="txtlastname"<?php  if($missing || $errors)
									 {
						 				echo 'value="'. htmlentities($txtlastname, ENT_COMPAT, 'UTF-8').'"';
									 }?>>

									<?php
										if($missing && in_array('txtlastname', $missing))
									{
									?>
										<span class="warning"> Please enter your Last Name.</span>
									<?php 
									}
									 ?>
								</div>
								
								<div>
									<label class="text" for="txtemail">Email:</label>
									<input class="text" type="text" name="txtemail" id="txtemail"<?php  if($missing || $errors)
						 			{
									 	echo 'value="'. htmlentities($txtemail, ENT_COMPAT, 'UTF-8').'"';
									 }?>>

									<?php
										if($missing && in_array('txtemail', $missing))
									{
									?>
										<span class="warning"> Please enter your Email Address.</span>
									<?php 
									}
									 ?>
								</div>
								
								<div>
									<label class="text" for="txtphone">Phone Number:</label>
									<input class="text" type="text" name="txtphone" id="txtphone"<?php  if($missing || $errors)
									 {
									 	echo 'value="'. htmlentities($txtphone, ENT_COMPAT, 'UTF-8').'"';
									 }?>>

									<?php
										if($missing && in_array('txtphone', $missing))
									{
									?>
										<span class="warning"> Please enter your Phone Number.</span>
									<?php 
									}
									 ?>
								</div>
								
								<div>
									<label class="concern" for="txtprayer">Prayer Request:</label>
									<textarea name="txtprayer" id="txtprayer" rows="15" cols="41"><?php
											if($missing && in_array('txtprayer', $missing))
											{
												echo 'Please enter your Prayer Request.';
											}
											elseif($missing || $errors)
											{
												echo htmlentities($txtprayer, ENT_COMPAT, 'UTF-8');
											}
										?>
									</textarea>
								</div>
								
								<div>
									<label for="chkcontact">
										<input class="checkbox" type="checkbox" name="chkcontact" id="chkcontact" checked="checked" value="yes">I would like someone from the prayer team to contact me.
									</label>
								</div>
								
								<div>
									<input type="submit" name="submit" value="Submit">
								</div>
						</fieldset>
					</form>	
					<?php
						if($_POST)
						{
							//print_r($_POST);
						}
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
