<?php session_start();
// Identification of user who is making the changes
	//echo $_SESSION['userid']. $_SESSION['last_name'] .$_SESSION['first_name'];

	
	echo "<h1>Events Calender</h1>";	

	if(isset($_GET['username']))
	{

		$_SESSION['user'] = $_GET['username'];
		echo '<h2 style="margin-left: 20px">Welcome ' .$_SESSION['user'] . '</h2>';
		echo "Click on an Event to modify it or click Add Event To Caledar to create your own event";
	}

	else //session is set
	{
		echo $_SESSION['user'];
	}

	echo '
	<style>
		nav
		{
			width: 100%;
		}

		nav ul
		{
			list-style-type: none;
			overflow: hidden;
			margin: 0;	
			padding: 0;
			margin-left: 60px;
		}

		nav ul li
		{
			float: left;
			padding-bottom: 5px;
		}

		nav ul li a
		{
			display: block;
			text-decoration: none;
			text-align: center;
			margin-right: 15px;
			padding-top: 10px;
			padding-right: 10px;
			padding-left: 5px;
		}

		nav ul li a:hover
		{
			position: static;
		}
	</style>'; 
	echo'<nav class="loginCalendarNav">';
			echo"<ul>";
				echo '<li><a href="prayer_requests_data.php">Prayer Requests</a></li>';
				echo '<li><a href="more_info_data.php">More Information Requests</a></li>';
				echo '<li><a href="my_requests.php">My Email Request</a></li>';
				echo '<li><a href="letter_creation_webversion.php" target="blank">Instruction</a></li>';
				if($_SESSION['user'] == 'eumc.evangelism')
				{
					echo'<li><a href="wod.php">Word of the Day</a></li>';
				}
				echo '<li><a href="logout.php">Log Out</a></li>';
			echo "</ul>";
	echo"</nav>";


	//set up your information here
		$hostname = '';
		$database = '';
		$username = '';
		$password = '';

	//Make a new connection object
		$conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);

	//write a SQL query string
		

		$sql = "SELECT event_id, event_name,Event_date,start_time,end_time, description, username FROM EVENTS ORDER BY Event_date";

	//run the query against the connected dtabase, then...
	//store the result (all records matching the query)
		$result = $conn->query($sql);

		//echo $lastdate;

		$date =time();
		$day = date('d', $date);
		//echo date('Y-m-d',$date);
		echo "<br>";
		
		//$month=$_GET['month'];
		//$year= $_GET['year'];
		//echo $year;
		$calendar_month_start = date('m', $date);

		if( $_GET)
		{
			if($_GET['month'] <10  )
			{	
				//$year= date('Y', $year);
				$month = '0'. $_GET['month'];
				$year = $_GET['year'];
				//echo $month. $year;
				
			}
			elseif ($_GET['month'])
			{
				$month =$_GET['month'];
				$year = $_GET['year'];
			}
			else
			{
					//echo "I'm Sorry you don't have a month or year selected.  Please Try again.";
			}
		}

		else
		{
			echo "I'm sorry you don't have permission to view this page.  If you should have permission then please contact the webmaster.";
			//$month = date('m', $date);
			//$year = date('Y', $date);
		}

		$days_in_month = cal_days_in_month(0, $month , $year);

		$first_day = mktime(0,0,0, $month, 1, $year);
		$first_days = date("Y-m-d", $first_day);
		$lastday = "$year-$month-$days_in_month";
		$first_of_month = "$year-$month-01";
		//echo $first_days ."********". $lastday;
		$days_in_month = cal_days_in_month(0, $month , $year);
		$lastday_of_month = date('d', $days_in_month);
		$lastmonth =  date('m', $days_in_month);
		$lastyear = date('Y', $days_in_month);

		$lastdate =  strtotime(date('$year-$month-01'));
		
	echo "<ul>";

		$calendar_array= array();
			foreach ($result as $row => $dates) 
			{ 
				$date_event = $dates['Event_date'];

				if($first_of_month <= $dates['Event_date'] && $dates['Event_date'] <= $lastday)
				{
					// converts date to a Linux date
						$calendar_date = strtotime($dates['Event_date']);

					//If $lastdate does not equal the $calendar_date then echo as usual
						if ($lastdate != $calendar_date) 
						{
							//echo "<br> " . $dates['Event_date'];
							//echo "<li>" . $dates['event_name'] . "</li>";
							$lastdate = $calendar_date;
							//$calendar_array += array('Event_date' => "$dates[Event_date]", 'Event_name'=> "$dates[event_name]",'start_time' => "$dates[start_time]", 'end_time' => "$dates[end_time]", 'description' => "$dates[description]");

						}
			
					//BUT if $lastdate does equal $calendar_date then don't reprint date and just echo event!
						elseif($lastdate == $calendar_date)
						{
							//echo "<li>" . $dates['event_name'] . "</li>";
							$lastdate = $calendar_date;
							//$calendar_array += array('Event_date' => "$dates[Event_date]", 'Event_name'=> "$dates[event_name]",'start_time' => "$dates[start_time]", 'end_time' => "$dates[end_time]", 'description' => "$dates[description]");
						}
					
					// grabbing the information so that we can put it in the array
						$calendar_pre_array="$dates[Event_date] , $dates[event_name] , $dates[start_time] , $dates[end_time] , $dates[description], $dates[event_id], $dates[username]";
						//echo $calendar_pre_array;
					
					// The calendar array
						$calendar_array[]= explode(",", $calendar_pre_array);
				}
				else
				{
					//echo "If statement doesn't work.";
					//print_r($calendar_array);
				}
				
			}
		echo "</ul>";
					
			//print_r($calendar_array);
			//$calendar_array[0][0] will produce the date of the array
		
		
// beginning of calendar 
		$datetime = $dates['Event_date'];
		//echo $datetime;

		$datedays = date('d',strtotime($dates['Event_date']));
		//echo $datedays;
		$datemonth = date('M',strtotime($dates['Event_date']));
		//echo $datemonth;
		$dateyear = date('Y',strtotime($dates['Event_date']));
		//echo $dateyear;
		
		//$days = date('d', $datedays);

	
		$title = date('F', $first_day);
		$day_of_week = date('D', $first_day);

		// Establishes the day of the week
			switch($day_of_week)
			{
				case "Sun": $blank = 0; break;
				case "Mon": $blank = 1; break;
				case "Tue": $blank = 2; break;
				case "Wed": $blank = 3; break;
				case "Thu": $blank = 4; break;
				case "Fri": $blank = 5; break;
				case "Sat": $blank = 6; break;
			} 


		$days_in_month = cal_days_in_month(0, $month , $year);
		echo '<table border=6 width=1000 style="margin-top: 20px; margin-left: 100px; ">';
		echo '<tr>';
		//Select month control
			$select_month_control= '<select name="month" id="month">';
			for($x = 1; $x<= 12; $x++)
			{
				$select_month_control.='<option value="'.$x.'"'.($x != $month ? '' : 'selected="selected"'). '>'.date('F',mktime(0,0,0,$x,1,$year)).'</option>';
			}
			$select_month_control .= '</select>';

		// Select Year control
			$year_range = 7;
			$select_year_control = '<select name="year" id="year">';
			for($x = ($year-floor($year_range/2)); $x <= ($year+floor($year_range/2)); $x++)
			{
				$select_year_control .= '<option value="' .$x.'"'.($x != $year ? '' : 'selected="selected"').'>'.$x.'</option>';
			}
			$select_year_control .= "</select>";
		
		// Next Month
			$next_month_link = '<a style="display:inline"href="?month='.($month != 12 ? $month +1 : 1) . '&year=' .($month != 12 ? $year : $year +1). '"class="control">&#62</a>';
		
		// Previous Month
			//If the month is January (1) then you need to subject 1 from the year to have the right year. (aka January 2013 goes back to December 2012 not 2014)
			if($month == 1)
			{
				$previous_month_link = '<a  style ="display: inline"href="?month='.($month != 1 ? $month -1 : 12).'&year='.($month != 1 ? $year :$year - 1). '"class="control">&#60</a>';

			}
			//If it is not the first month then do the regular addition of a year if needed.
			else
			{
				$previous_month_link = '<a  style ="display: inline"href="?month='.($month != 1 ? $month -1 : 12).'&year='.($month != 1 ? $year :$year + 1). '"class="control">&#60</a>';
			}			
		//Controls
			//$controls ='<form method="get" action="calendar.php>'.$select_month_control.$select_year_control.'&nbsp;<input type="submit" name="submit" value="GO"/></form>';
			//echo '<div style="width: 219px; margin-left:880px;><style>select:first-of-type{margin-left: 98px; margin-bottom: 10px;}</style>' .$controls. "</div>";

		echo "<br><a style='margin-left: 95px; text-decoration: none; font-size: 1.1em; display: inline; padding: 5px;' href=calendar_update_FORM.php>Add Event to Calendar</a>";

		echo '<th colspan=60>'.$previous_month_link. '&nbsp;&nbsp;&nbsp;'.$title .$year .'&nbsp;&nbsp;&nbsp;'. $next_month_link.'</th>';
		echo "</tr>";
		echo "<tr>";
		echo "<th width=62>Sunday</th>";
		echo "<th width=62>Monday</th>";
		echo "<th width=62>Tuesday</th>";
		echo "<th width=62>Wednesday</th>";
		echo "<th width=62>Thursday</th>";
		echo "<th width=62>Friday</th>";
		echo "<th width=62>Saturday</th>";
		echo "</tr>";

		$day_count = 1;

		
		echo "<tr>";

		while ($blank > 0) 
		{
			echo '<td style="background-color: silver"></td>';
			
			$blank = $blank-1;
			$day_count++;
		}

		// Variables that are associated with while($day_num <= $days_in_month)	
			$day_num = 1;
			$days = $datedays;
			$months = $datemonth;
			$years = $dateyear;

		// While loop that creates calendar
			while ($day_num <= $days_in_month) 
			{	

				echo "<td style='text-align:right; vertical-align: top; font-weight: bold; padding-right: 7px; padding-top: 4px; background: white;'> $day_num <br>"; 
				
				//Adds a 0 before any day that is below 10.  Allows for the comparison later on.
				if ($day_num < 10) 
				{
					$day_num = "0$day_num";
				}

				$calendarDay = $year. "-" . $month . "-". $day_num; 

				foreach ($calendar_array as $key => $value) 
					foreach($value as $aday)
				{
					// Makes $value a date and then formats the date into the correct format 
					//so that it can be compared to calendarDay
						$events_date = date_create($value[0]);
						$events_date_format = date_format($events_date, "Y-m-d");
			
					// if the calendar day equals an $Event_date ($value[0]) then echo the
					// Event name and the Event's Start time
						if($calendarDay === $events_date_format)
						{	
							//establishing Event start time format
								$startime = strtotime($value[2]);
								$startime = date('g:i A', strtotime($value[2]));
							
		
							//establishing Event end-time format
								$endtime = strtotime($value[3]);
								$endtime = date('g:i A', strtotime($value[3]));
									
							
							echo '<abbr style="text-align: center;" title="'. trim($startime) . " - " . trim($endtime) ."\n" . $value[4] .'"><a href="calendar_update_FORM.php?event_id=' .$value[5]. '&event_name='. $value[1] . '&Event_date=' .$value[0] . '&start_time=' . $value[2] . '&end_time=' . $value[3]. '&description='. $value[4].'">'. "<p style='font-weight: normal;text-align: left; margin-left: 10px; font-size: 1.01em;'> $value[1] <br> $startime </p></a></abbr>"; 
							echo "<br>";	
							//echo "<br>";
							break;					
						}
				}
			
				echo "</td>";
				$day_num++;
				$day_count++;

				if($day_count > 7)
				{
					echo "</tr><tr>";
					$day_count = 1;
				}

			}

		while( $day_count > 1 && $day_count <=7)
		{
			echo "<td></td>";
			$day_count++;
		}
		echo "</tr></table>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";

		echo "<style>
				body
				{
					background: lightblue;
				}
				
				table
				{
					background: silver; 
					border-color: blue; 
					border-collapse: collapse;
				} 

				h1
				{
					color: blue; 
					margin-left:30px;
				}

				tr:first-of-type
				{
					font-size: 2em; 
					letter-spacing: 3px; 
					background-color: white;
				} 

				th
				{
					width: 160px; 
					background-color: white;
				}

				a:link
				{
					text-decoration: none; 
					display:block;
				} 

				a:visited
				{
					color: blue;
				} 

				a:hover
				{
					background-color: lightgreen; 
					padding: 1px; 
					color: blue;
				}
		</style>";
?>	