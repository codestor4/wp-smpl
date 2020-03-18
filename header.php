<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo get_bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div id="site-name">
			<span id="site-title"><h1><a class="text-muted text-decoration-none" href="<?php home_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a></h1></span>
			<?php if ( get_bloginfo( 'description' ) ): ?>
					<span id="site-description"><?php echo get_bloginfo( 'description' ); ?></span>
			<?php endif; ?>
		</div>
		<div class="container top-nav-bar"><?php 
			wp_nav_menu(
				array(
					'theme_location' => 'top-menu',
					'menu_class' => 'top-bar',
				)
			);?>
		</div>
	</header>