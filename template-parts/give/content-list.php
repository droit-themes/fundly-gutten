

        <article id="post-<?php the_ID(); ?>" <?php post_class( 'dl-give-form col-md-4' ); ?>>
            <div class="dl_latest_causes_item">
				<?php
				// Maybe display the featured image.
				if(has_post_thumbnail()) {
					printf(
						'<div class="give-card__media">%s</div>',
						get_the_post_thumbnail( get_the_ID(), 'full' )
					);
				}
				?>
                <div class="dl_lates_causes_content">
					<?php
					the_terms( get_the_ID(), 'give_forms_category', '<div class="give-card__category">' , ' ', '</div>' );
					// Maybe display the form title.
					printf(
						'<h3 class="give-card__title">
											<a href="%s" class="text-decoration-none">%s</a>
										</h3>',
						get_the_permalink(),
						get_the_title()
					);
					$args = array(
						'show_text' => true,
						'show_bar' => true,
						'income_text' => __( 'Raised', 'fundly' ),
						'goal_text' => __( 'Goal', 'fundly' ),
						'custom_goal_progress' => ''
					);
					$bar_opts = array(
						'type' => 'line',
					);
					dl_addons_goal_progress(get_the_ID(), $args, $bar_opts );
					?>
                </div>

            </div>
        </article>

