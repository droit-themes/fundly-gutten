<?php

/**
 * helper function for fundly
 */

/**
 * fundly return
 */

if ( !function_exists('fundly_return') ) {

	function fundly_return( $html ){
		return $html;
	}
}

/**
 * Get editor data
 */
if ( !function_exists('fundly_editor_data') ) {

	function fundly_editor_data( $data ) {
		return wp_kses_post( $data );
	}

}


/*
 * Resize media image
 * To get instant resize
 */

if ( !function_exists('fundly_get_image') ) {

	function fundly_get_image( $id, $size = 'full', $icon= false,  $attr = '') {

		echo  wp_get_attachment_image($id, $size, $icon, $attr);

	}

}

/**
 * fundly kses
 */
if ( !function_exists('fundly_kses') ) {

	function fundly_kses ( $data ) {

		$allowed_tags = array(
			'a'								 => array(
				'class'	 => array(),
				'href'	 => array(),
				'rel'	 => array(),
				'title'	 => array(),
			),
			'abbr'							 => array(
				'title' => array(),
			),
			'b'								 => array(),
			'blockquote'					 => array(
				'cite' => array(),
			),
			'cite'							 => array(
				'title' => array(),
			),
			'code'							 => array(),
			'del'							 => array(
				'datetime'	 => array(),
				'title'		 => array(),
			),
			'dd'							 => array(),
			'div'							 => array(
				'class'	 => array(),
				'title'	 => array(),
				'style'	 => array(),
			),
			'dl'							 => array(),
			'dt'							 => array(),
			'em'							 => array(),
			'h1'							 => array(),
			'h2'							 => array(),
			'h3'							 => array(),
			'h4'							 => array(),
			'h5'							 => array(),
			'h6'							 => array(),
			'i'								 => array(
				'class' => array(),
			),
			'img'							 => array(
				'alt'	 => array(),
				'class'	 => array(),
				'height' => array(),
				'src'	 => array(),
				'width'	 => array(),
			),
			'li'							 => array(
				'class' => array(),
			),
			'ol'							 => array(
				'class' => array(),
			),
			'p'								 => array(
				'class' => array(),
			),
			'q'								 => array(
				'cite'	 => array(),
				'title'	 => array(),
			),
			'span'							 => array(
				'class'	 => array(),
				'title'	 => array(),
				'style'	 => array(),
			),
			'strike'						 => array(),
			'br'							 => array(),
			'strong'						 => array(),
			'data-wow-duration'				 => array(),
			'data-wow-delay'				 => array(),
			'data-wallpaper-options'		 => array(),
			'data-stellar-background-ratio'	 => array(),
			'ul'							 => array(
				'class' => array(),
			),
		);

		return wp_kses($data, $allowed_tags);
	}
}

/**
 * get fundly option
 */

if ( !function_exists('fundly_opt') ) {

	function fundly_opt ( $section_id, $default = '' ) {

		$fundly_option_data = $default;

		if ( class_exists( 'Redux' ) ) {

			global $fundly_opt;
			$fundly_option_data = (isset($fundly_opt[$section_id]) && (!empty($fundly_opt[$section_id]))) ? $fundly_opt[$section_id] : $default;

		}

		return $fundly_option_data;

	}

}

/**
 * get fundly option
 */

if(!function_exists('fundly_page_meta')){

	function fundly_page_meta ( $meta_id, $id, $default = '' ) {

		$metadata =  $default;

		if(function_exists('get_field')) {
			$metadata = (get_field($meta_id, $id) != '') ? get_field($meta_id, $id): $default;
		}

		return $metadata;

	}

}

/**
 * Register Google fonts.
 *
 * @return string Google fonts URL for the theme.
 */
function fundly_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = '';

	/* Body font */
	if (  'off' !== 'on'  ) {
		$fonts[] = "Inter:100,200,300,400,500,600,700,800,900";
		$fonts[] = "Merriweather:100,200,300,400,500,600,700,800,900";
	}

	$is_ssl = is_ssl() ? 'https' : 'http';

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts  ) ),
			'subset' => urlencode( $subsets ),
		), "$is_ssl://fonts.googleapis.com/css" );
	}

	return $fonts_url;
}

function should_display_donarity_template() {
	if ( get_post_type( get_the_ID() ) == 'give_forms' ) {
		return true;
	}
	return  false;
}

//  Remove default wrapper from single page
remove_action('give_before_main_content', 'give_output_content_wrapper', 10);
add_action('give_before_main_content', 'fundly_give_wrapper_class', 10);
function fundly_give_wrapper_class() {
	echo '<div id="main-content"><div class="give-wrap">';
}
function fundly_get_all_header() {

	$header_list = [];
	$header_list['default'] = esc_html__('Default', 'fundly');
	$arg = [
		'post_type' => 'header',
		'numberposts' => -1
	];

	$headers = get_posts($arg);
	if(is_array($headers)){
		foreach ($headers as $header) {
			$header_list[$header->ID] = $header->post_title;
		}
	}

	return $header_list;
}

function fundly_get_all_footer() {
	$footer_list = [];
	$arg = [
		'post_type' => 'footer',
		'numberposts' => -1
	];
	$footer_list['default'] = esc_html__('Default', 'fundly');
	$headers = get_posts($arg);
	if(is_array($headers)){
		foreach ($headers as $header) {
			$footer_list[$header->ID] = $header->post_title;
		}
	}

	return $footer_list;
}
add_action('fundly_header', 'fundly_header_content');
function fundly_header_content() {

	global $post;
	$header_id = '';
	if (isset($post->ID) && function_exists('fundly_header_footer_builder_id')) {
		$header_id = fundly_header_footer_builder_id('header', $post->ID);
	}elseif( is_search() || is_404() || is_front_page()){
		$header_id = fundly_header_footer_builder_id('header', 0);
	}
	if (is_home()) {
		$blog_header = fundly_opt('select_header', 'default');
		if($blog_header != 'default'){
			$header_id = $blog_header;
		}else{
			$header_id = fundly_header_footer_builder_id('header', 0);
		}
	}
	if (is_single()) {
		$single_header = fundly_opt('select_single_header', 'default');
		if($single_header != 'default'){
			$header_id = $single_header;
		}else{
			$header_id = fundly_header_footer_builder_id('header', 0);
		}
	}
	if(is_singular('give_forms')) {
		$donation_single_header = fundly_opt('donation_select_header', 'default');
		if($donation_single_header != 'default'){
			$header_id = $donation_single_header;
		}else{
			$header_id = fundly_header_footer_builder_id('header', 0);
		}
	}

	$builder      = get_post_meta(  $header_id, '_elementor_edit_mode', true  );
	$page_content = get_post_field( 'post_content', $header_id );

    if ( 'builder' ===  $builder && class_exists('\Elementor\Plugin' ) ) {
		echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $header_id );
	} else if ( ! empty( $page_content ) ) {
		$post_content = get_post( $header_id );
		$content = $post_content->post_content;
		echo apply_filters( 'the_content', $content );
	} else{
		?>
        <header id="masthead" class="site-header sticky_nav">
			<?php get_template_part( 'template-parts/header/nav/content',  'nav'); ?>
        </header><!-- #masthead -->
		<?php
	}
}

add_action('fundly_footer_display', 'fundly_footer_from_theme');
function fundly_footer_from_theme() {
	global $post;

	$footer_id = '';
	if ( isset( $post->ID) ) {
		$footer_id = fundly_header_footer_builder_id('footer', $post->ID);
	}
	if (is_home()) {
		$blog_footer = fundly_opt('select_footer', 'default');
		if($blog_footer != 'default'){
			$footer_id = $blog_footer;
		}
	}
	if (is_single()) {
		$single_footer = fundly_opt('select_single_footer', 'default');
		if($single_footer != 'default'){
			$footer_id = $single_footer;
		}
	}

	if (is_singular('give_forms')) {
		$donotion_single_footer = fundly_opt('donation_select_footer', 'default');
		if($donotion_single_footer != 'default'){
			$footer_id = $donotion_single_footer;
		}
	}

	$builder      = get_post_meta(  $footer_id, '_elementor_edit_mode', true  );
	$page_content = get_post_field( 'post_content', $footer_id );

    if ( 'builder' ===  $builder && class_exists('\Elementor\Plugin' ) ) {
		echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $footer_id );
	} else if ( ! empty( $page_content ) ) {
		$post_content = get_post( $footer_id );
		$content = $post_content->post_content;
		echo apply_filters( 'the_content', $content );
	} else{
		$footer_text = fundly_opt('footer_copyright_txt', 'Copyright &copy; 2022 <a href="#">DroitThemes</a> | All rights reserved');
		?>
        <footer id="colophon" class="site-footer text-center">
            <div class="site-info container">
				<?php echo fundly_kses($footer_text); ?>
            </div><!-- .site-info -->
        </footer><!-- #colophon -->
		<?php
	}


}