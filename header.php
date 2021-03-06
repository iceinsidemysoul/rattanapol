<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">	
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!-- site-header -->
	<div class="container">
		<header class="site-header">
			<div class="row">
					<?php if (get_header_image()): ?>
					<a href="http://localhost/wordpress"><img id="header-image" class="img-responsive" src="<?php header_image(); ?>"></a>
					<?php endif; ?>
			</div><!-- row-of-header_img -->
			<div class="row">
			<nav class="header-nav">
				<?php 
					$args = array(
					'theme_location' => 'primary' 
					);
					wp_nav_menu( $args );
				?>
			</nav>
			</div>
		</header><!-- site-header -->