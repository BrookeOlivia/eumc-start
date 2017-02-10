<?php session_start();

	if(isset($_SESSION['user']))
	{
		echo $_SESSION['user']. " you can CREATE, EDIT, or DELETE events here.";
		echo "<br>";
		$month_date_right = substr(date('m'),1);
		echo '<a href="calendar.php?month='.$month_date_right.'&year='.date('Y').'">Back to Calendar</a>';
	}

	//set up your information here
		$hostname = '';
		$database = '';
		$username = '';
		$password = '';

	//Make a new connection object
		$conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);

	//pulling variable from form
		$name = $_POST['txtEvent_name'];
		$date = $_POST['txtDate'];
		$start = $_POST['txtStart'];
		$end = $_POST['txtEnd'];
		$description = $_POST['txtDescription'];
		$usernames = $_SESSION['user'];
		


		$sql = "INSERT INTO EVENTS(event_name, Event_date, start_time, end_time, description,username) VALUES( '$name', '$date', '$start', '$end', '$description','$usernames')";
		echo "<p>$sql</p>";

		$count = $conn->exec( $sql );

		if( $count > 0 )
		{
			echo "Updated!";
			// If it is successful then it should redirect the user back to the calendar
				$month_date_right = substr(date('m'),1);
				echo '<meta http-equiv="refresh" content="0;url=http://evangelicalunitedmethodist.org/calendar.php?month='.$month_date_right.'&year='.date('Y').'">';
		}
		else
		{
			echo "Error!";
			print_r(error_get_last());
		}


		echo '<a href="http://www.evangelicalunitedmethodist.org/calendar.php?username='.$usern .'&f_name='.$fname.'&l_name='.$l_name.'">Return to Calender</a>';
?>

