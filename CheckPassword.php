<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- ONLY EDIT INSIDE HERE -->
	<title>Evangelical United Methodist Church - Login</title>
	<script type="text/javascript" src="assets/js/mootools-core-1.4.4-full-compat-yc.js"></script>
    <!--[if (gte IE 6)&(lte IE 8)]>
          <script type="text/javascript" src="selectivizr.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="assets/css/styles.css">

	<!-- END EDIT AREA -->

	<script src="assets/js/libs/modernizr-2.5.3.min.js"></script>
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
			<section style="height: 430px;">

<?php
	
	if(isset($_POST['Login']))
	{
		$uname= trim($_POST['txtUsername']);
		$psw =trim($_POST['txtPassword']);
 		$encrypted_pwd = md5($psw);

	//set up your information here
		$hostname = '';
		$database = '';
		$username = '';
		$password = '';

	//Make a new connection object
		$conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);

	//write a SQL query string
		$sql = "SELECT * FROM login WHERE username='$uname' AND password ='$encrypted_pwd'";

	//run the query against the connected dtabase, then...
	//store the result (all records matching the query)
		$result = $conn->query($sql);
		
			$login_array = array();
			foreach ($result as $row)
			//foreach ($value as $users)
			{
				
				$login_pre_array= "$row[username], $row[password], $row[f_name], $row[l_name]";
				$login_array[] = explode(",", $login_pre_array);
				//echo "<br>";
				//echo $row[0];

				if($row[0] === $uname && $row[1] === $encrypted_pwd)
				{
					echo "You are logged in";
					//echo $row[3];
					$month_date_right = substr(date('m'),1);
					echo '<meta http-equiv="refresh" content="0;url=calendar.php?username='. $row[0] . '&password='. $row[1].'&f_name='.$row[2].'&l_name='.$row[3].'&month='.$month_date_right.'&year='.date('Y').'">';
				}
			}
			
			echo "I'm sorry your login information is wrong. Please try again. \n"; 
			echo  '<a href="http://www.evangelicalunitedmethodist.org/login.php">login</a> ';
			$email = "eumc.webmaster@gmail.com";
			$name = "eumc_web_master";
			$names = "webmaster";
			echo 'If you know your information is correct then please contact the webmaster at <a href="email.php?email='. $email.'&names='.$names.'&name='.$name.'"'.'>eumc.webmaster@gmail.com</a>';



			//echo'<meta http-equiv="refresh" content="0;url=http://localhost/Church/login.php">';
				
			//print_r($login_array);

	}
	
	else
	{
		echo 'I am sorry you are not using the login form to enter this portion of the site. Please ';
		echo  '<a href="http://www.evangelicalunitedmethodist.org/login.php">login</a>';
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

