<?php 
		$errors = array();
		$missing = array();
		$chkMinistries = "";
		$chkWorship = "";
		$chkPreschool = "";
		$chkAll = "";
		$radStatus = "";
		$selState = "";
					
//$selState', '$radStatus', '$chkMinistries', '$chkWorship', '$chkPreschool', '$chkAll

		// check if the form has been submitted
			if(isset($_POST['submit']))
			{
				//list expected fields 
					$expected= array('txtfirstname','txtlastname','txtemail','txtphone','txtstreet','txtcity','txtzip', 'txtcomments', 'selState', 'radStatus','chkMinistries','chkWorship','chkPreschool','chkAll');
				// set required fields
					$required = array('txtfirstname','txtlastname', 'txtemail');
					require('./includes/processmail.inc.php');


				if(!$missing && !$errors)
				{
					//set up your information here
						$hostname = "localhost";
						$database = "eumc_visitors";
						$username = "eumc_user1";
						$password = "Gide0ndunn";

					//Make a new connection object
						$conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
					
						$sql = "INSERT INTO More_Info (phone, street, first_name, last_name, email, city, Zip_code, comments, state, marital_status, ministries, worship, preschool, all_options) VALUES( '$txtphone', '$txtstreet', '$txtfirstname', '$txtlastname', '$txtemail', '$txtcity', '$txtzip','$txtcomments','$selState', '$radStatus', '$chkMinistries', '$chkWorship', '$chkPreschool', '$chkAll')";
						//echo "<p>$sql</p>";
						$count = 0;

						$count = $conn->exec( $sql );
						if( $count > 0 )
						{
							//echo  "We have received your request! <br>";
						}
						else
						{
							//echo "I'm sorry we did not receive your request please try again <br>";
							//echo "Error!";
							//print_r(error_get_last());
						}

						//email processing script
					$to = "eumc.pastor20";
					$subject = "WebSite Contact REQUEST " . $txtfirstname. " ". $txtlastname;
					$message = "Name: " . $txtfirstname." ". $txtlastname. "\n Email: ". $txtemail."\n". $txtcomments ."\n". 'Please Log in (evangelicalunitedmethodist.org/login.php) to see all of the request';
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
	<title>More Information Request Form - Evangelical United Methodist Church</title>
	<script type="text/javascript" src="/assets/js/jquery.js"></script>
	<script type="text/javascript">

	</script>
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
				<h2>More Information</h2>
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

				<p>This information will not be given out to anyone else and will be use to help us better serve you.</p>

					<form class="contacts" method="post" action="">
						<fieldset>
							<legend>Contact Information</legend>
									<div>
									<label class="basic" for="txtfirstname">First Name:</label>
									<input class="basic" type="text" name="txtfirstname" id="txtfirstname"<?php  if($missing || $errors)
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
									<label class="basic" for="txtlastname">Last Name:</label>
									<input class="basic" type="text" name="txtlastname" id="txtlastname"<?php  if($missing || $errors)
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
									<label class="basic" for="txtstreet">Street Address:</label>
									<input class="basic" type="text" name="txtstreet" id="txtstreet"<?php  if($missing || $errors)
									 {
									 	echo 'value="'. htmlentities($txtstree, ENT_COMPAT, 'UTF-8').'"';
									 }?>>

									<?php
										if($missing && in_array('txtstreet', $missing))
										{
									?>
										<span class="warning"> Please enter your Street Address.</span>
									<?php 
										}
									 ?>
								</div>
								
								<div>
									<label class="selState" for="selState">State:</label>
									<select class="dropdown" name="selState" id="selState">
										<option value="NA">Select One</option>
										<option value="AL">Alabama</option>
										<option value="AK">Alaska</option>
										<option value="AZ">Arizona</option>
										<option value="AR">Arkansas</option>
										<option value="CA">California</option>
										<option value="CO">Colorado</option>
										<option value="CT">Connecticut</option>
										<option value="DE">Delaware</option>
										<option value="DC">District of Columbia</option>
										<option value="FL">Florida</option>
										<option value="GA">Georgia</option>
										<option value="HI">Hawaii</option>
										<option value="ID">Idaho</option>
										<option value="IL">Illinois</option>
										<option value="IN">Indiana</option>
										<option value="IA">Iowa</option>
										<option value="KS">Kansas</option>
										<option value="KY">Kentucky</option>
										<option value="LA">Louisiana</option>
										<option value="ME">Maine</option>
										<option value="MD">Maryland</option>
										<option value="MA">Massachusetts</option>
										<option value="MI">Michigan</option>
										<option value="MN">Minnesota</option>
										<option value="MS">Mississippi</option>
										<option value="MO">Missouri</option>
										<option value="MT">Montana</option>
										<option value="NE">Nebraska</option>
										<option value="NV">Nevada</option>
										<option value="NH">New Hampshire</option>
										<option value="NJ">New Jersey</option>
										<option value="NM">New Mexico</option>
										<option value="NY">New York</option>
										<option value="NC">North Carolina</option>
										<option value="ND">North Dakota</option>
										<option value="OH">Ohio</option>
										<option value="OK">Oklahoma</option>
										<option value="OR">Oregon</option>
										<option value="PA">Pennsylvania</option>
										<option value="RI">Rhode Island</option>
										<option value="SC">South Carolina</option>
										<option value="SD">South Dakota</option>
										<option value="TN">Tennessee</option>
										<option value="TX">Texas</option>
										<option value="UT">Utah</option>
										<option value="VT">Vermont</option>
										<option value="VA">Virginia</option>
										<option value="WA">Washington</option>
										<option value="WV">West Virginia</option>
										<option value="WI">Wisconsin</option>
										<option value="WY">Wyoming</option>
									</select>
								</div>
								
								<div>
									<label class="city" for="txtcity">City:</label>
									<input class="city" type="text" name="txtcity" id="txtcity"<?php  if($missing || $errors)
									 {
									 	echo 'value="'. htmlentities($txtcity, ENT_COMPAT, 'UTF-8').'"';
									 }?>>

									<?php
										if($missing && in_array('txtcity', $missing))
										{
									?>
										<span class="warning"> Please enter your City.</span>
									<?php 
										}
									 ?>
								</div>
								
								<div>
									<label class="basic" for="txtzip">Zip Code:</label>
									<input class="basic" type="text" name="txtzip" id="txtzip"<?php  if($missing || $errors)
									 {
									 	echo 'value="'. htmlentities($txtzip, ENT_COMPAT, 'UTF-8').'"';
									 }?>>

									<?php
										if($missing && in_array('txtzip', $missing))
										{
									?>
										<span class="warning"> Please enter your Zip Code.</span>
									<?php 
										}
									 ?>
								</div>
								
								<div>
									<label class="basic" for="txtemail">Email:</label>
									<input class="basic" type="text" name="txtemail" id="txtemail"<?php  if($missing || $errors)	
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
									<label class="basic" for="txtphone">Phone Number:</label>
									<input class="basic" type="text" name="txtphone" id="txtphone"<?php  if($missing || $errors)	
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
						</fieldset>
						
						<fieldset>
							<legend>Personal Information</legend>
							I am:	
							<div class="radio">
								<label for="radSingle">
									<input type="radio" name="radStatus" value="S" id="radSingle">Single
								</label>
							</div>
							
							<div class="radio">
								<label for="radMarried">
									<input type="radio" name="radStatus" value="M" id="radMarried">Married
								</label>
							</div>
							
							<div class="radio">
								<label for="radMarChildren">
									<input type="radio" name="radStatus" value="MC" id="radMarChildren">Married with Children
								</label>
							</div>
							</fieldset>
							
							<fieldset>
								<legend>Information</legend>

							<p>I would like to know more about:</p>
							<div class="check">
								<label for="chkMinistries">
									<input type="checkbox" name="chkMinistries" id="chkMinistries" value="yes">Care Ministries
								</label>
							</div>
							
							<div class="check">
								<label for="chkWorship">
									<input type="checkbox" name="chkWorship" id="chkWorship" value="yes">Worship Service
								</label>
							</div>
							
							<div class="check">
								<label for="chkPreschool">
									<input type="checkbox" name="chkPreschool" id="chkPreschool" value="yes">Genesis Preschool
								</label>
							</div>
							
							<div class="check">
								<label for="chkAll">
									<input type="checkbox" name="chkAll" id="chkAll" value="yes">All of the above
								</label>
							</div>
							
						

							<div class="comments">
								<label class="comments" for="txt">Other Comments:</label>
								<textarea name="txtcomments" id="txt" rows="15" cols="41"><?php
										if($missing && in_array('txtcomments', $missing))
										{
											echo 'Please enter your Comments.';
										}
										if($missing || $errors)
										{
											echo htmlentities($txtcomments, ENT_COMPAT, 'UTF-8');
										}
									 ?>	
								</textarea>	

								</textarea>
							</div>
							
							<div>
									<input class="submit" type="submit" name="submit" value="Submit">
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
