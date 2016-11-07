<?php
/**
 * @package WordPress
 * @subpackage Blaine
 * @since Blaine 1.0
 * Template name: Portfolio stripe
 */
get_header(); ?>

	<?php thb_page_before(); ?>

		<?php thb_page_start(); ?>

		<section id="page-content">

			<?php thb_get_template_part('partial-page-header'); ?>

			<div class="thb-section-container">

				<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

					<div id="main-content">

						<?php thb_get_template_part('partial-featured-image'); ?>

						<?php if ( get_the_content() != '') : ?>
						<div class="thb-text">
							<?php the_content(); ?>
						</div>
						<?php endif; ?>

						<?php
							if( ! function_exists('thb_portfolio_loop') ) {
								echo "<p class='thb-message warning'>" . __( "It looks like the THB Portfolio plugin is not active.</br>Please install or activate it in order to display your portfolio items.", "thb_text_domain" ) . "</p>";
							}
						?>

					</div>

				<?php endwhile; endif; ?>

			</div>

			<?php
				if( function_exists('thb_portfolio_loop') ) {
					echo "<div id='thb-portfolio-container'>";

					if ( thb_portfolio_stripe_is_custom_order() ) {
						echo '<ul id="thb-stripe-portfolio">';

							foreach ( thb_portfolio_stripe_page_order() as $item ) {
								$post = get_post( $item['value'] );
								setup_postdata( $post );

								thb_portfolio_item( array(
									'portfolio_item_template' => 'portfolio-stripe-item'
								) );
							}

						echo '</ul>';
					}
					else {
						thb_portfolio_loop( array(
							'portfolio_template' => 'portfolio-stripe',
							'portfolio_item_template' => 'portfolio-stripe-item'
						) );
						thb_pagination();
					}

					echo "</div>";
				}
			?>

		</section>

		<?php thb_page_end(); ?>

	<?php thb_page_after(); ?>

<?php get_footer(); ?>