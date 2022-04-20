<?php
Redux::set_section('fundly_opt', array(
	'title'     => esc_html__( 'Donations', 'fundly' ),
	'id'        => 'donation_page_opt',
	'icon'      => 'dashicons dashicons-admin-post',
));

/**
 * Blog Archive Settings
 */
Redux::set_section('fundly_opt', array(
	'title'         => esc_html__( 'Donation Archive', 'fundly' ),
	'id'            => 'donation_archive_settings_opt',
	'icon'          => '',
	'subsection'    => true,
	'fields'        => array(

		array(
			'id'       => 'donation_layout',
			'type'     => 'image_select',
			'title'    => __('Layout', 'fundly'),
			'subtitle' => __('Select your donation Layout', 'fundly'),
			'options'  => array(
				'full'      => array(
					'alt'   => '1 Column',
					'img'   => ReduxFramework::$_url.'assets/img/1col.png'
				),
				'left'      => array(
					'alt'   => '2 Column Left',
					'img'   => ReduxFramework::$_url.'assets/img/2cl.png'
				),
				'right'      => array(
					'alt'    => '2 Column Right',
					'img'    => ReduxFramework::$_url.'assets/img/2cr.png'
				),
			),
			'default' => 'full'
		),

	)
));


/**
 * Blog Single Post
 */
Redux::set_section('fundly_opt', array(
	'title'         => esc_html__( 'Single Donation', 'fundly' ),
	'id'            => 'donation_single_post_settings_opt',
	'icon'          => '',
	'subsection'    => true,
	'fields'        => array(

		array(
			'id'       => 'donation_single_layout',
			'type'     => 'image_select',
			'title'    => __('Layout', 'fundly'),
			'subtitle' => __('Select Layout', 'fundly'),
			'options'  => array(
				'full'      => array(
					'alt'   => '1 Column',
					'img'   => ReduxFramework::$_url.'assets/img/1col.png'
				),
				'left'      => array(
					'alt'   => '2 Column Left',
					'img'   => ReduxFramework::$_url.'assets/img/2cl.png'
				),
				'right'      => array(
					'alt'    => '2 Column Right',
					'img'    => ReduxFramework::$_url.'assets/img/2cr.png'
				),
			),
			'default' => 'full'
		),
		array(
			'id' => 'donation_select_header',
			'type'     => 'select',
			'title'    => __('Select Custom Header', 'fundly'),
			'options'  => fundly_get_all_header(),
			'default'  => 'default',
		),
		array(
			'id' => 'donation_select_footer',
			'type'     => 'select',
			'title'    => __('Select Custom footer', 'fundly'),
			'options'  => fundly_get_all_footer(),
			'default'  => 'default',
		),
		array(
	    'id'       => 'use_theme_color',
	    'type'     => 'switch',
	    'title'    => esc_html__('Use Theme Color', 'fundly'),
	    'default'  => true,
	    'on' => esc_html__('Yes', 'fundly'),
	    'off' => esc_html__('no', 'fundly'),
		) //end switch
	)
));

