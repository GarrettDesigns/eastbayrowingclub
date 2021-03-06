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
		  'name' => __( 'Sidebar Template Page widgets', 'foundationpress' ),
		  'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
		  'before_widget' => '<article id="%1$s" class="widget %2$s">',
		  'after_widget' => '</article>',
		  'before_title' => '<h6>',
		  'after_title' => '</h6>',
		));

		register_sidebar(array(
		  'id' => 'coaches-sidebar-widgets',
		  'name' => __( 'Coaches Page Sidebar widgets', 'foundationpress' ),
		  'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
		  'before_widget' => '<article id="%1$s" class="widget %2$s">',
		  'after_widget' => '</article>',
		  'before_title' => '<h6>',
		  'after_title' => '</h6>',
		));

		register_sidebar(array(
		  'id' => 'homepage-widgets',
		  'name' => __( 'Homepage widgets', 'foundationpress' ),
		  'description' => __( 'Widget area for the homepage.', 'foundationpress' ),
		  'before_widget' => '<article id="%1$s" class="widget %2$s">',
		  'after_widget' => '</article>',
		  'before_title' => '<h4>',
		  'after_title' => '</h4>',
		));

		register_sidebar(array(
		  'id' => 'two-column-main-widgets',
		  'name' => __( 'Two Column Main widgets', 'foundationpress' ),
		  'description' => __( 'Widget area for the main column of the Two Column Page Template.', 'foundationpress' ),
		  'before_widget' => '<article id="%1$s" class="widget %2$s">',
		  'after_widget' => '</article>',
		  'before_title' => '<h4>',
		  'after_title' => '</h4>',
		));

		register_sidebar(array(
		  'id' => 'two-column-sidebar',
		  'name' => __( 'Two Column Sidebar widgets', 'foundationpress' ),
		  'description' => __( 'Widget area for the sidebar of a generic Two Column Page Template.', 'foundationpress' ),
		  'before_widget' => '<article id="%1$s" class="widget %2$s">',
		  'after_widget' => '</article>',
		  'before_title' => '<h4>',
		  'after_title' => '</h4>',
		));

		register_sidebar(array(
		  'id' => 'footer-widgets',
		  'name' => __( 'Footer widgets', 'foundationpress' ),
		  'description' => __( 'Drag widgets to this footer container', 'foundationpress' ),
		  'before_widget' => '<article id="%1$s" class="large-4 columns widget %2$s">',
		  'after_widget' => '</article>',
		  'before_title' => '<h6>',
		  'after_title' => '</h6>',
		));
	}

add_action( 'widgets_init', 'foundationpress_sidebar_widgets' );
endif;
