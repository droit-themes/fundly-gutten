<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    $opt_name = 'fundly_opt';


    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'redux_demo/opt_name', $opt_name );

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'display_name'         => $theme->get( 'Name' ),
        'display_version'      => $theme->get( 'Version' ),
        'menu_title'           => esc_html__( 'Theme Settings', 'fundly' ),
        'customizer'           => true,
		'dev_mode'             => true,
		'forced_dev_mode_off'  => true,
        'admin_bar_priority'   => 50,
        'page_priority'        => 58,
        'save_defaults'        => true,
        'show_import_export'   => true,
        'transient_time'   => 60 * MINUTE_IN_SECONDS,
        'async_typography'   => false,
        'menu_type'   => 'menu',
        'allow_sub_menu'   => true,
    );


    // Add content after the form.
    $args['footer_text'] = '<br>'.esc_html__( 'Copyright Fundly &copy; 2021', 'fundly' );

    Redux::set_args( $opt_name, $args );

    require FUNDLY_THEMEROOT_DIR . '/lib/options/opt_global.php';
	require FUNDLY_THEMEROOT_DIR . '/lib/options/opt_banner.php';
    require FUNDLY_THEMEROOT_DIR . '/lib/options/opt_header.php';
    require FUNDLY_THEMEROOT_DIR . '/lib/options/opt_footer.php';
	require FUNDLY_THEMEROOT_DIR . '/lib/options/opt_blog.php';
	require FUNDLY_THEMEROOT_DIR . '/lib/options/opt_page.php';

    if(class_exists('Give')) {
	    require FUNDLY_THEMEROOT_DIR . '/lib/options/opt-donation.php';
    }
