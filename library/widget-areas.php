<?php
/**
 * Register widget areas
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_sidebar_widgets' ) ) :
function foundationpress_sidebar_widgets() {
	register_sidebar(array(
		'id' => 'sidebar-widgets',
		'name' => __( 'Sidebar widgets', 'foundationpress' ),
		'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h6>',
		'after_title' => '</h6>',
	));

	register_sidebar(array(
		'id' => 'footer-left-widgets',
		'name' => __( 'Footer left widgets', 'foundationpress' ),
		'description' => __ ( 'Drag widgets to this left footer container', 'foundationpress' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h6>',
		'after_title' => '</h6>',
	));

	register_sidebar(array(
		'id' => 'footer-widgets',
		'name' => __( 'Footer widgets', 'foundationpress' ),
		'description' => __( 'Drag widgets to this footer container', 'foundationpress' ),
		'before_widget' => '<section id="%1$s" class="large-12 columns widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h6>',
		'after_title' => '</h6>',
	));

	register_sidebar(array(
		'id' => 'home-page-events-widget',
		'name' => __( 'Home page events widget', 'foundationpress' ),
		'description' => __( 'Drag widgets to this front page container', 'foundationpress' ),
		'before_widget' => '<section id="%1$s" class="large-12 columns widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h6>',
		'after_title' => '</h6>',
	));

	register_sidebar(array(
		'id' => 'footer-right-widgets',
		'name' => __( 'Footer right widgets', 'foundationpress' ),
		'description' => __( 'Drag widgets to this right footer container', 'foundationpress' ),
		'before_widget' => '<section id="%1$s" class="large-12 columns widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h6>',
		'after_title' => '</h6>',
	));
}

add_action( 'widgets_init', 'foundationpress_sidebar_widgets' );
endif;
