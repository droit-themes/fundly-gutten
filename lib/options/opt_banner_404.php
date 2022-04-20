<?php 
Redux::set_section('fundly', array(
    'title'            => esc_html__( '404 Banner', 'fundly' ),
    'id'               => 'fundly_404_banner',
    'icon'             => 'el el-cog',
    'subsection' => true,
    'fields'           => array(
        array(
            'id'       => 'fundly_404_banner_toggle',
            'type'     => 'button_set',
            'title'    => esc_html__('Show 404  Banner', 'fundly'),
            'options' => array(
                'show' => esc_html__('Show Banner', 'fundly'), 
                'hide' => esc_html__('Hide Banner', 'fundly'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'fundly_404_title',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Title', 'fundly'),
            'options' => array(
                'show' => esc_html__('Show', 'fundly'), 
                'hide' => esc_html__('Hide', 'fundly'), 
            ), 
            'default' => 'show'
        ),
        array(
            'title'    => esc_html__('404 Banner Titile', 'fundly'),
            'type' => 'text',
            'id'       => 'fundly_404_banner_title',
            'placeholder' => esc_html__( '404 Banner Titile', 'fundly'),
            'required'    => array('fundly_404_title', '=', 'show')
        ),
        array(
            'id'       => 'fundly_404_banner_breadcrumb',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Breadcrumb', 'fundly'),
            'options' => array(
                'show' => esc_html__('Show', 'fundly'), 
                'hide' => esc_html__('Hide', 'fundly'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'fundly_404_banner_upload',
            'type'     => 'media', 
            'url'      => true,
            'title'    => __('Upload Banner', 'fundly'),
            'default'  => array(
                'url'=> FUNDLY_IMAGES.'/blog/banner/banner.webp',
            ),
            'url'      => false

        ),
        array(
            'id'        => 'fundlys_404_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog_breadcrumbs_area_two.banner-404 .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),                        
        ),
      )
));