<?php 


require FUNDLY_THEMEROOT_DIR . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require FUNDLY_THEMEROOT_DIR . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require FUNDLY_THEMEROOT_DIR . '/inc/template-functions.php';
/**
 * Fundly helper 
 */
require FUNDLY_THEMEROOT_DIR . '/inc/helper.php';

/**
 * Fundly comment area
*/
require FUNDLY_THEMEROOT_DIR.'/inc/classes/comment_walker.php';
/**
 * Fundly nav walker
*/
require FUNDLY_THEMEROOT_DIR.'/inc/classes/main-nav-walker.php';
/**
 * Customizer additions.
 */
require FUNDLY_THEMEROOT_DIR . '/inc/customizer.php';

/**
 * Fundly Enqueue 
 */

require FUNDLY_THEMEROOT_DIR . '/inc/static_enqueue.php';

/**
 * Fundly Admin Enqueue 
 */

require FUNDLY_THEMEROOT_DIR . '/inc/admin_enqueue.php';


/**
 * Fundly breadcrumbs
 */

require FUNDLY_THEMEROOT_DIR . '/inc/breadcrumbs.php';

/**
 * Fundly Tgm
 */
require FUNDLY_THEMEROOT_DIR . '/inc/plugin_activation.php';


/**
 * One Click Demo Function
 */
require FUNDLY_THEMEROOT_DIR . '/inc/one_click_demo_config.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require FUNDLY_THEMEROOT_DIR . '/inc/jetpack.php';
}
