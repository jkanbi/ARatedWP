<?php
/*
 * Template Name: Page Github Articles
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


get_header(); ?>

<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

	<div id="primary" <?php astra_primary_class(); ?>>
		
		<?php astra_primary_content_top(); ?>

		<!-- GH MD code, 10/07/23, JK-->
		<?php 
		$slug = get_post_field( 'post_name');
		echo '<div class="github" style="padding-top:100px">';
		echo do_shortcode('[git-github-markdown url="https://github.com/$username/$repositary/blob/main/$folder/'.$slug.'.md" cache_ttl="60" cache_strategy=static]');
		echo '</div>';
		?>
		<!-- end of GH MD code, 10/07/23, JK>
		
		<?php astra_content_page_loop(); ?>

		<?php astra_primary_content_bottom(); ?>

	</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>
