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
	<title> Ministries - Evangelical United Methodist Church</title>
	<script type="text/javascript" src="/assets/js/mootools-core-1.4.4-full-compat-yc.js"></script>
    <!--[if (gte IE 6)&(lte IE 8)]>
          <script type="text/javascript" src="selectivizr.js"></script>
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
			<?php include('./Includes/nav.inc.php'); ?>
		</nav>


		<aside>
			<?php include('./Includes/Church_aside.inc.php'); ?>
		</aside>
				
		<article>
			<section class="min">
				<h2>Ministries</h2>
				
				<div id="minis">
					<a class="minmenu" href="#acolytes">Acolytes</a>
					<a class="minmenu" href="#careP">Care Packages</a>
					<a class="minmenu" href="#ed">Education</a>
					<a class="minmenu" href="#evang">Evangelism</a>
					<a class="minmenu" href="#fam">Family</a>
					<a class="minmenu" href="#careMW">Meals on Wheels</a>
					<a class="minmenu" href="#miss">Missions</a>
					<a class="minmenu" href="#music">Music</a>
					<a class="minmenu" href="#carePC">Prayer Chain</a>
					<a class="minmenu" href="#UMM">United Methodist Men</a>
					<a class="minmenu" href="#UMW">United Methodist Women</a>
					<a class="minmenu" href="#other">Other Ministries</a>
				</div>
				<img class="david" src="/assets/images/DSC06111.JPG" alt="david">
				
			<div id="acolytes">	
			<a id="acolytes"></a>			
				<h3>Acolytes:</h3>
				
				<p>Children's and youth ministry program designed to allow direct participation in our worship service.  You must be 8 years or older to be part of this ministry.  You will be responsible for learning your role in the service by bringing in and taking out the light of Jesus for worship services.</p>
				
				<table class="contact">
					<tr>
						<th scope="col">Contact Person</th>
						<th scope="col">Phone Number</th>
						<th scope="col">Email:</th>
					</tr>
					<tr>
						<td>Patty Bennington</td>
						<td>(540) 298-8073</td>
						<?php
							$email= "eumc.acolytes@gmail.com";
							$name = "eumc.acolytes";
							$names = "Patty Bennington";
							echo '<td><a href="email.php?email='. $email.'&names='.$names.'&name='.$name.'"'.'>Email Me</td>';
						?>
					</tr>	
				</table>
			</div>

			<div id="care">
				<h3>Congregational Care:</h3>
				<a id="careP"></a>
				<h4>Care Packages:</h4>				
				<p>We have a shut-in/elderly ministry.  We send care packages to them as well as other gifts throughout the year.  On a monthly bases these shut-ins receive communion as they wish.</p>

				<a id="careMW"></a>
				<h4>Meals on Wheels:</h4>
				<p>This ministry takes food to people who cannot get out their homes.  With this ministry cards are given as well as a time of fellowship.</p>
				

				<a id="carePC"></a>
				<h4>Prayer Chain:</h4>
				<p>The prayer chain allows emergency and important prayer concerns to be spread in a timely manner and receive prayer.  We also have a prayer box located in the narthax of our church.  The prayer box is locked and is seen by the members of our prayer group.</p>
				<p>If you would like prayer for something please fill out our <a href="prayer.php">Prayer Request</a> form.</p>

				<h4>Prayer</h4>
				<p>We have a prayer meeting on Tuesdays at 6:00pm in the prayer chapel. Some things that we continue to pray for are: unity, peace, friends, country, and those who are suffering.</p>
				
				<table class="contact">
					<tr>
						<th scope="col">Contact Person</th>
						<th scope="col">Phone Number</th>
						<th scop="col">Email:</th>
					</tr>
					<tr>
						<td>Peggy Breeden</td>
						<td>(540) 298-1314</td>
						<?php
							$email= "eumc.prayer.request@gmail.com";
							$name = "eumc.prayer.request";
							$names = "Peggy Breeden";
							echo '<td><a href="email.php?email='. $email.'&names='.$names.'&name='.$name.'"'.'>Email Me</td>';
						?>
					</tr>
					<tr>
						<td>Molly Good</td>
						<td>(540) 298-2812</td>
						<?php
							$email= "eumc.prayer.request@gmail.com";
							$name = "eumc.prayer.request";
							$names = "Molly Good";
							echo '<td><a href="email.php?email='. $email.'&names='.$names.'&name='.$name.'"'.'>Email Me</td>';
						?>
					</tr>
				</table>
				
			
			</div>
			
			<div id="education">
			<a id="ed"></a>
				<h3>Education:</h3>
					<p>We offer Sunday School for all ages of kids and six adult classes. Doing the summer we have Bible School.</p>
			  <p>Throughout the week we have many opportunities to dig into the word with Bible Studies.  If you would like to attend but would like child care please use the contact below to let us know in advance.</p>
					
					<img src="/assets/images/IMG_1293.JPG" alt="2013 Vacation Bible School: Everywhere Fun Fair" width="400" class="education">

					<p>6th through 8th graders can take a confirmation class with our Pastor at certain times throughout the year.</p>
					
					<table class="contact">
						<tr>
							<th scope="col">Contact Person</th>
							<th scope="col">Phone Number</th>
							<th scope="col">Email:</th>
						</tr>
						<tr>
							<td>Melissa Clemments</td>
							<td>(540) 652-2290</td>
							<?php
								$email= "eumc.ceducation@gmail.com";
								$name = "eumc.ceducation";
								$names = "Melissa Clemments";
							echo '<td><a href="email.php?email='. $email.'&names='.$names.'&name='.$name.'"'.'>Email Me</td>';
							?>
						</tr>	
					</table>
				</div>
			
			<div id="Evangelism">
			<a id="evang"></a>
				<h3><a href="http://evangelicalunitedmethodist.org/evangelism.php" >Evangelism</a>:</h3>
				<p>This ministry is in place to help to get in touch with people who have come to our church or people who are interested in coming to our church.  This ministry is in charge or maintaining our website as well keeping in contact with visitors.  This group goes out into the community and hands out door hangers to promote special events that are going on and try to get community involvement.  This group of people also plans revival services and other things of the like.  Most of all this ministry area is to share the Good News of Jesus Christ.</p>

				<table class="contact">
					<tr>
						<th scope="col">Contact Person</th>
						<th scope="col">Phone Number</th>
						<th scope="col">Email:</th>
					</tr>
					<tr>
						<td>Larry Winegard</td>
						<td>(540) 298-8676</td>
						<?php
							$email= "eumc.evangelism@gmail.com";
							$name = "eumc.evangelism";
							$names = "Larry Winegard";
							echo '<td><a href="email.php?email='. $email.'&names='.$names.'&name='.$name.'"'.'>Email Me</td>';
						?>
					</tr>	
				</table>
				
			</div>
			
			<div id="family">
			<a id="fam"></a>
				<h3>Family:</h3>
				<p>We encourage family time and fellowship with each other and other familes within our community.  
				We define families not just people who have children but also people without children and who are single.
				We have times for family fellowship, conversation, and multi-generational activites.  We have Movie Nights at the church and Themed Dinner Nights in our church fellowship hall.
				In addition we encourage sports activities activities that involve all age groups like our Softball Icecream Social at a local park.
			</p>

				<table class="contact">
					<tr>
						<th scope="col">Contact Person</th>
						<th scope="col">Phone Number</th>
						<th scope="col">Email:</th>
					</tr>
					<tr>
						<td>Charles Morris</td>
						<td>(540) 298-8920</td>
						<?php
							$email= "eumc.family@gmail.com";
							$name = "eumc.family";
							$names = "Charles Morris";
							echo '<td><a href="email.php?email='. $email.'&names='.$names.'&name='.$name.'"'.'>Email Me</td>';
						?>
					</tr>	
				</table>
			</div>
	
			<div id="missions">
			<a id="miss"></a>
				<h3>Missions:</h3>
				<p>All of our missions are accomplished through <a href="http://www.vaumc.org/ " target="_blank">Virginia Conference of UMC</a>, <a href="http://www.umcor.org/" target="_blank">UMCOR</a>, <a href="http://www.umcmission.org/Explore-Our-Work/Missionaries-in-Service" target="_blank">GBGM</a>, or <a href="http://www.umc.org/site/c.lwL4KnN1LtH/b.1353935/k.93F7/The_United_Methodist_Church__Our_mission_is_to_make_disciples_of_Jesus_Christ_for_the_transformation_of_the_world.htm" target="_blank">United Methodist Church</a>. </p>
				<ul>
					<li>giving through individuals or local church groups-to help victims of natural disasters.</li>
					<li>Missionary Financial support in the US or over seas for salary, training or travel</li>
					<li><a href="http://umvim.org/" target="_blank">Volunteers in Missions (VIM)</a> Teams could be formed locally or in the district.  Local VIM teams usually build decks, stairs, and ramps or work often at <a href="http://overlookretreatandcampministries.weebly.com/" target="_blank">Camp Overlook</a>.</li>
						<ol>
							<li><a href="http://www.umcor.org/" target="_blank"><abbr title="United Methodist Committee on Relief">UMCOR</abbr></a></li>
							<li><a href="http://www.umc.org/site/c.lwL4KnN1LtH/b.1353935/k.93F7/The_United_Methodist_Church__Our_mission_is_to_make_disciples_of_Jesus_Christ_for_the_transformation_of_the_world.htm" target="_blank">United Methodist Church</a></li>
							<li><a href="http://www.vaumc.org/" target="_blank">Virginia Conference United Methodist Church</a></li>
							<li><a href="http://www.umcmission.org/Explore-Our-Work/Missionaries-in-Service" target="_blank"><abbr title="General Board of Global Ministries">GBGM</abbr></a></li>
							<li><a href="http://overlookretreatandcampministries.weebly.com/" target="_blank">Camp Overlook</a></li>
							<li><a href="http://www.facebook.com/pages/Elkton-Area-United-Services/158753260842619"
							 target="_blank"><abbr title="Elkton Area United Services">EAUS</abbr></a></li>
						</ol>
				</ul>

				<table class="contact">
					<tr>
						<th scope="col">Contact Person</th>
						<th scope="col">Phone Number</th>
						<th scope="col">Email:</th>
					</tr>
					<tr>
						<td>David Burgett</td>
						<td>(540) 298-8939</td>
						<?php
							$email= "eumc.mission@gmail.com";
							$name = "eumc.mission";
							$names = "David Burget";
							echo '<td><a href="email.php?email='. $email.'&names='.$names.'&name='.$name.'"'.'>Email Me</td>';
						?>
					</tr>
					<tr>
						<td>Peggy Breeden</td>
						<td>(540) 298-1314</td>
						<?php
							$email= "eumc.mission@gmail.com";
							$name = "eumc.mission";
							$names = "Peggy Breeden";
							echo '<td><a href="email.php?email='. $email.'&names='.$names.'&name='.$name.'"'.'>Email Me</td>';
						?>
					</tr>	
				</table>
				
			</div>
			
			<div id="music">
				<h3>Music</h3>
				<p>Currently we have a chancel choir that sings during our Worship Service.  Choir Practice is Thursday evenings 6:30PM except during the Summer months.</p>
				
				<p>We are looking at starting a music group to play contemporary music during some point of the service.  If you are interested please contact Kenneth Monger or Larry Winegard.
				<table class="contact">
					<tr>
						<th scope="col">Contact Person</th>
						<th scope="col">Phone Number</th>
						<th scope="col">Email:</th>
					</tr>
					<tr>
						<td>Kenneth Monger</td>
						<td>(540) 298-1434</td>
						<?php
							$email= "eumc.music@gmail.com";
							$name = "eumc.music";
							$names = "Kenneth Monger";
							echo '<td><a href="email.php?email='. $email.'&names='.$names.'&name='.$name.'"'.'>Email Me</td>';
						?>
					</tr>	
				</table>			
		
				</div>

			<div id="UMM">
				<h3>United Methodist Men</h3>

				<p>We have at this time an unofficial United Methodist Men's Fellowship -  which meets for special mission and service projects.  Helping out with EAUS, Camp Overlook repairs and building, Golf tournament in the Spring to help raise funds for our church camp, a sweet heart breakfast around Valentines Day, and other activities.  Our purpose is to be a creative, supportive fellowship of men who seek to know Jesus Christ, to grow spiritually and to seek his will.  Our primary purpose it to declare the centrality of Christ in the lives of men and in all their relationships.</p>

				<p>It is our hope to become an Official UMM fellowship by Chartering in the days to come.  We welcome all men to participate in our Fellowship as opportunities arise.</p>

				<table class="contact">
					<tr>
						<th scope="col">Contact Person</th>
						<th scope="col">Phone Number</th>
						<th scope="col">Email:</th>
					</tr>
					<tr>
						<td>Rodney Baugher</td>
						<td>(540) 298-8165</td>
							<?php
								$email= "eumc.1men@gmail.com";
								$name = "eumc.1men";
								$names = "Rodney Baugher";
							echo '<td><a href="email.php?email='. $email.'&names='.$names.'&name='.$name.'"'.'>Email Me</td>';
							?>
					</tr>	
				</table>
			</div>
				
			<div id="UMW">
				<a id="UMW"></a>
				<h3>United Methodist Women</h3>

				<p>We are an organized unit of United Methodist Women, a community of women whose purpose is to know God and to experience freedom as whole persons through Jesus Christ; we develop a creative, supportive fellowship; and expanded concepts of mission through participation in the global ministries of the United Methodist Church</p>

				<p>Our unit which is open to all ladies, meets at 7:00pm on the second Monday of each month with the exception of January when we serve a fellowship meal for our guests from Western State, June, July, and August.  We gather for a business meeting and program and conclude the evening with refreshments and fellowship.</p>

				<p>During the past year we supported many missions some of which include Operation Food Pantry, Weekday Religious Education, the Backpack Program, and Camp Overlook.</p>

				<div>
				<table class="contact">
					<tr>
						<th scope="col">Contact Person</th>
						<th scope="col">Phone Number</th>
						<th scope="col">Email:</th>
					</tr>
					<tr>
						<td>Kimberly Sampson</td>
						<td>(540) 298-8646</td>
						<?php
							$email= "eumc.women@gmail.com";
							$name = "eumc.women";
							$names = "Kimberly Sampson";
							echo '<td><a href="email.php?email='. $email.'&names='.$names.'&name='.$name.'"'.'>Email Me</td>';
						?>
					</tr>	
				</table>
			</div>

			<div id="other">
				<table class="contact">
					<caption>Other Ministries</caption>
					<tr>
						<th scope="col">Ministry</th>
						<th scope="col">Contact Person</th>
						<th scope="col">Phone</th>
						<th scope="col">Email</th>
					</tr>
					
					<tr>
						<th scope="row"><a href="youth.php">Youth</a></th>
						<td>Sarah Bailey</td>
						<td>(540) 298-1943</td>
						<?php
							$email= "eumc1youth@gmail.com";
							$name = "eumc.1youth";
							$names = "Allison Morris";
							echo '<td><a href="email.php?email='. $email.'&names='.$names.'&name='.$name.'"'.'>Email Me</td>';
						?>
					</tr>
					
					<tr>
						<th scope="row"><a href="youth.php">Children</a></th>
						<td>Sue Lucas</td>
						<td>(540) 298-6027</td>
						<?php
							$email= "eumc.children@gmail.com";
							$name = "eumc.children";
							$names = "Sue Lucas";
							echo '<td><a href="email.php?email='. $email.'&names='.$names.'&name='.$name.'"'.'>Email Me</td>';
						?>
					</tr>
					
					<tr>
						<th scope="row"><a href="preschool.php">Preschool</a></th>
						<td>Brenda Burgoyne</td>
						<td>(540) 298-0395</td>
						<?php
							$email= "eumc.preschool@gmail.com";
							$name = "eumc.preschool";
							$names = "Brenda Burgoyne";
							echo '<td><a href="email.php?email='. $email.'&names='.$names.'&name='.$name.'"'.'>Email Me</td>';
						?>
					</tr>
					
					<tr>
						<th scope="row">Nursery*</th>
						<td>Donna Meadows</td>
						<td>(540) 298-9955</td>
						<?php
							$email= "eumc.1nursery@gmail.com";
							$name = "eumc.1nursery";
							$names = "Donna Meadows";
							echo '<td><a href="email.php?email='. $email.'&names='.$names.'&name='.$name.'"'.'>Email Me</td>';
						?>
					</tr>
					
					<tr>
						<th scope="row"><a href="care.php">Care</a></th>
						<td>Peggy Breeden</td>
						<td>(540) 298-1314</td>
						<?php
							$email= "eumc.care@gmail.com";
							$name = "eumc.care";
							$names = "Peggy Breeden";
							echo '<td><a href="email.php?email='. $email.'&names='.$names.'&name='.$name.'"'.'>Email Me</td>';
						?>
					</tr>
					
					<tr>
						<td colspan="4">* The nursery is open doing Sunday School and Worship Service Hours. Ages: Infants- 3 years old</td>
					</tr>
				</table>
			</div>

			</div>
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