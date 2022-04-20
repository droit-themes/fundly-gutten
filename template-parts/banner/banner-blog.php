<?php
/**
* Display page banner
*/

$show_banner = fundly_opt('blog_banner_toggle', 'show')    ;
$banner_url = fundly_opt('blog_banner_img_upload');
$show_title = fundly_opt('is_blog_banner_title', 'show');
$title = fundly_opt('blog_banner_title', get_bloginfo('name'));
$banner_background_url = FUNDLY_IMAGES.'/blog/banner/banner.webp';
  
if ( $banner_url && !empty($banner_url['url']) ) {
    $banner_background_url = $banner_url['url'];
}

if (!class_exists('Redux')) {
    $banner_background_url = '';
}

if ( $show_banner == 'show' ) {
    if ( $banner_background_url != '' ) {  ?>
        <div class="blog_breadcrumbs_area_two parallaxie" data-bg-img="<?php echo esc_url($banner_background_url); ?>">
        <div class="overlay_bg"></div>
        <?php
    } else { ?>
        <div class="blog_breadcrumbs_area_two banner-with-color">
            <?php
            }
            ?>
            <div class="container">
                <div class="breadcrumb_content text-black text-center">
                    <?php
                    if ($show_title == 'show') { ?>
                        <h2 class="page_title">
                            <?php echo esc_html( $title ); ?>
                        </h2>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php
}

