<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package The_Line
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
			get_template_part( 'template-parts/content', 'event' );
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
