<?php

	// Constants
  define("TITLE", "Associative Arrays");

	// Custom Variables
  $lesson_number = 5234;
  $my_name = 'Jo';

	// Moustache Associative Array
  $handelbar = array(
    name   => 'Handlebar',
    creep  => 123,
    growth => 321
  );

  $salvador = array(
    name   => 'Salvador Dali',
    creep  => 222,
    growth => 15
  );

  $foo = array(
    name   => 'Foo Man Chu',
    creep  => 333,
    growth => 55
  );
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE ?></title>
		<link href="/assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="/assets/img/logo.png" alt="PHP">
			</a>

			<h1>Tutorial <?php echo "$lesson_number" ?>: <small><?php echo TITLE ?></small></h1>
			<hr>

			<h2>Your Example</h2>

			<div class="sandbox">

				<h2>The <?php echo "$handelbar[name]"; ?> Moustache!</h2>
				<p>This moustache is quite the dirt squirrel! It boasts a creep factor of <strong><?php echo "$handelbar[creep]"; ?></strong> and takes <strong><?php echo "$handelbar[growth]"; ?> days</strong> to grow on average.</strong></p>

			</div><!-- end sandbox -->

			<a href="index.php" class="button">Back to the lecture</a>

			<hr>

			<small>&copy;<?php echo date('Y'); ?> - <?php echo "$my_name"; ?></small>
		</div><!-- end wrapper -->

		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
