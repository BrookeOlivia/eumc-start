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

	//Getting variables from form
		$Event_name = $_POST["txtEvent_name"];
		$Event_date = $_POST["txtDate"];
		$Start = $_POST["txtStart"];
		$End =  $_POST["txtEnd"];
		$Description = $_POST['txtDescription'];
		$Event_id = $_POST['txtevent_id'];
		$usernames = $_SESSION['user'];
	//Use ? marks in the query to denote the parameters that you will replace with data later
		$query = "DELETE FROM EVENTS WHERE event_id ='" . $Event_id . "'";
	 
	//send the query to the database so it can prepare a "statement" to use the incoming data
		$statement = $conn->prepare($query);

	//bind each parameter with the data, the number representing the order of the ? marks
		$statement->bindParam(1, $Event_name);
		$statement->bindParam(2, $Event_date);
		$statement->bindParam(3, $Start);
		$statement->bindParam(4, $End);
		$statement->bindParam(5, $Description);
		$statement->bindParam(6, $usernames);

	//execute the statement you just prepared; remember it has a handle on the $conn connection.
		$statement->execute();

		echo "<p>$query</p>";

		if( $statement->rowCount() > 0 )
		{
   			echo "Successes! Delete: " . $statement->rowCount();
   			// If it is successful then it should redirect the user back to the calendar
   			$month_date_right = substr(date('m'),1);
				echo '<meta http-equiv="refresh" content="0;url=http://evangelicalunitedmethodist.org/calendar.php?month='.$month_date_right.'&year='.date('Y').'">';
		}
		else
		{
		   echo "FAILURE!";
		   print_r(error_get_last());
		}

		$month_date_right = substr(date('m'),1);

		echo '<a href="http://www.evangelicalunitedmethodist.org/calendar.php?month='.$month_date_right.'&year='.date('Y').'">Return to Calender</a>';


?>