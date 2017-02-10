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
		.selectedministries
		{
			text-decoration: underline;
			color: lightblue;
			font-weight: bold;
		}
	</style>
	<!-- ONLY EDIT INSIDE HERE -->
	<title> Evangelism - Evangelical United Methodist Church</title>
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

<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
 
    <script>
    $(function() {
        $( "#tabs" ).tabs();
    });
    </script>

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
				<h2>Word of the Day</h2>
				
				<p>
					A lot of times in Church (and in reading the Bible) we hear words such as Ecumerical, Maundy Thursday, Cherub, Vex,
					and unless we stop to look up the meaning of that word we lose the whole meaning of what we're reading.  Listed below 
					is some of those words and for the most part where to find them in scripture.  Now for the Church words, see you in Church!
				</p>

	<?php

	//set up your information here
		$hostname = "";
		$database = "";
		$username = "";
		$password = "";

	//Make a new connection object
		$conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);

	//write a SQL query string
		

		$sql = "SELECT word, definition, pronunciation FROM wod ORDER BY word";
		$result = $conn->query($sql);
	?>
	<table class="wod email_info">
		<caption>Word of the Day</caption>
		<tr>
			<th scope="col">Word</th>
			<th scope="col">Pronunciation</th>
			<th scope="col">Definition</th>
		</tr>
	<?php

		foreach ($result as $row) 
		{
			echo "<tr>";
			echo '<th scope="row">'.$row['word']. '</th>';
			echo "<td>".$row['pronunciation']."</td>";
			echo "<td>".$row['definition']."</td>";
		}

		?>
	</table>
			</section>
		</article>

		<footer>
		   <?php include('../Includes/footer.inc.php'); ?>
		</footer>
	</div> 









<!-- END OF OUR CODE -->




<!-- DON'T TOUCH ANYTHING BELOW THIS LINE! -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/assets/js/libs/jquery-1.7.1.min.js"><\/script>')</script>
<script src="/asset/js/script.js"></script>

</body>
</html>