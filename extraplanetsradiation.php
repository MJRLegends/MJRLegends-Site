<!DOCTYPE html>
<html lang="en">
	<head>
		<title>ExtraPlanets Radiation Calculator</title>
	</head>
	<body>
		<h1> ExtraPlanets Radiation Calculator </h1>
		<h2>This Calculator will help you work out how long you will last on a planet/moon based on a few variables, from 0% radiation damage to 100% radiation damage on the player</h2>
		<h3> Planet/Moon Radiation Percent can be found in the Celestial Selection Screen, see below for example</h3>
		<img src="https://i.gyazo.com/92141b917a9cf02e50968d980122c948.png" width="250"height="300"><br><br>
		<form method="get">
			SpaceSuit Tier:<br>
			<input type="number" name="suittier" value="0"><br>
			Planet/Moon Radiation Percent:<br>
			<input type="number" name="radpercent" value="0"><br><br>
			<input type="submit" value="Calculate">
		</form>
		<?php
			if($_GET){
				if(isset($_GET['suittier']) AND isset($_GET['radpercent'])){
					if($_GET['suittier'] != 0 AND $_GET['radpercent'] != 0){
					$tierValue = (($_GET['suittier']) * 4) / 2;
					$damageToTake = 0.005 * $tierValue;
					$damageModifer = 0.0075 - ((($damageToTake) / 2) / 10);
					if($_GET['radpercent'] < 10){
						$temp = ($damageModifer * floatval ($_GET['radpercent'])) / 100;
					}
					else{
						$temp = $damageModifer * (floatval ($_GET['radpercent']) / 10) / 6;
					}
					echo "<br>" . "<h3> Results </h3>";
					echo "Amount of radiation damage added per tick is: " . $temp;
					echo "<br>" . "Amount of radiation damage added per 20 ticks is: " . $temp * 20;
					echo "<h4> Real life time: </h4>";
					echo "Amount of real life minutes you will last: " . ((100 / ($temp * 20)) * 0.0166) . " minutes";
					echo "<h4> Or </h4>";
					echo "Amount of real life hours you will last: " . ((100 / ($temp * 20)) * 0.0166) / 60 . " hours";
					}
					else{
						echo "<p style='color: red;'>Error when calculating radiation time!</p>";
					}
				}
				else{
					echo "<p style='color: red;'>Error when calculating radiation time!</p>";
				}
			}
		?>
	</body>
</html>