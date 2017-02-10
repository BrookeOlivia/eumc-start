<?php session_start();
$month_date_right = 0;
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
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
  <script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
 
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
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

		a, p
		{
			color: white;
		}

	</style>

</head>
<body>

	<a id="editform"></a>
	<p>Your date must be in the following format in order for it to be entered into our database:
	<br>
		Year-Month-Day
	<br>
		2013-01-24
	</p>
		<form method="post" action="wordInsert.php" style="width: 500px;">
			<fieldset>
				<legend>Word of the Day</legend>

			<div style="clear: both;">
				<label style="float: left; width: 180px"for="txtword">Word:</label>
				<input type="text" name="txtword" id="txtword" style="width: 295px">
			</div>
			

			<div style="clear: both;">
				<label style="float: left; width: 180px"for="txtpronunciation">Pronunciation:</label>
				<input type="text" name="txtpronunciation" id="txpronunciation" style="width: 295px">
			</div>
			<div style="clear: both;">
				<label style="float: left; width: 180px"for="txtdefinition">Definition:</label>
				<textarea name="txtdefinition" id="txtdefinition" style="width: 295px" rows="8" cols="15"></textarea>
			</div>

			<div style="clear: both;">
				<label style="float: left; width: 180px"for="datepicker">Date:</label>
				<input type="text" name="txtDate" id="datepicker" style="width: 295px">
			</div>

			<input type="submit" name="submit" value="Add Word" style="float: right; margin-top: 20px; margin-right: 10px;">

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