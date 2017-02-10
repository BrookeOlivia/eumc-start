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
		.selectedevents
		{
			text-decoration: underline;
			color: lightblue;
			font-weight: bold;
		}
	</style>
	<!-- ONLY EDIT INSIDE HERE -->
	<title>Meetings - Evangelical United Methodist Church</title>
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
					if(filter_input(INPUT_GET, 'event_id') && filter_input(INPUT_GET, 'event_name') && filter_input(INPUT_GET, 'Event_date') && filter_input(INPUT_GET, 'start_time') && filter_input(INPUT_GET, 'end_time') && filter_input(INPUT_GET, 'description'))
					{	
						$Event_name = filter_var($_GET['event_name']);
						$Event_date = filter_var($_GET['Event_date']);
						$Start = filter_var($_GET['start_time']);
						$End = filter_var($_GET['end_time']);
						$Description = filter_var($_GET['description']);
						$event_ID = filter_var($_GET['event_id']);
				?>

						<table class="event_view">
							<caption>Event Details</caption>
								<tr>
									<th scope="col">Event Name</th>
									<th scope="col">Event Date</th>
									<th scope="col">Start Time</th>
									<th scope="col">End Time</th>
									<th scope="col">Event Description</th>
								</tr>
								<tr>
									<th scope="row"><?php echo $Event_name; ?></th>
									<td><?php echo $Event_date; ?></td>
									<td><?php echo date('h:i A',strtotime($Start)); ?></td>
									<td><?php echo date('h:i A',strtotime($End));; ?></td>
									<td><?php echo $Description; ?></td>
								</tr>

						</table>
				<?php 
					}elseif(!filter_input(INPUT_GET, 'event_id') && !filter_input(INPUT_GET, 'event_name') && !filter_input(INPUT_GET, 'Event_date') && !filter_input(INPUT_GET, 'start_time') && !filter_input(INPUT_GET, 'end_time') && !filter_input(INPUT_GET, 'description'))
					{
						echo "<h1>There is no information for your event!</h1>";
					}else
					{	
						$day = filter_var($_GET['day']);
						
						
						$selected_date = $day;
						//echo $selected_date;
						echo "<br>";
						//$date = date('Y-m-d', $selected_date);
						list($selected_year, $selected_month, $selected_day) = explode('-',$date);

//						echo $selected_date;

						
						//set up your information here
							$hostname = '';
							$database = '';
							$username = '';
							$password = '';

						//Make a new connection object
							$conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);

						//write a SQL query string
							$sql = "SELECT * FROM EVENTS WHERE Event_date ='". $selected_date ."'";

						//run the query against the connected dtabase, then...
						//store the result (all records matching the query)
							$result = $conn->query($sql);

				?>
						<table class="event_view">
							<caption>Event Details</caption>
								<tr>
									<th scope="col">Event Name</th>
									<th scope="col">Event Date</th>
									<th scope="col">Start Time</th>
									<th scope="col">End Time</th>
									<th scope="col">Event Description</th>
								</tr>
								
				<?php
								foreach ($result as $key => $value) 
								{
									
									$start = $value['start_time'];
									$start =  date('h:i A', strtotime($start));
									$end = $value['end_time'];
									$end = date('h:i A',strtotime($end));
									
									$name = $value['event_name'];
									$date = $value['Event_date'];
									//$start = $value['start_time'];
									$end = $value['end_time'];
									$description = $value['description'];
									echo "<tr>";
										echo'<th scope="row">'.$name.'</th>';
										echo '<td>'.$date.'</td>';
										echo '<td>'.date('h:i A', strtotime($start)).'</td>';
										echo '<td>'.date('h:i A',strtotime($end)).'</td>';
										echo '<td>'.$description.'</td>';
									echo '</tr>';
								}
				?>
											
										</table>
				<?php
			
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
<script>window.jQuery || document.write('<script src="/assest/js/libs/jquery-1.7.1.min.js"><\/script>')</script>
<script src="/assets/js/script.js"></script>

</body>
</html>
