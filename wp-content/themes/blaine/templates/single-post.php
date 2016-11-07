<?php
/**
 * Shortcode Ultimate single-post custom
 */
?>
<div class="su-posts su-posts-single-post">
	<?php
		// Prepare marker to show only one post
		$thb_first = true;
		// Posts are found
		if ( $posts->have_posts() ) {
			while ( $posts->have_posts() ) :
				$posts->the_post();
				global $post;

				// Show oly first post
				if ( $thb_first ) {
					$thb_first = false;
					?>
					<div id="su-post-<?php the_ID(); ?>" class="su-post">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php thb_featured_image('medium-cropped', array( 'link_class' => 'su-post-thumbnail item-thumb' ), get_the_ID() ); ?>
						<?php endif; ?>
						<h1 class="su-post-title"><?php the_title(); ?></h1>
						<div class="su-post-meta"><?php the_time( get_option( 'date_format' ) ); ?> | <a href="<?php comments_link(); ?>" class="su-post-comments-link"><?php comments_number( __( '0 comments', 'su' ), __( '1 comment', 'su' ), __( '%n comments', 'su' ) ); ?></a></div>
						<div class="su-post-content">
							<?php the_content(); ?>
						</div>
					</div>
					<?php
				}
			endwhile;
		}
		// Posts not found
		else {
			echo '<h4>' . __( 'Posts not found', 'su' ) . '</h4>';
		}
	?>
</div>