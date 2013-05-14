<?php
/*
 * Add Menu Section
 * 
 * */
function register_my_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' )
		)
	);
}
add_action( 'init', 'register_my_menus' );


/*
 * Add Sidebar Section
 * 
 * */
function arphabet_widgets_init() {
	register_sidebar(
		array(
			'name' => 'RECENT POSTS',
			'id' => 'recent-posts',
			'before_widget' => '<ul class="sidebar-sub-section recent-posts">',
			'after_widget' => '</ul>',
			'before_title' => '<li class="title">',
			'after_title' => '</li>'
		)
	);
	
	register_sidebar(
		array(
			'name' => 'QUICK LINKS',
			'id' => 'quick-links'
		)
	);
}
add_action( 'widgets_init', 'arphabet_widgets_init' );
?>