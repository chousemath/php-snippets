<?php

	// Define a Constant

	// Your Variables
	$GRAV_CONST = "6.674e−11" - 0; // gravitational constant
  $mass1 = 10.5; // mass 1
  $mass2 = 11.2; // mass 2
  $dist = 0.125; // distance between the centers of the masses in m
	$force = $GRAV_CONST * $mass1 * $mass2 / ($dist * $dist);
  $pot_energy = -1 * $GRAV_CONST * $mass1 * $mass2 / $dist;
  $grav_pot1 = -1 * $GRAV_CONST * $mass1 / $dist;
  $grav_pot2 = -1 * $GRAV_CONST * $mass2 / $dist;
	/*
	Use PHP to calculate the difference
	between your birth year and this year
	to show your age dynamically
	*/


?>

<!DOCTYPE html>
<html>
	<head>
		<title>Get Your Hands Dirty: <!-- PAGE TITLE --></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>

			<h1>Get Your Hands Dirty: <small><!-- PAGE TITLE --></small></h1>
			<hr>

			<h2>Your Example</h2>

      <div class="sandbox">
				<h3>Force of Gravity:</h3>
				<p><?php print("Force of Gravity: <b>$force</b> <i>Newtons</i>"); ?></p>

        <h3>Gravitational Potential Energy</h3>
        <p><?php print("Gravitational Potential Energy: <b>$pot_energy</b>"); ?></p>

        <h3>Gravitational Potential of Mass 1</h3>
        <p><?php print("Gravitation potential of mass 1 is <b>$grav_pot1</b>"); ?></p>

        <h3>Gravitational Potential of Mass 2</h3>
        <p><?php print("Gravitation potential of mass 2 is <b>$grav_pot2</b>"); ?></p>
			</div><!-- end sandbox -->

			<a href="index.php" class="button">Back to the final example</a>

			<hr>

			<small>&copy;<!-- THIS YEAR --> - <!-- YOUR NAME --></small>
		</div><!-- end wrapper -->

		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
