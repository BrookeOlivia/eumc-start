<?php session_start();

	if(isset($_SESSION['user']))
	{
		$month_date_right = substr(date('m'),1);
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

		a, p, ul, li
		{
			color: white;
			margin-left: 50px;
			font-size: 1.3em;
		}

		h1
		{
			color: white;
			margin-left: 50px;
			font-size: 4em;
		}

	</style>

</head>
<body>
		<?php
			$word = $_POST['txtword'];
			$pronunciation = $_POST['txtpronunciation'];
			$definition = $_POST['txtdefinition'];
			$date =$_POST['txtDate'];


			$formattedDate = strtotime($date);

			if(isset($_POST['submit']))
			{	
				if(isset($word) && isset($pronunciation) && isset($definition) && isset($date))
				{	$date = 
					$date = date('Y-m-d',$formattedDate);
					//echo $date;

					//set up your information here
					$hostname = "";
					$database = "";
					$username = "";
					$password = "";

					//Make a new connection object
					$conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);

					$sql = "INSERT INTO wod(word, dateUsed, definition, pronunciation) VALUES( '$word', '$date', '$definition', '$pronunciation')";
					//echo "<p>$sql</p>";

					$count = $conn->exec( $sql );

					if( $count > 0 )
					{
						echo "<h1>Congratulations</h1>";
						echo "<p>The Database has been Updated!</p>";
						echo "<ul>";
							echo "<li>Word: $word</li>";
							echo "<li>Pronunciation: $pronunciation</li>";
							echo "<li>Definition: $definition</li>";
							echo "<li>Date: $date</li>";
						echo "</ul>";

						echo '<a href="calendar.php?month='.$month_date_right.'&year='.date('Y').'">Back to Calendar</a>';

					}
					else
					{	
						echo "<h1>Error!</h1>";
						echo "<p>I'm sorry but an error occured while trying to insert this word OR this word already exists in the database.  Please check to see if the word is 
						<br>
						on the Word of the Day list.  If it is not then plase try again.  If you still get this message then please contact the Web Master.</p>";
					}

				}
			}
			else
			{
				echo "I am sorry you aren't not allowed to view this page";
			}
		?>

</body>
</html>