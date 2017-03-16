<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!-- site-header -->
		<header class="site-header">
			<div class="row">
					<?php if (get_header_image()): ?>
					<div class="col-md-12"><img id="header-image" class="img-responsive" src="<?php header_image(); ?>"></div>
					<?php endif; ?>
			</div><!-- row-of-header_img -->
			<nav class="header-nav">
				<?php 
					$args = array(
					'theme_location' => 'primary' 
					);
					wp_nav_menu( $args );
				?>
			</nav>
		</header><!-- site-header -->
	<div class="container">