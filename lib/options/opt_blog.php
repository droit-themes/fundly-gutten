<?php
Redux::set_section('fundly_opt', array(
	'title'     => esc_html__( 'Blog', 'fundly' ),
	'id'        => 'blog_page_opt',
	'icon'      => 'dashicons dashicons-admin-post',
));


/**
 * Blog Archive Settings
 */
Redux::set_section('fundly_opt', array(
    'title'         => esc_html__( 'Blog Archive', 'fundly' ),
    'id'            => 'blog_archive_settings_opt',
    'icon'          => '',
    'subsection'    => true,
    'fields'        => array(

        array(
            'id'       => 'blog_layout',
            'type'     => 'image_select',
            'title'    => __('Blog Layout', 'fundly'),
            'subtitle' => __('Select your blog Layout', 'fundly'),
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
            'default' => 'right'
        ),

	    array(
		    'id' => 'select_header',
		    'type'     => 'select',
		    'title'    => __('Select Custom Header', 'fundly'),
		    'options'  => fundly_get_all_header(),
		    'default'  => 'default',
	    ),
	    array(
		    'id' => 'select_footer',
		    'type'     => 'select',
		    'title'    => __('Select Custom footer', 'fundly'),
		    'options'  => fundly_get_all_footer(),
		    'default'  => 'default',
	    ),

        array(
            'id' => 'read_more_text_button',
            'title'    => __('Read More Button Text', 'fundly'),
            'type' => 'text',
            'default' => 'Read More'
        ),
    )
));


/**
 * Blog Single Post
 */
Redux::set_section('fundly_opt', array(
	'title'         => esc_html__( 'Single Post', 'fundly' ),
	'id'            => 'blog_single_post_settings_opt',
	'icon'          => '',
    'subsection'    => true,
	'fields'        => array(
		array(
			'id' => 'select_single_header',
			'type'     => 'select',
			'title'    => __('Select Custom Header', 'fundly'),
			'options'  => fundly_get_all_header(),
			'default'  => 'default',
		),
		array(
			'id' => 'select_single_footer',
			'type'     => 'select',
			'title'    => __('Select Custom footer', 'fundly'),
			'options'  => fundly_get_all_footer(),
			'default'  => 'default',
		),

        array(
            'id'        => 'display_blog_share',
            'type'      => 'button_set',
            'title'     => esc_html__('Display Social Share?', 'fundly'),
            'options'   => array(
                'yes'   => 'Yes',
                'no'    => 'No',
            ),
            'default'   => 'no'
        ),
	)
));

