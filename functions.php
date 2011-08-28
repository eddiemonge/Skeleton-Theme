<?php

/**
 * Register the sidebars
 */
function register_functions_sidebars() {
	register_sidebar( array(
		'name' => 'Main Sidebar',
		'id' => 'sidebar',
		'description' => 'The main sidebar for the site',
		'before_widget' => '<aside id="%1$s" class="sidebar %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="sidebar-title"><span>',
		'after_title' => '</span></h3>'
	) );

	register_sidebar( array(
		'name' => 'Header Info',
		'id' => 'header_info',
		'description' => 'The message in the header on the home page',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
	) );

	register_sidebar( array(
		'name' => 'Footer Sidebar',
		'id' => 'footer_sidebar',
		'description' => 'A place to put things in the footer',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
	) );
}
add_action( 'init', 'register_functions_sidebars' );
// End Sidebar section



/**
 * Register the menus
 */
function register_functions_menus() {
	register_nav_menus(
		array( 
			'primary-menu'   => __('Primary Menu')
		)
	);
}
add_action( 'init', 'register_functions_menus' );
// End Menu section




/*
 * Remove Junk from the header
 */
remove_action('wp_head', 'wp_generator'); 



/* Remove the update notice from everyone except for admins */
if ( ! current_user_can( 'administrator' ) ) {
	remove_action( 'admin_notices', 'update_nag', 3 );
}

