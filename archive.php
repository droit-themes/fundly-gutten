<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fundly
 */

get_header();

$description = fundly_opt('archive_description', 'show');
$blog_sidebar = fundly_opt('blog_layout');
$column = ($blog_sidebar == 'full') ? 10 : 8;

if(should_display_donarity_template()) {
	$blog_sidebar = fundly_opt('donation_layout');
	$column =  ($blog_sidebar == 'full') ? 12 : 8;
}

/**
 * Donarity
 * */
?>
	<main id="primary" class="site-main">
	<?php
		get_template_part('template-parts/banner/banner', 'archive');

		fundly_wrapper_start( $blog_sidebar, $column);
		
		 if ( have_posts() && $description == 'show') : ?>

			<header class="page-header">
				<?php
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				if(should_display_donarity_template()) {
					get_template_part( 'template-parts/give/content', 'list' );
                }else{
					get_template_part( 'template-parts/blog/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
				}
			endwhile;
			fundly_pagination();
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		fundly_wrapper_end( $blog_sidebar );
		?>
	</main><!-- #main -->

<?php
get_footer();
