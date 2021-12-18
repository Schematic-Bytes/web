<?php 
	$cnum=$_GET["cnum"];
	$cname=$_GET["cname"];
	$psd=$_GET["cr"];
	$pvd=$_GET["pr"];
	$unit=$psd - $pvd;

	if ($unit<100)
		$amt=$unit*3;
	else if ($unit>=100 && $amt<200)
		$amt=$unit*4;
	echo"<h1 style='text-align: center'><u>Consumer Bill</u></h2>
			<p>Consumer Number: $cnum</p>
			<p>Consumer Name: $cname</p>
			<p>Totl unit charge: $amt</p>"
?>
