<!doctype html>
<!--[if lt IE 9]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<!-- Makes the viewport look good in mobile browsers -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- For IE 9+ users who want to "Pin" the site -->
	<meta name="application-name" content="<?php bloginfo( 'name' ); ?>" />
	<meta name="msapplication-tooltip" content="<?php bloginfo( 'description' ); ?>" />

	<!-- Facebook open graph stuff -->
	<meta property="og:title" content="<?php bloginfo( 'name' ); ?>" />
	<meta property="og:description" content="<?php bloginfo( 'description' ); ?>" />

	<title><?php
		global $page, $paged;
		wp_title( '|', true, 'right' );

		// Add the blog name.
		bloginfo( 'name' );

		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) ) {
			echo " | $site_description";
		}
	?></title>

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	 <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="all" />

	<?php wp_head(); ?>
</head>

<body class="site">

<div id="skip-link" class="hide"><a href="#content" title="<?php _e('Skip to primary content'); ?>"><?php _e( 'Skip to primary content' ); ?></a></div>

<header id="logo">
	<hgroup class="<?php echo ( is_home() || is_front_page() ? 'home' : 'subpages' );?>">

		<h1 id="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

		<div id="header_info">
			<?php dynamic_sidebar( 'Header Info' ); ?>
		</div>

		<?php 
			wp_nav_menu( 
				array(
					'theme_location' => 'primary-menu',
					'container' => 'nav',
					'container_id' => 'menu',
					'depth' => 1
				 ) 
			); 
		?>

	</hgroup>
</header>

<div id="main">
