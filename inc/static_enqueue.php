<?php
/**
 * Enqueue site scripts and styles
 */
function fundly_scripts() {

	/**
	 * Enqueueing Stylesheets
	 */
	wp_enqueue_style( 'fundly-fonts', fundly_fonts_url() );
	wp_enqueue_style( 'mediaelementplayer', FUNDLY_VEND . '/media-player/mediaelementplayer.css' );
	wp_enqueue_style( 'fontawesome', FUNDLY_VEND . '/font-awesome/all.min.css' );
	wp_enqueue_style( 'fundly-icomoon', FUNDLY_VEND . '/icomoon/icomoon.css', array(), FUNDLY_VERSION );
	wp_enqueue_style( 'fundly-main-css', get_theme_file_uri('/assets/css/fundly-style.css'), array(), FUNDLY_VERSION );
	wp_enqueue_style( 'fundly-main-style', get_theme_file_uri('/assets/css/style.css'), array(), FUNDLY_VERSION );

	wp_enqueue_style( 'fundly-root', get_stylesheet_uri(), array(), FUNDLY_VERSION );
	wp_style_add_data( 'fundly-root', 'rtl', 'replace' );


	/**
	 * Enqueueing Scripts
	 */
	wp_enqueue_script( 'mediaelement-and-player', FUNDLY_VEND. '/media-player/mediaelement-and-player.min.js', array('jquery'), '4.2.6', true );
	wp_enqueue_script( 'parallaxie', FUNDLY_VEND. '/parallax/parallaxie.js', array('jquery'), '0.5', true );
	wp_enqueue_script( 'fundly-main-js', FUNDLY_JS . '/main.js', array('jquery'), FUNDLY_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fundly_scripts' );
