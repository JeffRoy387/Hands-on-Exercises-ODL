<?php
 	$weather = array("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind");
 	?>

 	<!DOCTYPE html>
 	<html lang="en">
 	<head>
 		<meta charset="UTF-8">
 		<title>Weather Forecast</title>
 	</head>
 	<body>
 		<?php
 		echo "\n ========================= PHP Array Exercise 1 ============================= " . "\n"; 
 		?>

 		<h1 style="color: red ; font-weight: bold">Todays Weather Report</h1>
 		<?php 
 		echo "We've seen all kinds of weather this month. At the beginning of the month, we had " . $weather[5] . " and " . $weather[6] . ". Then came " . $weather[1] . " with a few " . $weather[2] . " and some  " . $weather[0] . ". At least we didn't get any " . $weather[3] . " or " . $weather[4] . ". "; ?>

 	</body>
 	</html>

	 	<?php array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing"); ?>

	 	<?php sort($cities); ?>
	 	<?php var_dump($cities) ?>

	 	 	
	 	<ul>
	 		<?php
	 		for ($i = 0; $i < COUNT($cities); $i++) {
	 			echo "<li>{$cities{$i}}</li>";
	 		}
	 		?>
	 	</ul>

	

	 </body>
	 </html>