		<p>Evangelical United Methodist Church</p>
		<p>513 East Spotswood Avenue Elkton, VA 22827 (540-298-1767)</p>
		<p>Copyright &copy; 
		<?php 
		$startYear = 2012;
		$thisYear = date('Y');
		if ($startYear == $thisYear) 
		{
			echo $startYear;
		}

		else
		{
			echo "{$startYear}&#8211;{$thisYear}";
		}

		 ?> 
		 by Olivia Designs.  All rights reserved</p>
