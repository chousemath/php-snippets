<?php

	// Constants
  define("TITLE", "Arrays Lecture");

	// Custom Variables
  $lesson_number = 123;

	// Moustache Array
	$moustaches = array('Handlebar', 'Salvador Dali', 'Foo Man Chu');
  $cars = array('Honda', 'Toyota', 'Mitsubishi');
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo TITLE; ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>

			<h1>Lecture <?php echo "$lesson_number" ?>: <small><?php echo TITLE ?></small></h1>
			<hr>

			<h2>Your Example</h2>

			<div class="sandbox">

				<h2>Moustache Types</h2>
				<ul>
					<li><?php echo "$moustaches[0]"; ?></li>
					<li><?php echo "$moustaches[1]"; ?></li>
					<li><?php echo "$moustaches[2]"; ?></li>
				</ul>

        <h2>Car Types</h2>
        <ul>
          <li><?php echo "$cars[0]"; ?></li>
          <li><?php echo "$cars[1]"; ?></li>
          <li><?php echo "$cars[2]"; ?></li>
        </ul>

			</div><!-- end sandbox -->

			<a href="index.php" class="button">Back to the lecture</a>

			<hr>

			<small>&copy;<!-- YEAR --> - <!-- YOUR NAME --></small>
		</div><!-- end wrapper -->

		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
