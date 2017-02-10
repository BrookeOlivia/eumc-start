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
	


	if(isset($_SESSION['user']))
	{
		//echo $_SESSION['user'];

		if ($_SESSION['user'] == "boblivia" || $_SESSION['user'] == "eumc_prayer" || $_SESSION['user'] == "eumc_pastor")
		{


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

						
								<h2>Prayer Requests</h2>		
								<?php
										//set up your information here
											$hostname = '';
											$database = '';
											$username = '';
											$password = '';

										//Make a new connection object
											$conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);

										//write a SQL query string
											$sql = "SELECT  first_name, last_name, email, prayer, contact, phone, prayer_request FROM Prayer_Requests";

										//run the query against the connected dtabase, then...
										//store the result (all records matching the query)
											$result = $conn->query($sql);
												echo '<table class="prayer_request_table">';
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
															echo "Prayer";
														echo '</th>';
														echo '<th scope="col">';
															echo "Contact";
														echo '</th>';
														echo '<th scope="col">';
															echo "Phone Number";
														echo '</th>';
													echo "</tr>";

													foreach ($result as $line => $row)		
													{	
														$first = $row['first_name'];
														$last = $row['last_name'];
														$email = $row['email'];
														$my_request = $row['prayer'];
														$id_number = $row['prayer_request'];
														$phone= $row['phone'];
														$contact = $row['contact'];
														
													echo "<tr>";
														echo '<th scope="row">';
															echo $id_number;
														echo "</th>";

														echo "<td>";
															echo $first;
															echo "<br>";
															echo $last;
														echo "</td>";
													
														echo "<td>";
															echo $email;
														echo "</td>";
													
														echo "<td>";
															echo $my_request;
														echo "</td>";
				
														echo "<td>";
															echo $contact;
														echo "</td>";
						
														echo "<td>";
															echo $phone;
														echo "</td>";
													echo "</tr>";
													}
												echo "</table>";
		} // end if statement
		
		else
		{
			echo 'I am sorry you do not have permission to view this page.';
			$month_date_right = substr(date('m'),1);
			echo '<a href="calendar.php?month='.$month_date_right.'&year='.date('Y').'">Back to Calendar</a>';
		}
	}
	
	//run this script only if the logout button has been clicked
		elseif(isset($_POST['logout']))
		{
			//empt the $_SESSION array
				$_SESSION = array();
			//end session and redirect
				session_destroy();
				header('Location: http://localhost/Church/login.php');
				exit;
		}

		else
		{
			echo 'I am sorry you do not have access to this page.';
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