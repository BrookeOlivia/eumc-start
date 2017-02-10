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
			<title>Prayer Requests- Evangelical United Methodist Church</title>
			<script type="text/javascript" src="/assets/js/mootools-core-1.4.4-full-compat-yc.js"></script>
    		<!--[if (gte IE 6)&(lte IE 8)]>
          		<script type="text/javascript" src="selectivizr.js"></script>
    		<![endif]-->
     		<!--[if gte IE 9]>
  				<style type="text/css">
    				.gradient 
    				{
    					filter: none;
   					}
     			</style>
			<![endif]-->
    		<link rel="stylesheet" href="/assets/css/styles.css">

			<!-- END EDIT AREA -->

			<script src="/assets/js/libs/modernizr-2.5.3.min.js"></script>
		</head>
		<body class="more">

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

	<?php
	if(isset($_SESSION['user']))	
	{
		//echo $_SESSION['user'];
		echo "<br>";
		if ($_SESSION['user'] == "boblivia" || $_SESSION['user'] == "eumc_secretary" || $_SESSION['user'] == "eumc_pastor")
		{
?>
		
						<h2 style=" float: left; ">More Information Requests</h2>
				
						<?php

							//set up your information here
								$hostname = "localhost";
								$database = "eumc_visitors";
								$username = "eumc_user1";
								$password = "Gide0ndunn";

							//Make a new connection object
								$conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);

							//write a SQL query string
								$sql = "SELECT  info_id, street, city, state, Zip_code, comments, marital_status, ministries, worship, preschool, all_options, other_option, first_name, last_name, email, phone FROM More_Info";

							//run the query against the connected dtabase, then...
							//store the result (all records matching the query)
								$result = $conn->query($sql);
								echo "<br>";
								echo "<br>";
								echo "<br>";
								echo '<table class="more_info_table">';
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
											echo "Address";
										echo '</th>';

										echo '<th scope="col">';
											echo "Phone Number";
										echo '</th>';

										echo '<th scope="col">';
											echo "Marital Status";
										echo '</th>';

										echo '<th scope="col">';
											echo "Ministries";
										echo '</th>';
				
										echo '<th scope="col">';
											echo "Worship";
										echo '</th>';
						
										echo '<th scope="col">';
											echo "Preschool";
										echo '</th>';
				
										echo '<th scope="col">';
											echo "All Options";
										echo '</th>';
									echo "</tr>";

									foreach ($result as $line => $row)
									{	
										$first = $row['first_name'];
										$last = $row['last_name'];
										$email = $row['email'];
										$id_number = $row['info_id'];
										$phone= $row['phone'];
										$city = $row['city'];
										$state = $row['state'];
										$street = $row['street'];
										$zip = $row['Zip_code'];
										$ministries = $row['ministries'];
										$worship = $row['worship'];
										$preschool = $row['preschool'];
										$all = $row['all_options'];
										$m_status = $row['marital_status'];
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
											echo $street;
											echo $city .",".$state .$zip;
										echo "</td>";
										echo "<td>";
											echo $phone;
										echo "</td>";
										echo "<td>";
											echo $m_status;
										echo "</td>";
										echo "<td>";
											echo $ministries;
										echo "</td>";
										echo "<td>";
											echo $worship;
										echo "</td>";
										echo "<td>";
											echo $preschool;
										echo "</td>";
										echo "<td>";
											echo $all;
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
	if(isset($_POST['logout']))
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