<?php
/**
 * Gutenberg integration.
 *
 * @package Fundly
 */

/**
 * Gutenberg Editor.
 *
 * @package Fundly
 */
function fundly_gutenberg_editor_support() {

	// Add support for block styles.
	add_theme_support( 'wp-block-styles' );
	// Add support for custom spacing.
	add_theme_support( 'custom-spacing' );
	// Add support for custom font sizes.
	add_theme_support( 'custom-font-sizes' );
	// Add support for wide images.
	add_theme_support( 'align-wide' );
	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );

	add_theme_support( 'custom-units', array() );
	add_theme_support( 'experimental-link-color' );
	add_theme_support( 'border' );

	// Add custom colors to editor color palette.
	add_theme_support(
		'editor-color-palette',
		array(
			array(
				'name'  => __( 'Primary', 'fundly' ),
				'slug'  => 'primary',
				'color' => '#30BA78',
			),
			array(
				'name'  => __( 'Primary 2', 'fundly' ),
				'slug'  => 'primary-2',
				'color' => '#FFAC00',
			),
			array(
				'name'  => __( 'Primary 3', 'fundly' ),
				'slug'  => 'primary-3',
				'color' => '#FF6433',
			),
		)
	);
}
add_action( 'after_setup_theme', 'fundly_gutenberg_editor_support' );

/**
 * Enqueue Gutenberg Styles.
 *
 * @return void
 */
function fundly_gutenberg_editor_styles() {
	wp_enqueue_style( 'fundly-gutenberg-styles', FUNDLY_CSS . '/gutenberg.css', false, '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'fundly_gutenberg_editor_styles' );
add_action( 'enqueue_block_editor_assets', 'fundly_gutenberg_editor_styles' );

/**
 * Register Custom Pattern
 */
function fundly_custom_pattern() {
	register_block_pattern(
		'fundly/pattern',
		array(
			'title'      => __( 'Home Slider Two', 'fundly' ),
			'categories' => array( 'fundly' ),
			'content'    => '<!-- wp:cover {"url":"https://fundly.droitlab.com/gutenberg/wp-content/uploads/2022/03/Group-47451.webp","id":24116,"dimRatio":0,"focalPoint":{"x":"0.06","y":"0.55"},"align":"full","blockId":"cover-37b10a","dbPadding":{"desktop":{"top":"80","right":"","bottom":"40","left":"","unit":"px"},"tablet":{"top":"","unit":"px","bottom":"","right":"20","left":"20"},"mobile":{"right":"20","unit":"px","left":"20"}},"dbMargin":{"desktop":{"top":"","right":"","bottom":"","left":"1","unit":"px"}},"dbCoverHeight":{"desktop":800,"tablet":600,"mobile":500,"unit":"px"}} -->
			<div class="wp-block-cover alignfull droit-block-cover-37b10a"><span aria-hidden="true" class="has-background-dim-0 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-24116" alt="" src="https://fundly.droitlab.com/gutenberg/wp-content/uploads/2022/03/Group-47451.webp" style="object-position:6% 55%" data-object-fit="cover" data-object-position="6% 55%"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"className":"fundly-slider"} -->
			<div class="wp-block-columns alignwide fundly-slider" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"left":"0px","bottom":"0px"}}}} -->
			<div class="wp-block-column is-vertically-aligned-center" style="padding-bottom:0px;padding-left:0px"><!-- wp:heading {"blockId":"heading-3845b7","dbMargin":{"desktop":{"top":"0","right":"0","bottom":"15","left":"0","unit":"px"}},"dbTypography":{"fontFamily":"Playfair Display","typeFace":"serif","fontSize":{"desktop":65,"tablet":50,"mobile":40,"unit":"px"},"fontWeight":"","transform":"","style":"","decoration":"","lineHeight":{"desktop":"","tablet":"","mobile":"","unit":"px"},"letterSpacing":{"desktop":"","tablet":"","mobile":"","unit":"px"}}} -->
			<h2 class="droit-block-heading-3845b7">The measure of a life is its donation.</h2>
			<!-- /wp:heading -->
			
			<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px"}},"textColor":"white","blockId":"heading-8d9735","dbPadding":{"desktop":{"top":"","right":"","bottom":"","left":"","unit":"px"},"tablet":{"right":"","unit":"px","left":""}},"dbMargin":{"desktop":{"top":"0","right":"0","bottom":"20","left":"0","unit":"px"}},"dbTypography":{"fontFamily":"Open Sans","typeFace":"sans-serif","fontSize":{"desktop":16,"tablet":15,"mobile":12,"unit":"px"},"fontWeight":"400","transform":"","style":"","decoration":"","lineHeight":{"desktop":30,"tablet":"","mobile":"","unit":"px"},"letterSpacing":{"desktop":"","tablet":"","mobile":"","unit":"px"}}} -->
			<h3 class="has-white-color has-text-color droit-block-heading-8d9735" style="font-size:20px">There are many variations of passages of Lorem Ipsum available but majority have suffered alteration in some form</h3>
			<!-- /wp:heading -->
			
			<!-- wp:buttons {"blockId":"buttons-90e75a"} -->
			<div class="wp-block-buttons droit-block-buttons-90e75a"><!-- wp:button {"backgroundColor":"primary-2","width":50,"style":{"border":{"radius":"2px"},"color":{"text":"#212226"}},"blockId":"button-15e57e","dbPadding":{"desktop":{"top":"20","right":"0","bottom":"0","left":"0","unit":"px"}},"dbMargin":{"desktop":{"top":"0","right":"0","bottom":"0","left":"0","unit":"px"}},"dbHoverColors":{"text":"#ffffff","background":"#413535"}} -->
			<div class="wp-block-button has-custom-width wp-block-button__width-50 droit-block-button-15e57e"><a class="wp-block-button__link has-primary-2-background-color has-text-color has-background" style="border-radius:2px;color:#212226">Donate Now</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:column -->
			
			<!-- wp:column -->
			<div class="wp-block-column"></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div></div>
			<!-- /wp:cover -->',
		)
	);
}
add_action( 'init', 'fundly_custom_pattern' );
