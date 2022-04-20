<?php
/**
 * Theme Banner Settings
 */
Redux::set_section('fundly_opt', array(
    'title'            => esc_html__( 'Banner Setting', 'fundly' ),
    'id'               => 'banner_settings_opt',
    'icon'             => 'el el-picture',
));

// Page Banner 
Redux::set_section('fundly_opt', array(
    'title'            => esc_html__( 'Page Banner', 'fundly' ),
    'id'               => 'page_banner_opt',
    'icon'             => '',
    'subsection' => true,
    'fields'           => array(
        array(
            'id'        => 'page_banner_toggle',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Page Banner', 'fundly'),
            'subtitle'  => esc_html__('Show Hide Page Banner Globally ', 'fundly'),
            'options'   => array(
                'show'  => esc_html__('Show Banner', 'fundly'),
                'hide'  => esc_html__('Hide Banner', 'fundly'),
            ), 
            'default'   => 'show',
        ),

        array(
            'id'        => 'page_banner_breadcrumb',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Page Breadcrumb', 'fundly'),
            'options'   => array(
                'show'  => esc_html__('Show', 'fundly'),
                'hide'  => esc_html__('Hide', 'fundly'),
            ), 
            'default'   => 'show',
            'required'  => array('page_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => 'page_banner_title',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Page Title', 'fundly'),
            'options'   => array(
                'show'  => esc_html__('Show', 'fundly'),
                'hide'  => esc_html__('Hide', 'fundly'),
            ), 
            'default'   => 'show',
            'required'  => array('page_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => 'page_banner_img_upload',
            'type'      => 'media',
            'title'     => __('Upload Banner', 'fundly'),
            'default'   => array(
                'url'   => FUNDLY_IMAGES.'/blog/banner/banner.webp',
            ),
            'required'  => array('page_banner_toggle', '=', 'show')

        ),
        array(
            'id'        => 'page_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog_breadcrumbs_area_two.page-banner .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => 0
            ),
            'required'  => array('page_banner_toggle', '=', 'show')
        ),
      )
));


// Blog Banner
Redux::set_section('fundly_opt', array(
    'title'            => esc_html__( 'Blog Banner', 'fundly' ),
    'id'               => 'blog_banner_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(

        array(
            'id'        => 'blog_banner_toggle',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Blog Banner', 'fundly'),
            'subtitle'  => esc_html__('Show Hide Blog Banner Globally ', 'fundly'),
            'options'   => array(
                'show'  => esc_html__('Show Banner', 'fundly'),
                'hide'  => esc_html__('Hide Banner', 'fundly'),
            ), 
            'default'   => 'show'
        ),

        array(
            'id'        => 'is_blog_banner_title',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Blog Title', 'fundly'),
            'options'   => array(
                'show'  => esc_html__('Show', 'fundly'),
                'hide'  => esc_html__('Hide', 'fundly'),
            ), 
            'default'   => 'show',
            'required'  => array('blog_banner_toggle', '=', 'show')
        ),

        array( 
            'title'     => esc_html__('Blog title', 'fundly'),
            'id'        => 'blog_banner_title',
            'type'      => 'text',
            'default'   => 'Blog List',
            'required'  => array('is_blog_banner_title', '=' , 'show')
        ),

        array(
            'id'        => 'blog_banner_img_upload',
            'type'      => 'media',
            'title'     => __('Upload Banner', 'fundly'),
            'default'   => array(
                'url'   => FUNDLY_IMAGES.'/blog/banner/banner.webp',
            ),
            'required'  => array('blog_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => 'blog_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog_breadcrumbs_area_two .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => 0
            ),
            'required'  => array('blog_banner_toggle', '=', 'show')
        ),
      )
));


// Single page Banner
Redux::set_section('fundly_opt', array(
    'title'            => esc_html__( 'Single Blog Banner', 'fundly' ),
    'id'               => 'single_blog_banner_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(

        array(
            'id'        => 'single_blog_banner_toggle',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Single Blog Banner', 'fundly'),
            'subtitle'  => esc_html__('Show Hide Banner Globally ', 'fundly'),
            'options'   => array(
                'show'  => esc_html__('Show Banner', 'fundly'),
                'hide'  => esc_html__('Hide Banner', 'fundly'),
            ), 
            'default'   => 'show'
        ),

        array(
            'id'        => 'single_blog_banner_breadcrumb',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Breadcrumb', 'fundly'),
            'options'   => array(
                'show'  => esc_html__('Show', 'fundly'),
                'hide'  => esc_html__('Hide', 'fundly'),
            ), 
            'default'   => 'show',
            'required'  => array('single_blog_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => 'is_single_blog_banner_title',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Title', 'fundly'),
            'options'   => array(
                'show'  => esc_html__('Show', 'fundly'),
                'hide'  => esc_html__('Hide', 'fundly'),
            ), 
            'default'   => 'show',
            'required'  => array('single_blog_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => 'single_blog_banner_img_upload',
            'type'      => 'media',
            'title'     => __('Upload Banner', 'fundly'),
            'default'   => array(
                'url'   => FUNDLY_IMAGES.'/blog/banner/banner.webp',
            ),
            'required'  => array('single_blog_banner_toggle', '=', 'show')

        ),

        array(
            'id'        => 'single_blog_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog_breadcrumbs_area_two.blog-single-page .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => 0
            ),
            'required'  => array('single_blog_banner_toggle', '=', 'show')
        ),
      )
));


//  Archive page Banner
Redux::set_section('fundly_opt', array(
    'title'            => esc_html__( 'Archive Banner', 'fundly' ),
    'id'               => 'archive_blog_banner_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(

        array(
            'id'        => 'archive_banner_toggle',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Archive  Banner', 'fundly'),
            'options'   => array(
                'show'  => esc_html__('Show Banner', 'fundly'),
                'hide'  => esc_html__('Hide Banner', 'fundly'),
            ), 
            'default'   => 'show'
        ),

        array(
            'id'        => 'archive_banner_breadcrumb',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Breadcrumb', 'fundly'),
            'options'   => array(
                'show'  => esc_html__('Show', 'fundly'),
                'hide'  => esc_html__('Hide', 'fundly'),
            ), 
            'default'   => 'show',
            'required'  => array('archive_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => 'is_archive_title',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Archive Title', 'fundly'),
            'options'   => array(
                'show'  => esc_html__('Show', 'fundly'),
                'hide'  => esc_html__('Hide', 'fundly'),
            ), 
            'default'   => 'show',
            'required'  => array('archive_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => 'archive_description',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Archive Description', 'fundly'),
            'options'   => array(
                'show'  => esc_html__('Show', 'fundly'),
                'hide'  => esc_html__('Hide', 'fundly'),
            ), 
            'default'   => 'show',
            'required'  => array('archive_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => 'archive_banner_img_upload',
            'type'      => 'media',
            'title'     => __('Upload Banner', 'fundly'),
            'default'   => array(
                'url'   => FUNDLY_IMAGES.'/blog/banner/banner.webp',
            ),
            'required'  => array('archive_banner_toggle', '=', 'show')

        ),

        array(
            'id'        => 'archive_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog_breadcrumbs_area_two.search-banner .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => 0
            ),
            'required'  => array('archive_banner_toggle', '=', 'show')
        ),
      )
));

//  Give Wp banner
Redux::set_section('fundly_opt', array(
	'title'            => esc_html__( 'Give Wp Banner', 'fundly' ),
	'id'               => 'give_wp_banner_opt',
	'icon'             => '',
	'subsection'       => true,
	'fields'           => array(

		array(
			'id'        => 'give_wp_banner_toggle',
			'type'      => 'button_set',
			'title'     => esc_html__('Show  Banner', 'fundly'),
			'options'   => array(
				'show'  => esc_html__('Show Banner', 'fundly'),
				'hide'  => esc_html__('Hide Banner', 'fundly'),
			),
			'default'   => 'show'
		),

		array(
			'id'        => 'give_wp_banner_breadcrumb',
			'type'      => 'button_set',
			'title'     => esc_html__('Show Breadcrumb', 'fundly'),
			'options'   => array(
				'show'  => esc_html__('Show', 'fundly'),
				'hide'  => esc_html__('Hide', 'fundly'),
			),
			'default'   => 'show',
			'required'  => array('give_wp_banner_toggle', '=', 'show')
		),

		array(
			'id'        => 'is_give_wp_title',
			'type'      => 'button_set',
			'title'     => esc_html__('Show  Title', 'fundly'),
			'options'   => array(
				'show'  => esc_html__('Show', 'fundly'),
				'hide'  => esc_html__('Hide', 'fundly'),
			),
			'default'   => 'show',
			'required'  => array('give_wp_banner_toggle', '=', 'show')
		),
		array(
			'id'        => 'give_wp_description',
			'type'      => 'button_set',
			'title'     => esc_html__('Show Description', 'fundly'),
			'options'   => array(
				'show'  => esc_html__('Show', 'fundly'),
				'hide'  => esc_html__('Hide', 'fundly'),
			),
			'default'   => 'show',
			'required'  => array('give_wp_banner_toggle', '=', 'show')
		),

		array(
			'id'        => 'give_wp_banner_img_upload',
			'type'      => 'media',
			'title'     => __('Upload Banner', 'fundly'),
			'default'   => array(
				'url'   => FUNDLY_IMAGES.'/blog/banner/givwp.webp',
			),
			'required'  => array('give_wp_banner_toggle', '=', 'show')

		),

		array(
			'id'        => 'give_wp_banner_overly',
			'type'      => 'color_rgba',
			'title'     => 'Banner Overly Color',
			'mode'      => 'background',
			'output'    => array( '.blog_breadcrumbs_area_two.search-banner .overlay_bg' ),
			'default'   => array(
				'color'     => '#000',
				'alpha'     => 0
			),
			'required'  => array('give_wp_banner_toggle', '=', 'show')
		),
	)
));


// search page Banner
Redux::set_section('fundly_opt', array(
    'title'            => esc_html__( 'Search Banner', 'fundly' ),
    'id'               => 'search_blog_banner_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(

        array(
            'id'        => 'search_banner_img_upload',
            'type'      => 'media',
            'title'     => __('Upload Banner', 'fundly'),
            'default'   => array(
                'url'   => FUNDLY_IMAGES.'/blog/banner/banner.webp',
            ),
        ),

        array(
            'id'        => 'search_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog_breadcrumbs_area_two.archive-banner .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => 0
            ),
        ),
    )
));


// 404 Error page
Redux::set_section('fundly_opt', array(
    'title'            => esc_html__( '404 Banner', 'fundly' ),
    'id'               => 'error_banner_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(

        array(
            'id'        => 'error_banner_toggle',
            'type'      => 'button_set',
            'title'     => esc_html__('Show 404  Banner', 'fundly'),
            'options'   => array(
                'show'  => esc_html__('Show Banner', 'fundly'),
                'hide'  => esc_html__('Hide Banner', 'fundly'),
            ),
            'default'   => 'show'
        ),

        array(
            'id'        => 'is_error_banner_title',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Title', 'fundly'),
            'options'   => array(
                'show'  => esc_html__('Show', 'fundly'),
                'hide'  => esc_html__('Hide', 'fundly'),
            ),
            'default'   => 'show',
            'required'  => array('error_banner_toggle', '=', 'show')
        ),

        array(
            'title'         => esc_html__('404 Banner Title', 'fundly'),
            'type'          => 'text',
            'id'            => 'error_banner_title',
            'default'       => '404',
            'required'      => array('is_error_banner_title', '=', 'show')
        ),

        array(
            'id'        => 'error_banner_breadcrumb',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Breadcrumb', 'fundly'),
            'options'   => array(
                'show'  => esc_html__('Show', 'fundly'),
                'hide'  => esc_html__('Hide', 'fundly'),
            ),
            'default'   => 'show',
            'required'  => array('error_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => 'error_banner_img_upload',
            'type'      => 'media',
            'title'     => __('Upload Banner', 'fundly'),
            'default'   => array(
                'url'   => FUNDLY_IMAGES.'/blog/banner/banner.webp',
            ),
            'required'  => array('error_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => '404_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog_breadcrumbs_area_two.banner-404 .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => 0
            ),
            'required'  => array('error_banner_toggle', '=', 'show')
        ),
    )
));

