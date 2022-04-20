<?php
// Header Section
Redux::set_section( 'fundly', array(
    'title'            => esc_html__( 'Style', 'fundly' ),
    'id'               => 'fundly_style_sec',
    'customizer_width' => '400px',
    'icon'             => 'el el-brush',
));

// color 

Redux::set_section( 'fundly', array(
    'title'            => esc_html__( 'Color', 'fundly' ),
    'id'               => 'fundly_color_opt',
    'subsection'       => true,
    'icon'             => 'el el-cogs',
    'fields'           => array(
      
        array(
            'id'       => 'fundly_primary_color',
            'type'     => 'color',
            'title'    => __('Primary Color', 'fundly'), 
            'validate' => 'color',
            'mode'     => 'color',
            'output'   => array('h1, h2, h3, h4, h5, h6, h1 a, h2 a, h3 a, h4 a, h5 a, h6 a, .blog_title a, .widget-title,.menu > .nav-item > .nav-link')
        ),
        array(
            'id'       => 'fundly_link_color',
            'type'     => 'color',
            'title'    => __('Link Color', 'fundly'), 
            'validate' => 'color',
            'mode'     => 'color',
            'output'   => array('a, .media_blog_content .post_bottom .learn_btn_two, .widget ul > li a, .widget a, .post-meta a')
        ),
        array(
            'id'       => 'fundly_secondary_color',
            'type'     => 'color',
            'title'    => __('Secondary Color', 'fundly'), 
            'validate' => 'color',
            'output'   => array(
               'color'              => 'a:hover, a:hover, a:focus, a:active, h2 a:hover, .widget_categories ul li a:hover,.menu > .nav-item:hover .nav-link, .media_blog_content .post_bottom .learn_btn_two:hover, .widget ul > li:hover > a, .widget a:hover, .post-meta a:hover', 
               'background-color'   => '.site-footer, .pagination .page-numbers.current, .pagination .page-numbers:hover,.pagination .page-numbers.prev:hover, .pagination .page-numbers.next:hover,.menu > .nav-item > .nav-link:before, .featured_post',
               'border-color'   => '.site-footer, .pagination .page-numbers.current, .pagination .page-numbers:hover,
               .pagination .page-numbers.prev:hover, .pagination .page-numbers.next:hover'
            )
        ), 
        
        array(
            'id'       => 'fundly_body_color',
            'type'     => 'color',
            'title'    => __('Body Color', 'fundly'), 
            'validate' => 'color',
            'mode'     => 'color',
            'output'   => array('body, .post-meta, .widget_rss ul li .rssSummary, .media_blog_content .post_bottom')
        ),

        
    )
) );

// Fundly Logo
Redux::set_section( 'fundly', array(
    'title'            => esc_html__( 'Typography', 'fundly' ),
    'id'               => 'fundly_style_opt',
    'subsection'       => true,
    'icon'             => 'el el-cogs',
    'fields'           => array(
        array(
            'id'        => 'body_typoraphy',
            'type'      => 'typography',
            'title'     => esc_html__( 'Body Typography', 'fundly'),
            'subtitle'  => esc_html__( 'These settings control the typography for all H1 Headers.', 'fundly'),
            'output'    => 'body, .media_blog_content'
        ),
        array(
            'id'        => 'h1_typo',
            'type'      => 'typography',
            'title'     => esc_html__( 'H1 Headers Typography', 'fundly'),
            'subtitle'  => esc_html__( 'These settings control the typography for all H1 Headers.', 'fundly'),
            'output'    => 'h1'
        ),
        array(
            'id'        => 'h2_typo',
            'type'      => 'typography',
            'title'     => esc_html__( 'H2 Headers Typography', 'fundly'),
            'subtitle'  => esc_html__( 'These settings control the typography for all H1 Headers.', 'fundly'),
            'output'    => 'h2'
        ),
        array(
            'id'        => 'h3_typo',
            'type'      => 'typography',
            'title'     => esc_html__( 'H3 Headers Typography', 'fundly'),
            'subtitle'  => esc_html__( 'These settings control the typography for all H1 Headers.', 'fundly'),
            'output'    => 'h3'
        ),
        array(
            'id'        => 'h4_typo',
            'type'      => 'typography',
            'title'     => esc_html__( 'H4 Headers Typography', 'fundly'),
            'subtitle'  => esc_html__( 'These settings control the typography for all H1 Headers.', 'fundly'),
            'output'    => 'h4'
        ),
        array(
            'id'        => 'h5_typo',
            'type'      => 'typography',
            'title'     => esc_html__( 'H5 Headers Typography', 'fundly'),
            'subtitle'  => esc_html__( 'These settings control the typography for all H1 Headers.', 'fundly'),
            'output'    => 'h5'
        ),
        array(
            'id'        => 'h6_typo',
            'type'      => 'typography',
            'title'     => esc_html__( 'H6 Headers Typography', 'fundly'),
            'subtitle'  => esc_html__( 'These settings control the typography for all H1 Headers.', 'fundly'),
            'output'    => 'h6'
        ),

    )
) );
