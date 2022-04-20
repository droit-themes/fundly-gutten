<?php 

Redux::set_section('fundly', array(
    'title'            => esc_html__( 'Search Banner', 'fundly' ),
    'id'               => 'fundly_search_blog_banner',
    'icon'             => 'el el-cog',
    'subsection' => true,
    'fields'           => array(
        array(
            'id'       => 'fundly_search_banner_upload',
            'type'     => 'media', 
            'url'      => true,
            'title'    => __('Upload Banner', 'fundly'),
            'default'  => array(
                'url'=> FUNDLY_IMAGES.'/blog/banner/banner.webp',
            ),
            'url'      => false
        ),
        array(
            'id'        => 'fundlys_search_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog_breadcrumbs_area_two.archive-banner .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),                        
        ),
      )
));

