<?php

/*  #Thumbnail support
================================================== */

add_theme_support( 'post-thumbnails' ); 


/*  #Register our sidebars and widgetized areas.
================================================== */

function sidebar_widgets() {
	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'home_right_1',
		'before_widget' => '<div class="sidebar-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'sidebar_widgets' );

/*----- Footer Widgets -----*/

function footer_widgets() {
	register_sidebar( array(
		'name' => 'footer-widget-1',
		'id' => 'footer-widget-1',
		'before_widget' => '<div class="footer-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h1>',
		'after_title' => '</h1>',
	) );
	register_sidebar( array(
		'name' => 'footer-widget-2',
		'id' => 'footer-widget-2',
		'before_widget' => '<div class="footer-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h1>',
		'after_title' => '</h1>',
	) );
	register_sidebar( array(
		'name' => 'footer-widget-3',
		'id' => 'footer-widget-3',
		'before_widget' => '<div class="footer-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h1>',
		'after_title' => '</h1>',
	) );
	register_sidebar( array(
		'name' => 'footer-widget-4',
		'id' => 'footer-widget-4',
		'before_widget' => '<div class="footer-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h1>',
		'after_title' => '</h1>',
	) );
}
add_action( 'widgets_init', 'footer_widgets' );

if (class_exists('MultiPostThumbnails')) {
        new MultiPostThumbnails(
            array(
                'label' => 'Secundaire afbeelding',
                'id' => 'secondary-image',
                'post_type' => 'post'
            )
        );
    }