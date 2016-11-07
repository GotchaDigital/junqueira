<?php
/**
 * @package WordPress
 * @subpackage Blaine
 * @since Blaine 1.0
 */

get_header();

if( is_category() ) {
	$thb_pagetitle = single_cat_title( '', false );
	$thb_subtitle = __(" ", 'thb_text_domain');
	
}
elseif( is_tag() ) {
	$thb_pagetitle = single_cat_title( '', false );
	$thb_subtitle = __(" ", 'thb_text_domain');
}
elseif( is_tax() ) {
	$thb_pagetitle = single_cat_title( '', false );
	$thb_subtitle = __(" ", 'thb_text_domain');
}
elseif( is_search() ) {
	$thb_subtitle = __( 'Search Results', 'thb_text_domain' );
	$thb_pagetitle = ' &ldquo;' . get_search_query() . '&rdquo;';
}
elseif( is_author() ) {
	if(have_posts()) {
		the_post();
		$thb_pagetitle = get_the_author();
		$thb_subtitle = __(" ", 'thb_text_domain');
		rewind_posts();
	}
}
elseif ( is_day() ) {
	$thb_pagetitle = get_the_date();
	$thb_subtitle = __("Archives", 'thb_text_domain');
}
elseif ( is_month() ) {
	$thb_pagetitle = get_the_date( 'F Y' );
	$thb_subtitle = __("Archives", 'thb_text_domain');
}
elseif ( is_year() ) {
	$thb_pagetitle = get_the_date( 'Y' );
	$thb_subtitle = __("Archives", 'thb_text_domain');
}

?>

<?php thb_page_before(); ?>

	<?php thb_page_start(); ?>

		<script>
			jQuery(document).ready(function(){
				jQuery(".thb-section-container").css("position", "relative");
				jQuery(".thb-section-container").css("z-index", "100");
			});			
		</script>

		<div class="thb-background-holder">
		<style type="text/css" id="thb-background-style">.thb-background-overlay { position: absolute; top: 0; left: 0; right: 0; bottom: 0; }.thb-background-holder {background-image: url(http://localhost/junqueira/wp-content/uploads/2013/12/Untitled-1.jpg);background-size: cover;background-attachment: fixed;z-index:0;background-position: center center;}.thb-mobile .thb-background-holder {background-attachment: scroll;}</style>			</div>

		<section id="page-content">
		
			<?php thb_get_template_part( 'partial-page-header', array( 'thb_title' => $thb_pagetitle, 'thb_subtitle' => $thb_subtitle ) ); ?>

			<div class="thb-section-container">
				
				<div id="main-content">

					<?php
						rewind_posts();
						get_template_part('loop/archive');
					?>

				</div>

				<?php thb_page_sidebar(); ?>

			</div>

		</section>

		<?php thb_page_end(); ?>

	<?php thb_page_after(); ?>

<?php get_footer(); ?>