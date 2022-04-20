<?php 
 /**
  * Display page banner 
  */
$show_banner = fundly_opt('single_blog_banner_toggle', 'show');
$show_banner_in_page = fundly_page_meta('is_banner', get_the_ID(), 1);

$banner_url = fundly_opt('single_blog_banner_img_upload');
$banner_url_page= fundly_page_meta('banner_background_image', get_the_ID());  

$how_title = fundly_opt('is_single_blog_banner_title', 'show');
$show_breadcrumbs = fundly_opt('single_blog_banner_breadcrumb', 'show');

$banner_background_url = FUNDLY_IMAGES.'/blog/banner/banner.webp';

if($banner_url_page && $banner_url_page != ''){
    $banner_background_url = $banner_url_page;
}elseif($banner_url && !empty($banner_url['url'])) {
    $banner_background_url = $banner_url['url'];
}
if(!class_exists('Redux')){
    $banner_background_url = '';
  }
if($show_banner == 'show') :
 if($show_banner_in_page):
?>

<?php if($banner_background_url != '') :  ?>
<div class="blog_breadcrumbs_area_two parallaxie" data-bg-img="<?php echo esc_url($banner_background_url); ?>">
<div class="overlay_bg"></div>
<?php else: ?>
<div class="blog_breadcrumbs_area_two banner-with-color">
<?php endif; ?>        
        <div class="container">
            <div class="breadcrumb_content text-black text-center">
               <?php if($how_title == 'show') : ?>
                <h2 class="page_title text-break"><?php single_post_title(); ?></h2>
                <div class="post-meta">
                    <?php 
                    fundly_posted_on();
                    fundly_posted_by();
                    ?>
               </div>
               <?php endif; ?> 
            </div>
        </div>
</div>
<?php 
endif;
endif;
