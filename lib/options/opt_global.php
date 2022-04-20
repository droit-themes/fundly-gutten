<?php
/**
 * Theme Global Settings
 */
Redux::set_section('fundly_opt', array(
    'title'            => esc_html__( 'Global Setting', 'fundly' ),
    'id'               => 'global_settings_optssdf',
    'icon'             => 'el el-picture',
));

// Page Typography
Redux::set_section( 'fundly_opt', array(
    'title'            => esc_html__( 'Typography', 'fundly' ),
    'id'               => 'typo_opt',
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
    )
) );

/**
 * Theme Scheme Colors Options
 */
Redux::set_section('fundly_opt', array(
    'title'     => esc_html__( 'Color Scheme', 'fundly' ),
    'id'        => 'color_scheme_opt',
    'subsection'       => true,
    'icon'      => 'dashicons dashicons-admin-appearance',
    'fields'    => array(
        array(
            'id'          => 'theme_color_opt',
            'type'        => 'color',
            'title'       => esc_html__( 'Theme Color', 'fundly' ),
            'output_variables' => true,
        ),
        array(
            'id'          => 'theme_body_color_opt',
            'type'        => 'color',
            'title'       => esc_html__( 'Text Color', 'fundly' ),
            'output_variables' => true,
        ),
        array(
            'id'          => 'theme_link_color_opt',
            'type'        => 'color',
            'title'       => esc_html__( 'Link Color', 'fundly' ),
            'output_variables' => true,
        ),
        array(
            'id'          => 'theme_hover_color_opt',
            'type'        => 'color',
            'title'       => esc_html__( 'Link Hover Color', 'fundly' ),
            'output_variables' => true,
        ),
        array(
            'id'          => 'theme_title_color_opt',
            'type'        => 'color',
            'title'       => esc_html__( 'Heading Color ( H1 - H6 )', 'fundly' ),
            'output_variables' => true,
        ),

    )
));
