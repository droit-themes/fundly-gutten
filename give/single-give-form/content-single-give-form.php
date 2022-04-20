<?php get_header();

$blog_sidebar = fundly_opt('donation_single_layout');
$column = ($blog_sidebar == 'full') ? 10 : 8;
$use_theme_color = fundly_opt('use_theme_color');
$body_content = function_exists('get_field') ? get_field('body_content', get_the_ID()) : '';

?>

<main id="primary" class="site-main">
	<?php fundly_wrapper_start( $blog_sidebar, $column); ?>
	<?php  if(has_post_thumbnail()){  ?>
        <div class="donation-feature-image">
			<?php  the_post_thumbnail('full'); ?>
        </div>
	<?php } ?>
    <div class="single-gol-progress">
		<?php

		$args = array(
			'show_text' => true,
			'show_bar' => true,
			'income_text' => __( 'Raised', 'fundly' ),
			'goal_text' => __( 'Goal', 'fundly' ),
		);
		if($use_theme_color){
			$args['color'] = '--primary-color';
		}
		$bar_opts = array(
			'type' => 'line',
		);

		dl_addons_single_goal_progress(get_the_ID(), $args, $bar_opts );

		?>
    </div>
    <div class="donation-single-title">
		<?php the_title('<h2>', '</h2>'); ?>
    </div>
    <div class="single-content">
		<?php  echo fundly_return( $body_content ); ?>
    </div>
    <div class="donation-form">
		<?php 	$atts = array(
			'id' => get_the_ID(),  // integer.
			'show_title' => false, // boolean.
			'show_goal' => false, // boolean.
			'show_content' => 'none', //above, below, or none
			'display_style' => 'donarity_single', //modal, button, and reveal
			'continue_button_title' => 'Donate' //string
		); ?>
		<?php give_form_display_content( get_the_ID(), $args = array() ); ?>
		
    </div>
	<?php fundly_wrapper_end( $blog_sidebar ); ?>
	<div class="fundly_donate_area" id="fundly_donate_are">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="fundly_donate_content">
						<h2>Donate Here</h2>
						<p>Donate an amount of your choosing via multiple souces.You can donate through your logged in account, as a guest or anonymously</p>
					</div>
				</div>
				<div class="col-lg-6">
					<h5 class="choose_t">Choose an amount</h5>
					<?php echo dl_give_get_donation_form($atts) ?>
				</div>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>