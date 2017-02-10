<?php session_start();

	if(isset($_SESSION['user']))
	{
		echo $_SESSION['user']. " you can CREATE, EDIT, or DELETE events here.";
		echo "<br>";
		$month_date_right = substr(date('m'),1);
		echo '<a href="calendar.php?month='.$month_date_right.'&year='.date('Y').'">Back to Calendar</a>';
	}

//run this script only if the logout button has been clicked
if(isset($_POST['logout']))
{
	//empt the $_SESSION array
	$_SESSION = array();
	//end session and redirect
	session_destroy();
	header('Location: http://www.evangelicalunitedmethodist.org/login.php');
	exit;
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Calendar Update Form</title>
	<style>
		body
		{
			background-color: grey;
		}
		form
		{
			margin-left: 50px;
		}
		h1
		{
			width: 500px;
			text-align: center;	
			margin-top: 80px;
			background-color: silver;
			box-shadow: 3px 8px black;
			text-shadow: 1px 1px white;
			margin-left: 50px;
		}

		fieldset
		{
			border: 3px solid black;
			width: 490px;
			background-color: #999;
		}
		
		legend
		{
			border: 2px solid black;
			padding: 3px;
			margin-bottom: 10px;
			background-color: silver;
			text-shadow: 1px 1px white;
			box-shadow: 4px 4px #555;
			margin: 2px;
		}

	</style>

</head>
<body>
	<?php
		$timeformat = "1 AM = 01 \n 2 AM = 02 \n 3 AM = 03 \n 4 AM = 04 \n 5 AM = 05 \n 6 AM = 06 \n 7 AM = 07 \n 8 AM = 08 \n 9 AM = 09 \n 10 AM = 10 \n 11 AM= 11 \n 12 AM = 12 \n 1 PM = 13 \n 2 PM = 14 \n 3 PM = 15 \n 4 PM =16 \n 5PM =17 \n 6PM = 18 \n 7 PM = 19 \n 8 PM = 20 \n 9 PM= 21 \n 10 PM = 22 \n 11 PM = 23 \n 12 PM = 24";
	echo'<a href="logout.php">Log Out</a>';

	?>
	<br>
	<a href="#editform">EDIT an Event</a>
	<br>
	<a href="#deleteform">DELETE an Event</a>

	<h1>Add Event to Calendar</h1>
		<form method="post" action="calendar_update.php" style="width: 500px;">
			<fieldset>
				<legend>Add Event</legend>

			<div style="clear: both;">
				<label style="float: left; width: 180px"for="txtevent_id">Username:</label>
				<input type="text" name="txtevent_id" id="txtevent_id" style="width: 295px" value="<?php echo $_SESSION['user']?>" readonly="readonly">
			</div>
			
			<div style="clear: both;">
				<label style="float: left; width: 180px"for="txtEvent_name">Event Name:</label>
				<input type="text" name="txtEvent_name" id="txtEvent_name" style="width: 295px">
			</div>

			<div style="clear: both;">
				<label style="float: left; width: 180px"for="txtDate">Date:</label>
				<input type="text" name="txtDate" id="txtDate" style="width: 295px" value=" YYYY-MM-DD">
			</div>

			<div style="clear: both;">
				<label style="float: left; width: 180px"for="txtStart"><abbr title="<?php echo $timeformat ?>">Start Time:</abbr> </label>
				<input type="text" name="txtStart" id="txtStart" style="width: 295px" value=" HH:MM:SS - Military format">
			</div>

			<div style="clear: both;">
				<label style="float: left; width: 180px"for="txtEnd"><abbr title="<?php echo $timeformat ?>">End Time:</abbr></label>
				<input type="text" name="txtEnd" id="txtEnd" style="width: 295px" value=" HH:MM:SS">
			</div>

			<div style="clear: both;">
				<label style="float: left; width: 180px"for="txtDescription">Description: </label>
				<textarea name="txtDescription" id="txtDescription"  rows= "10" cols="40"><?php  echo "Description of Event";  ?></textarea>
			</div>

			<input type="submit" name="submit" value="Add Event" style="float: right; margin-top: 20px; margin-right: 10px;">

		</fieldset>
		</form>
	

		<?php
			echo "<br>";
			echo '<a href="calendar.php?month='.$month_date_right.'&year='.date('Y').'">Back to Calendar</a>';

			if(filter_input(INPUT_GET, 'event_id') && filter_input(INPUT_GET, 'event_name') && filter_input(INPUT_GET, 'Event_date') && filter_input(INPUT_GET, 'start_time') && filter_input(INPUT_GET, 'end_time') && filter_input(INPUT_GET, 'description'))
			{	
				$Event_name = filter_var($_GET['event_name']);
				$Event_date = filter_var($_GET['Event_date']);
				$Start = filter_var($_GET['start_time']);
				$End = filter_var($_GET['end_time']);
				$Description = filter_var($_GET['description']);
				$event_ID = filter_var($_GET['event_id']);
				echo $Event_name;
		
			}
		?>
	<a id="editform"></a>
	<h1>Edit <strong>Event on Calendar</strong></h1>
		<form method="post" action="calendar_edit.php" style="width: 500px;">
			<fieldset>
				<legend>Edit Event</legend>

			<div style="clear: both;">
				<label style="float: left; width: 180px"for="txtevent_id">Username:</label>
				<input type="text" name="txtevent_id" id="txtevent_id" style="width: 295px" value="<?php echo $_SESSION['user']?>" readonly="readonly">
			</div>
			
		

			<div style="clear: both;">
				<label style="float: left; width: 180px"for="txtevent_id">Event ID:</label>
				<input type="text" name="txtevent_id" id="txtevent_id" style="width: 295px" value="<?php echo $event_ID;?>" readonly="readonly">
			</div>
			<div style="clear: both;">
				<label style="float: left; width: 180px"for="txtEvent_name">Event Name:</label>
				<input type="text" name="txtEvent_name" id="txtEvent_name" style="width: 295px" value="<?php echo $Event_name;?>">
			</div>

			<div style="clear: both;">
				<label style="float: left; width: 180px"for="txtDate">Date:</label>
				<input type="text" name="txtDate" id="txtDate" style="width: 295px" value="<?php echo $Event_date; ?>">
			</div>

			<div style="clear: both;">
				<label style="float: left; width: 180px"for="txtStart"><abbr title="<?php echo $timeformat ?>">Start Time:</abbr></label>
				<input type="text" name="txtStart" id="txtStart" style="width: 295px" value="<?php echo $Start; ?>">
			</div>

			<div style="clear: both;">
				<label style="float: left; width: 180px"for="txtEnd"><abbr title="<?php echo $timeformat ?>">End Time:</abbr></label>
				<input type="text" name="txtEnd" id="txtEnd" style="width: 295px" value="<?php echo $End; ?>">
			</div>

			<div style="clear: both;">
				<label style="float: left; width: 180px"for="txtDescription">Description: </label>
				<textarea name="txtDescription" id="txtDescription"  rows= "10" cols="40"><?php echo trim($Description); ?></textarea>
			</div>
			


			<input type="submit" name="submit" value="Update Calendar" style="float: right; margin-top: 20px; margin-right: 10px;">

		</fieldset>
		</form>

		<?php
			echo "<br>";
			echo '<a href="calendar.php?month='.$month_date_right.'&year='.date('Y').'">Back to Calendar</a>';
		?>
 	<a id="deleteform"></a>
		<h1>Delete Event on Calendar</h1>
		<form method="post" action="calendar_delete.php" style="width: 500px;">
			<fieldset>
				<legend>Delete Event</legend>

			<div style="clear: both;">
				<label style="float: left; width: 180px"for="txtevent_id">Username:</label>
				<input type="text" name="txtevent_id" id="txtevent_id" style="width: 295px" value="<?php echo $_SESSION['user']?>" readonly="readonly">
			</div>

			<div style="clear: both;">
				<label style="float: left; width: 180px"for="txtevent_id">Event ID:</label>
				<input type="text" name="txtevent_id" id="txtevent_id" style="width: 295px" value="<?php echo $event_ID;?>" readonly="readonly">
			</div>
			
			<div style="clear: both;">
				<label style="float: left; width: 180px"for="txtEvent_name">Event Name:</label>
				<input type="text" name="txtEvent_name" id="txtEvent_name" style="width: 295px" value="<?php echo $Event_name;?>">
			</div>

			<div style="clear: both;">
				<label style="float: left; width: 180px"for="txtDate">Date:</label>
				<input type="text" name="txtDate" id="txtDate" style="width: 295px" value="<?php echo $Event_date; ?>">
			</div>

			<div style="clear: both;">
				<label style="float: left; width: 180px"for="txtStart"><abbr title="<?php echo $timeformat ?>">Start Time:</abbr></label>
				<input type="text" name="txtStart" id="txtStart" style="width: 295px" value="<?php echo $Start; ?>">
			</div>

			<div style="clear: both;">
				<label style="float: left; width: 180px"for="txtEnd"><abbr title="<?php echo $timeformat ?>">End Time:</abbr></label>
				<input type="text" name="txtEnd" id="txtEnd" style="width: 295px" value="<?php echo $End; ?>">
			</div>

			<div style="clear: both;">
				<label style="float: left; width: 180px"for="txtDescription">Description: </label>
				<textarea name="txtDescription" id="txtDescription"  rows= "10" cols="40"><?php echo trim($Description); ?></textarea>
			</div>


			<input type="submit" name="submit" value="Delete Event" style=" float: right; margin-top: 20px; margin-right: 10px;">

			</fieldset>
		</form>


		<?php 
			echo "<br>";
			echo '<a href="calendar.php?month='.$month_date_right.'&year='.date('Y').'">Back to Calendar</a>';

	//		$glory =filter_var( $Event_name, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE); 

			//$chester = filter_input(filter_sanatize_url());
	//	echo $glory;

	//	var_dump(filter_var('bob227@email.vccs.edu', FILTER_VALIDATE_EMAIL));
	//	echo filter_var('http://www.google.com', FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED);
	//	print_r($glory);
		
		?>

</body>
</html>