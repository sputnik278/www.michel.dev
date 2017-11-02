<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" rel="stylesheet">
	
	<!-- polices -->
	<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed:400,700|Roboto+Slab:400,700" rel="stylesheet">
	
	<!-- mes styles -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<header class="main-header">
		<div class="wrapper">
			<h1 class="logo"><?php bloginfo('name'); ?></h1>
			<nav>
				<?php wp_nav_menu( array
					( 'theme_location' => 'header_menu' 
					) ); 
				?>
			</nav>
			<!-- ./main navigation -->
		</div>
		<!-- ./wrapper -->
	</header>
	<!-- ./main-header -->
	
	<main>
		<?php if(is_front_page()): ?>
		<section class="jumbotron">
			<div class="wrapper">
				<h2>We are digital &amp; branding agency based in London.</h2>
				<h3>We love to turn great ideas into beautiful products.</h3>
				<a href="<?php echo get_permalink( 47 ) ?>" class="button">See portfolio</a>
			</div>
		</section>-->
		<!-- ./jumbotron -->
		<?php endif; ?>