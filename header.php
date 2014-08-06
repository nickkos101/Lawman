<html>
<head>
	<title><?php wp_title(); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/responsive.css">
	<link href="http://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
	<?php wp_head(); ?>
</head>
<body>
	<div class="reset">
		<header>
			<div class="top-bar">
				<div class="container">
					<p>Call Now: <span>619-795-5555</span></p>
				</div>
			</div>
			<div class="container">
				<div class="logo">
					<h1>Patrick E. Herman</h1>
					<h2>Attorney at Law</h2>
				</div>
				<div class="navigation">
					<?php wp_nav_menu(array('theme_location' => 'Header_Nav',)); ?>
				</div>
			</div>
		</header>