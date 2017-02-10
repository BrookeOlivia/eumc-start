<?php session_start();

	
			
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
		<body class="erequests">

			<!-- PASTE EVERYTHING in your body between this line and the END YOUR CODE line -->

				<div id="wrapper">

					<header>
						<h1 class="title"><a href="index.php">Evangelical United Methodist Church</a></h1>
					</header>

					<?php
						echo"<nav>";
							echo"<ul>";
								echo '<li><a href="prayer_requests_data.php">Prayer Requests</a></li>';
								echo '<li><a href="more_info_data.php">More Information Requests</a></li>';
								echo '<li><a href="my_requests.php">My Emailed Request</a></li>';
								$month_date_right = substr(date('m'),1);
								echo '<li><a href="calendar.php?month='.$month_date_right.'&year='.date('Y').'">Back to Calendar</a></li>';
								echo '<li><a href="logout.php">Log Out</a></li>';
							echo "</ul>";
						echo"</nav>";
					?>

					<aside>
						<?php include('./Includes/Church_aside.inc.php'); ?>
					</aside>
			
					<article>
						<section>
						<h2>Email Requests</h2>
						<?php
							if(isset($_SESSION['user']))
							{
								//set up your information here
									$hostname = '';
									$database = '';
									$username = '';
									$password = '';
									$member = $_SESSION['user'];
									
								//Make a new connection object
									$conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
													
									$sql = "SELECT * From Email WHERE members_name ='". $member ."'";
							
									$result = $conn->query($sql);
					
								$result = $conn->query($sql);
					
								echo '<table class="email_info_table">';
									echo "<tr>";
										echo '<th scope="col">';
											echo "Id";
										echo '</th>';
					
										echo '<th scope="col">';
											echo "Name";
										echo '</th>';
				
										echo '<th scope="col">';
											echo "Email";
										echo '</th>';

										echo '<th scope="col">';
											echo "Message";
										echo '</th>';
									echo "</tr>";

									foreach ($result as $line => $row)
									{	
										$email_id = $row['email_id'];
										$visitors_name = $row['visitors_name'];
										$visitors_email = $row['visitors_email'];
										$email_message = $row['email_message'];

									echo "<tr>";
										echo '<th scope="row">';
											echo $email_id;
										echo "</th>";
										echo "<td>";
											echo $visitors_name;
										echo "</td>";
										echo "<td>";	
											echo $visitors_email;
										echo "</td>";
										echo "<td>";
											echo $email_message;
										echo "</td>";
									echo "</tr>";
									}
								echo "</table>";
	}  //end if

	else
	{
		echo 'I am sorry you do not have access to this page. <a href="login.php">Login</a>.';
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
			<script>window.jQuery || document.write('<script src="assets/js/libs/jquery-1.7.1.min.js"><\/script>')</script>
			<script src="assets/js/script.js"></script>
			</body>
		</html>